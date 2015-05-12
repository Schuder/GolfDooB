<?php

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name);
?>
<div class="site-index">

    <div class="jumbotron" style="background-image: url('http://mainepremiersoccer.com/files/2015/04/golf_header.jpg'); background-size: 100% 100%; background-position: -200px 0;">
     <h1 style="color: white;">Welcome!</h1>
	 <h2 style="color: white;">The Free State Golf db.</h2>
	<?php if (Yii::$app->user->isGuest) 
	{
      ?>  <p class="lead"></p>
	  <p><a class="btn btn-lg btn-success" href="/basic3/site/signup">You should create an account!</a></p>
	<?php }
	else if (!Yii::$app->user->isGuest &&  $modelCoachInfo == null)
		{?>
		<p><a class="btn btn-lg btn-success" href="/basic3/coachinfo/create">Get Started by Telling Us About Yourself!</a></p>
		<?php }else{ ?>
		<p><a class="btn btn-lg btn-success" href="/basic3/coachprofile/index"><?php echo $modelCoachInfo['first_name'] ?> <?php echo $modelCoachInfo['last_name'] ?> Profile</a></p>
		<?php } ?>
	  </div>
    <div class="body-content">
	
		<div class="row">
			<div class="col-lg-12">
				<h2>Golf DB</h2>
				<p>
				Welcome to the prototype Free State Golf data base application. This application was developed for use by coaches, players and league holders to better organise and run tournaments. The app has plans to feature ways to host scoring for matches and team/player analysis over the course of several seasons. This prototype was developed by the 2014-2015 Media Tech class at Lawrence Free State High School. Here are some stats below.
				</p>
			</div>
		</div>
        <div class="row">
            <div class="col-lg-4">
			<h3>
			<?php 
				echo 'Registered Users: '.count($queryUser);
			?>
			</h3>
            </div>
            <div class="col-lg-4">
			<h3>
			<?php 
				echo 'Active Coaches: '.count($queryCoaches);
			?>
			</h3>
            </div>
            <div class="col-lg-4">
			<h3>
			<?php 
				echo 'Active Players: '.count($queryPlayers);
			?>
			</h3>
            </div>
			
        </div>

    </div>
</div>

