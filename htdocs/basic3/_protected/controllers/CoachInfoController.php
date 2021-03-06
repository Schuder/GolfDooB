<?php

namespace app\controllers;

use Yii;
use app\models\CoachInfo;
use app\models\TeamSeason;
use app\models\SearchCoachInfo;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\MethodNotAllowedHttpException;

/**
 * CoachInfoController implements the CRUD actions for CoachInfo model.
 */
class CoachInfoController extends AppController
{

    /**
     * Lists all CoachInfo models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchCoachInfo();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CoachInfo model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CoachInfo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
         $model = new CoachInfo();

		 $model->user_id = Yii::$app->user->id;
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CoachInfo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {

	/*
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
		*/
			
        $model = $this->findModel($id);

        if (Yii::$app->user->can('updateArticle', ['model' => $model])) 
        {
            if ($model->load(Yii::$app->request->post()) && $model->save()) 
            {
                return $this->redirect(['view', 'id' => $model->id]);
            } 
            else 
            {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
        else
        {
            throw new MethodNotAllowedHttpException(Yii::t('app', 'You are not allowed to access this page.'));
        } 		
		
		
    }

    /**
     * Deletes an existing CoachInfo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
	
		$currentUserId = Yii::$app->user->id;
		$model = $this->findModel($id);
		$queryTeamSeason = TeamSeason::find()->where(['head_coach_id' =>$model['id']])->all();
	
	if(sizeof($queryTeamSeason) == 0) {
		try{
			$this->findModel($id)->delete();

			return $this->redirect(['index']);
			}
		catch (yii\db\IntegrityException $e)
			{
				return $this->redirect(['index']);
			}		
	}
	else {
		throw new MethodNotAllowedHttpException(Yii::t('app', 'You are not allowed to delete this page. It is referenced in a TeamSeason'));
	}
	

    }

    /**
     * Finds the CoachInfo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CoachInfo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CoachInfo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
