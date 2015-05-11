<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Season;
use app\models\PlayerSeason;
use app\models\PlayerInfo;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPlayerSeason */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Team Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="team-profile-index">
	
	<h1> 
		<?php
			if($modelCoachInfo == null) {
				echo 'You have no coach info!<hr/>';
				echo '<a href="http://localhost/basic3/coachinfo/create"><button type="button" class="btn btn-default">Create Info</button></a>';
			}
			else if ($modelTeamInfo == null) {
				echo 'You\'re not on a team!<hr/>';
			}
			else {
				echo $modelTeamInfo['school_name'].'<hr/>';
			}
		
		?>
	</h1>
	
	<?php 
		if(count($queryTeamSeason) > 0)  {
			echo '<h2>Season Rosters</h2><hr/>';
		}
		
	?>
	<?php
		foreach($queryTeamSeason as $teamseason) {
			$querySeason = Season::find()->where(['id' => $teamseason['season_id']])->all();
			$modelSeason = $querySeason[0];
			echo '<h4>'.$modelSeason['name'].' '.$modelSeason['year'].'</h4>';
			
			$queryPlayerSeason = PlayerSeason::find()->where(['team_season_id' => $teamseason['id']])->all();
			echo '<ul>';
			foreach($queryPlayerSeason as $playerseason) {
					$queryPlayerInfo= PlayerInfo::find()->where(['id' => $playerseason['player_info_id']])->all();
					
					if(count($queryPlayerInfo) != 0) {
						$modelPlayerInfo = $queryPlayerInfo[0];
						echo '<li>'.$modelPlayerInfo['first_name'].' '.$modelPlayerInfo['last_name'].'</li>';
					}

			}
			echo '<a href="../../../basic3/index.php/playerseason/create?seasonId='.$teamseason['id'].'"><button type="button" class="btn btn-default">Add Player</button></a>';
			echo '</ul><hr/>';
			
		}
	?>
	<?php 
		if($modelCoachInfo != null) {
		echo '<a href="http://localhost/basic3/teamseason/create"><button type="button" class="btn btn-default">Create Team Season</button></a>';
		}
	?> 

</div>
