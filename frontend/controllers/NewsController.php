<?php

namespace frontend\controllers;

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
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionList()
    {
        $model = new News();
        $newsList = $model->find()->asArray()->all();
        return $this->render('list', [
            'newsList' => $newsList,
        ]);
    }

    public function actionCategory($category)
    {


        $categoryModel = new NewsCategory();
        $categoryItem = $categoryModel->find()->where(['title' => $category])->asArray()->one();

        if ($category == null || $categoryItem == null){
            return '404';
        }

        $newsListByCategory = News::findAll(['category_id' => $categoryItem['id']]);

        return $this->render('category', [
            'newsListByCategory' => $newsListByCategory,
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
