<?php
namespace app\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use Yii;

/**
 * AppController extends Controller and implements the behaviors() method
 * where you can specify the access control ( AC filter + RBAC) for
 * your controllers and their actions.
 */
class AppController extends Controller
{
    /**
     * Returns a list of behaviors that this component should behave as.
     * Here we use RBAC in combination with AccessControl filter.
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'controllers' => ['user', 'article','coachinfo', 'additonalstats','courseinfo','formatinfo','leagueinfo','leagueseason','leagueteams','leaguetournament','levelinfo','playerinfo','playerseason','teaminfo','teamseason','teeboxinfo','tournamentinfo','tournamentplayers','coachprofile','teamprofile'],
                        'actions' => ['index', 'view', 'create', 'update', 'delete', 'admin'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'controllers' => ['article','coachinfo','coachprofile','playerinfo','playerseason','teamprofile','teamseason'],
                        'actions' => ['index','create', 'update', 'admin','delete'],
                        'allow' => true,
                        'roles' => ['editor'],
                    ],
                    [
                        'controllers' => ['article','coachinfo', 'additonalstats','courseinfo','formatinfo','leagueinfo','leagueseason','leagueteams','leaguetournament','levelinfo','playerinfo','playerseason','teaminfo','teamseason','teeboxinfo','tournamentinfo','tournamentplayers'],
                        'actions' => ['index', 'view'],
                        'allow' => true
                    ],
                    [
                        // other rules
                    ],

                ], // rules

            ], // access

            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ], // verbs

        ]; // return

    } // behaviors

} // AppController
