<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use yii\helpers\Url;
use common\widgets\Alert;

AppAsset::register($this);
$settings = \common\models\search\Settings::find()->all();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <link rel="icon" type="images/png" href="images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title>Профессиональное тифлокомментирование</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-5">
                <a class="burger" href="#">
                    <img src="<?=Url::toRoute(['/images/burger.png'])?>" alt="">
                </a>
                <img src="<?=Url::toRoute(['/images/logo.png'])?>" alt="" class="logo">
                <span class="small">Тифлокомментатор высшей категории, продюсер, переводчик</span>
            </div>
            <div class="col-sm-6 col-lg-7">
                <a class="inline" href="tel:+79623617703"><?=Yii::$app->settings->get('Phone');?></a>
                <a class="inline underline" href="mailto:<?=Yii::$app->settings->get('email');?>"> <?=Yii::$app->settings->get('email');?></a>
                <ul class="social">
                    <li><a href="<?=Yii::$app->settings->get('instagram');?>"><img src="images/insta.png" alt=""></a></li>
                    <li><a href="<?=Yii::$app->settings->get('facebook');?>"><i class="fa fa-facebook"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</header>

<ul id="menu" style="display:none;">
    <li id="closeMenu"><i class="fa fa-times"></i></li>
    <li><a href="#about-tiflo">Ликбез</a></li>
    <li><a href="#about-me">Обо мне</a></li>
    <li><a href="#examples">Примеры работ</a></li>
    <li><a href="#partners">Партнеры</a></li>
    <li><a href="#smi">Сми обо мне</a></li>
    <li><a href="#services">Услуги</a></li>
    <li><a href="#reviews">Отзывы</a></li>
    <li><a href="#contacts">Контакты</a></li>
</ul>

<section class="container-fluid first" style="background-image:url(<?=Url::toRoute(['/images/first.jpg'])?>);">
    <p class="h1">Профессиональное тифлокомментирование фильмов, постановок и мероприятий.</p>
    <div class="yellow-bg">Быстро. Грамотно. В любой точке России.</div>
    <a href="#about-tiflo" class="smooth next"><i class="fa fa-angle-down"></i></a>
</section>

<section id="about-tiflo" class="container">
    <?php
    $page = \common\models\search\Page::find()->where(['id' => '1'])->one();
    echo $page->getContent();
    ?>
</section>

<section id="about-me" class="container">
    <?php
    $page = \common\models\search\Page::find()->where(['id' => '2'])->one();
    echo $page->getContent();
    ?>
</section>

<section id="examples">
    <?php
    $page = \common\models\search\Page::find()->where(['id' => '4'])->one();
    echo $page->getContent();
    ?>
</section>

<section id="partners" class="container">
    <?php
        $page = \common\models\search\Page::find()->where(['id' => '3'])->one();
        echo $page->getContent();
    ?>
</section>

<section id="smi">
    <?php
    $page = \common\models\search\Page::find()->where(['id' => '5'])->one();
    echo $page->getContent();
    ?>
</section>

<section id="services" class="container">
    <?php
    $page = \common\models\search\Page::find()->where(['id' => '6'])->one();
    echo $page->getContent();
    ?>
</section>

<section id="reviews">
    <?php
    $page = \common\models\search\Page::find()->where(['id' => '7'])->one();
    echo $page->getContent();
    ?>
</section>

<footer id="contacts" style="background-image:url(<?=Url::toRoute(['images/footer-bg.png'])?>);">
    <?php
    $page = \common\models\search\Page::find()->where(['id' => '8'])->one();
    echo $page->getContent();
    ?>
</footer>

<!-- Модальное окно -->

<div class="modal fade" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Название модали</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary">Сохранить изменения</button>
            </div>
        </div>
    </div>
</div>

<!-- Скрипты -->

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/fancybox/jquery.fancybox.js" type="text/javascript"></script>
<script src="js/owl.carousel.js" type="text/javascript"></script>
<script src="js/scripts.js" type="text/javascript"></script>

<script type="text/javascript">
    $('.reviews-slider').owlCarousel({
        navSpeed:1500,
        dotsSpeed:1500,
        dragEndSpeed:1500,
        autoplaySpeed:1500,
        nav:true,
        autoplay: true,
        loop:true,
        responsive:{
            0:{
                items:1
            },
            640:{
                items:2
            }
        }
    });
</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
