<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\ActiveForm;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\ContactForm;
AppAsset::register($this);
?>

<?
$model = new ContactForm();
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<?php $this->beginBody() ?>
<body id="homepage" class="de_light">

    <div id="wrapper">

        <!-- header begin -->
        <header>
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="col"><span class="id-color"><i class="fa fa-map-marker"></i></span>Collins Street West, Victoria 8007 Australia </div>
                            <div class="col"><span class="id-color"><i class="fa fa-clock-o"></i></span>Monday - Friday 08:00-16:00</div>
                            <div class="col"><span class="id-color"><i class="fa fa-phone"></i></span>1800.899.900</div>							
                        </div>
                        <div class="col-md-4 text-right">
                           
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="index.html">
                                <img class="logo" src="images/logo.png" alt="">
                                <img class="logo-2" src="images/logo-2.png" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                            <ul id="mainmenu">
                                <li><a href="/">Главная</a></li>
                                <li><a href="/about">О компании</a></li>
                                <li><a href="/catalog">Каталог</a></li>
                                <li><a href="/gallery">Галерея</a></li>
                                <li><a href="/discount">Акции и скидки</a></li>
                                <li><a href="/delivery">Доставка и оплата</a></li>
                                <li><a href="/articles">Статьи</a></li>
                                <li><a href="/contacts">Контакты</a></li>
                            </ul>
                        </nav>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>

        <?=$content?>
        
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="images/logo.png" class="logo-small" alt=""><br>
                    </div>

                    <div class="col-md-4">
                        <div class="widget widget_recent_post">
                            <h3>Latest News</h3>
                            <ul>
                                <li><a href="#">5 Things That Take a Room from Good to Great</a></li>
                                <li><a href="#">Functional and Stylish Wall-to-Wall Shelves</a></li>
                                <li><a href="#">9 Unique and Unusual Ways to Display Your TV</a></li>
                                <li><a href="#">The 5 Secrets to Pulling Off Simple, Minimal Design</a></li>
                                <li><a href="#">How to Make a Huge Impact With Multiples</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <h3>Contact Us</h3>
                        <div class="widget widget-address">
                            <address>
                                <span>Collins Street West, Victoria 8007 Australia</span>
                                <span><strong>Phone:</strong>(208) 333 9296</span>
                                <span><strong>Fax:</strong>(208) 333 9298</span>
                                <span><strong>Email:</strong><a href="mailto:contact@buildpro.com">contact@buildpro.com</a></span>
                                <span><strong>Web:</strong><a href="#">http://buildpro-construction.com</a></span>
                            </address>
                        </div>
                    </div>
                </div>
            </div>

            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            &copy; Copyright 2016 - BuildPro by Designesia                     
                        </div>
                        <div class="col-md-6 text-right">
                            <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                                <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                                <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                                <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                                <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- footer close -->

        <a href="#" id="back-to-top"></a>
        <div id="preloader">
            <div class="preloader1"></div>
        </div>
    </div>
<?php $this->endBody() ?>
<script>
jQuery(document).ready(function () {
    jQuery("#revolution-slider").revolution({
	sliderType: "standard",
	sliderLayout: "fullscreen",
	delay: 3500,
	navigation: {
	    arrows: { enable: true }
	},
	parallax: {
	    type: "mouse",
	    origo: "slidercenter",
	    speed: 2000,
	    levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50],
	},
	spinner: "off",
	gridwidth: 1140,
	gridheight: 600,
	disableProgressBar: "on"
    });
});
</script>
</body>
</html>
<?php $this->endPage() ?>
