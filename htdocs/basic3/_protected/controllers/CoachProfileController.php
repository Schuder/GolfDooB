<?php

namespace app\controllers;

use Yii;
use app\models\PlayerSeason;
use app\models\SearchPlayerInfo;
use app\models\SearchCoachInfo;
use app\models\SearchTeamInfo;
use app\models\CoachInfo;
use app\models\TeamInfo;
use app\models\TeamSeason;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PlayerSeasonController implements the CRUD actions for PlayerSeason model.
 */
class CoachProfileController extends AppController
{


    /**
     * Lists all PlayerSeason models.
     * @return mixed
     */
    public function actionIndex()
    {
		
		$currentUserId = Yii::$app->user->id;
		
		$queryCoachInfo = CoachInfo::find()->where(['user_id' =>$currentUserId])->all();
		$modelCoachInfo = $queryCoachInfo[0];
		
		$queryTeamSeason = TeamSeason::find()->where(['head_coach_id' => $modelCoachInfo['id']])->all();
		
		if ($queryTeamSeason == null) {
			$modelTeamSeason = null;
			$modelTeamInfo = null;
		}
		else {
			$modelTeamSeason = $queryTeamSeason[0];
			$queryTeamInfo = TeamInfo::find()->where(['id' => $modelTeamSeason['team_info_id']])->all();
			$modelTeamInfo= $queryTeamInfo[0];
		}
		
        return $this->render('index', [
			'modelCoachInfo' => $modelCoachInfo,
			'modelTeamInfo' => $modelTeamInfo,
        ]);
    }

}
