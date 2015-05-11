<?php

namespace app\controllers;

use Yii;
use app\models\TeamSeason;
use app\models\SearchTeamSeason;
use app\models\CoachInfo;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\MethodNotAllowedHttpException;
use yii\filters\VerbFilter;

/**
 * TeamSeasonController implements the CRUD actions for TeamSeason model.
 */
class TeamSeasonController extends AppController
{


    /**
     * Lists all TeamSeason models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchTeamSeason();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TeamSeason model.
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
     * Creates a new TeamSeason model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TeamSeason();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TeamSeason model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TeamSeason model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
		$currentUserId = Yii::$app->user->id;
		$model = $this->findModel($id);
		$queryCoachInfo = CoachInfo::find()->where(['user_id' =>$currentUserId])->all();
		$modelCoachInfo = $queryCoachInfo[0];
		
		if ($model['head_coach_id'] == $modelCoachInfo['id']) {
		        $this->findModel($id)->delete();
		}
		else {
			throw new MethodNotAllowedHttpException(Yii::t('app', 'You are not allowed to delete this page.'));
		}

        return $this->redirect(['index']);
    }

    /**
     * Finds the TeamSeason model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TeamSeason the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TeamSeason::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
