<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPlayerSeason */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coach Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coach-profile-index">

<h1 class="text-capitalize"> <?php echo $modelCoachInfo['first_name'] ?> <small> <?php echo $modelCoachInfo['last_name'] ?> </small></h1>
<hr/>
<h2 class ="text-capitalize" >
		<?php 
		if($modelTeamInfo['school_name'] == null) {
			echo ' <a href="http://localhost/basic3/teamseason/create" ><button type="button" class="btn btn-default">Team Season Create</button></a>';
		}
		else {
			echo $modelTeamInfo['school_name'] ;
		}
		
		?>
</h2>

</div>
