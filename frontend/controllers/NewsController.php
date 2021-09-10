<?php

namespace frontend\controllers;

use frontend\models\Comment;
use frontend\models\News;
use frontend\models\NewsCategory;
use frontend\models\NewsSearch;
use Yii;
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
        $commentList = $commentModel->find()->where(['news_id' => $id])->all();
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
        $newsList = $model->find()->orderBy(['id' => SORT_DESC,])->all();
        return $this->render('list', [
            'newsList' => $newsList,
            'commentModel' => $commentModel
        ]);
    }

    public function actionCategory($category)
    {

        $commentModel = new Comment();
        $categoryModel = new NewsCategory();
        $categoryItem = $categoryModel->find()->where(['title' => $category])->asArray()->one();

        if ($category == null || $categoryItem == null) {
            return '404';
        }

        $newsListByCategory = News::findAll(['category_id' => $categoryItem['id']]);

        return $this->render('category', [
            'newsListByCategory' => $newsListByCategory,
            'commentModel' => $commentModel
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
