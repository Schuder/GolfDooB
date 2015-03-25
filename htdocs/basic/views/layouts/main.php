<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
                'brandLabel' => 'Golf Data Housing',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    ['label' => 'Tables','items' => [
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
            			],
        			],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
            <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
