<?php

namespace frontend\controllers;

use frontend\models\Comment;
use frontend\models\News;
use frontend\models\NewsCategory;
use frontend\models\NewsSearch;
use frontend\models\Tag;
use Yii;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {

        return $this->render('index', [
        ]);
    }

    /**
     * Displays a single News model.
     * @param int $id ID
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $request = Yii::$app->request;
        $model = $this->findModel($id);
        $model->views += 1;
        $model->save(false);
        $commentModel = new Comment();
        $commentList = $commentModel->findByNewsId($id);
        if ($commentModel->load($request->post())) {
            $commentModel->setComment($id);
            $commentModel->save(false);
        $this->redirect(['view','id' => $id]);
        }

        return $this->render('view', [
            'model' => $model,
            'commentModel' => $commentModel,
            'commentList' => $commentList
        ]);
    }

    public function actionList()
    {
        $commentModel = new Comment();
        $model = new News();
        $newsList = $model->find()->orderBy(['id' => SORT_DESC,]);

        $countQuery = clone $newsList;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 4]);
        $models = $newsList->offset($pages->offset)
            ->limit($pages->limit)
            ->all();


        return $this->render('list', [
            'newsList' => $models,
            'commentModel' => $commentModel,
            'pages' => $pages,
        ]);
    }

    public function actionTag($title)
    {
        $commentModel = new Comment();
        $tag = Tag::findByTitle($title);
        $newsList = $tag->getNews();

        $countQuery = clone $newsList;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 4]);
        $models = $newsList->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('list', [
            'newsList' => $models,
            'newsListByCategory' => $models,
            'commentModel' => $commentModel,
            'pages' => $pages,
        ]);
    }

    public function actionCategory($category)
    {

        $commentModel = new Comment();
        $categoryModel = new NewsCategory();
        $categoryItem = $categoryModel->getCategoryItem($category);

        if ($category == null || $categoryItem == null) {
            return '404';
        }

        $newsListByCategory = News::findByCategoryId($categoryItem->id);

        $countQuery = clone $newsListByCategory;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 4]);
        $models = $newsListByCategory->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('category', [
            'newsListByCategory' => $models,
            'commentModel' => $commentModel,
            'categoryItem' => $categoryItem,
            'pages' => $pages,
        ]);
    }


    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
