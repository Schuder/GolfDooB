<?php
use app\assets\AppAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => Yii::t('app', Yii::$app->name),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-default navbar-fixed-top',
                ],
            ]);

            // everyone can see Home page
            $menuItems[] = ['label' => Yii::t('app', 'Home'), 'url' => ['/site/index']];
			$menuItems[] = ['label' => 'Tables', 'items' => [
			
						['label' => 'Additional Stats', 'url' => ['/additonalstats/index']],
						['label' => 'Coach Info', 'url' => ['/coachinfo/index']],
						['label' => 'Course Info', 'url' => ['/courseinfo/index']],
						['label' => 'Format Info', 'url' => ['/formatinfo/index']],
						['label' => 'League Info', 'url' => ['/leagueinfo/index']],
						['label' => 'League Season', 'url' => ['/leagueseason/index']],
						['label' => 'League Teams', 'url' => ['/leagueteams/index']],
						['label' => 'League Tournament', 'url' => ['/leaguetournament/index']],
						['label' => 'Level Info', 'url' => ['/levelinfo/index']],
						['label' => 'Player Info', 'url' => ['/playerinfo/index']],
						['label' => 'Player Season', 'url' => ['/playerseason/index']],
						['label' => 'Season', 'url' => ['/season/index']],
						['label' => 'Team Info', 'url' => ['/teaminfo/index']],
						['label' => 'Team Season', 'url' => ['/teamseason/index']],
						['label' => 'Tournament Info', 'url' => ['/tournamentinfo/index']],
						['label' => 'Tournament Players', 'url' => ['/tournamentplayers/index']],
						['label' => 'Tee Box Info', 'url' => ['/teeboxinfo/index']],
			
			]];

            // we do not need to display Article/index, About and Contact pages to editor+ roles
            if (!Yii::$app->user->can('editor')) 
            {
                $menuItems[] = ['label' => Yii::t('app', 'About'), 'url' => ['/site/about']];
            }

            // display Article admin page to editor+ roles
            if (Yii::$app->user->can('editor'))
            {
                $menuItems[] = ['label' => Yii::t('app', 'Profile'), 'url' => ['/coachprofile/index']];
				$menuItems[] = ['label' => Yii::t('app', 'School'), 'url' => ['/teamprofile/index']];
            }            

            // display Users to admin+ roles
            if (Yii::$app->user->can('admin'))
            {
                $menuItems[] = ['label' => Yii::t('app', 'Users'), 'url' => ['/user/index']];
            }
            
            // display Signup and Login pages to guests of the site
            if (Yii::$app->user->isGuest) 
            {
                $menuItems[] = ['label' => Yii::t('app', 'Signup'), 'url' => ['/site/signup']];
                $menuItems[] = ['label' => Yii::t('app', 'Login'), 'url' => ['/site/login']];
            }
            // display Logout to all logged in users
            else 
            {
                $menuItems[] = [
                    'label' => Yii::t('app', 'Logout'). ' (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }

            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);

            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; <?= Yii::t('app', Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
