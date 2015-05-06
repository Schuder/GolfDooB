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
<h3>Bio</h3>
<p class="text-capitalize"> <?php echo $modelCoachInfo['coach_notes'] ?> </p>

<h3>Team</h3>
<p class ="text-capitalize" >
		<?php 
		if($modelTeamInfo['school_name'] == null) {
			echo ' <a href="http://localhost/basic3/teamseason/create" ><button type="button" class="btn btn-default">Team Season Create</button></a>';
		}
		else {
			echo $modelTeamInfo['school_name'] ;
		}
		
		?>
</p>

<h3>Email</h3>
<p class="text-capitalize"> <?php echo $modelCoachInfo['coach_email'] ?></hp>

<h3>Cell Phone</h3>
<p class="text-capitalize"> <?php echo $modelCoachInfo['cell_number'] ?></hp>

<h3>Home Phone</h3>
<p class="text-capitalize"> <?php echo $modelCoachInfo['home_number'] ?></hp>
<hr>
<?php echo '<a href="http://localhost/basic3/coachinfo/update?id='.$modelCoachInfo['id'].'"><button type="button" class="btn btn-default">Edit Info</button></a>'; ?>

</div>
