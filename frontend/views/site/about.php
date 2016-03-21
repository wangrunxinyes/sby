<?php
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?=Html::cssFile('@web/include/extensions/index/css/bootstrap.css');?>
<?=Html::cssFile('@web/include/extensions/index/fonts/font-awesome/css/font-awesome.css');?>
<?=Html::cssFile('@web/include/extensions/index/css/owl.carousel.css');?>
<?=Html::cssFile('@web/include/extensions/index/css/owl.theme.css');?>
<?=Html::cssFile('@web/include/extensions/index/css/style.css');?>
<?=Html::cssFile('@web/include/extensions/index/css/prettyPhoto.css');?>
<?=Html::cssFile('@web/include/global/css/dialog.css');?>
<?=Html::jsFile('@web/include/frame.layout/js/jquery.min.js')?>
<?=Html::jsFile('@web/include/extensions/index/js/modernizr.custom.js');?>
<?=Html::jsFile('@web/include/extensions/index/js/bootstrap.js');?>
<?=Html::jsFile('@web/include/extensions/index/js/SmoothScroll.js');?>
<?=Html::jsFile('@web/include/extensions/index/js/jquery.prettyPhoto.js');?>
<?=Html::jsFile('@web/include/extensions/index/js/jquery.isotope.js');?>
<?=Html::jsFile('@web/include/extensions/index/js/jquery.counterup.js');?>
<?=Html::jsFile('@web/include/extensions/index/js/waypoints.js');?>
<?=Html::jsFile('@web/include/extensions/index/js/jqBootstrapValidation.js');?>
<?=Html::jsFile('@web/include/extensions/index/js/owl.carousel.js');?>
<?=Html::jsFile('@web/include/global/scripts/json2.js');?>
<?=Html::jsFile('@web/include/global/scripts/dialog.js');?>
<?=Html::jsFile('@web/include/extensions/index/js/main.js');?>
<?=Html::jsFile('@web/include/extensions/index/js/submitForm.js');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WANG</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Stylesheet
    ================================================== -->
    <link href='http://fonts.useso.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav id="top-bar" class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <!-- <i class="fa fa-terminal"></i>
                -->WANG Runxin
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">abaility</a>
                </li>
                <li>
                    <a class="page-scroll" href="#about">Resume</a>
                </li>
                <li>
                    <a class="page-scroll" href="#achivements">Project</a>
                </li>
                <li>
                    <a class="page-scroll" href="#testimonials">About Me</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse --> </div>
    <!-- /.container -->
</nav>

<!-- Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1>
                        Welcome to visit
                        <span class="brand-heading">WANG Runxin's</span>
                    </h1>
                    <p class="intro-text">personal website</p>
                    <a href="#services" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Services Section -->
<div id="services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2> <strong>abaility</strong>
            </h2>
            <hr></div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-laptop"></i>
                <h4> <strong>Web Design</strong>
                </h4>
                <p>PHP, ASP.NET, Javascript, HTML, JQuery.</p>
            </div>
            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-code"></i>
                <h4>
                    <strong>Mobile Apps</strong>
                </h4>
                <p>Android(Java) and IOS(Objective-C).</p>
            </div>
            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-rocket"></i>
                <h4>
                    <strong>Mobile Games</strong>
                </h4>
                <p>Based on Cocos2d-x Engine(C++).</p>
            </div>
            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-bullseye"></i>
                <h4>
                    <strong>Desktop Software</strong>
                </h4>
                <p>Win32 application(C#).</p>
            </div>
        </div>
    </div>
</div>
<!-- About Section -->
<div id="about">
    <div class="container">
        <div class="section-title text-center center">
            <h2>
                <strong>My</strong>
                Resume
            </h2>
            <hr>
            <button type="button" onclick="window.location.href='<?php echo Url::to(['wang/framework']); ?>?type=about'" class="btn btn-default wrx-buttton-resume">more</button>
        </div>
        <div class="row">
            <div class="col-md-6">
                <i class="fa fa-magic"></i>
                <div class="padding-left">
                    <h4>Education</h4>
                    <p>
                        2009-2013,
                        <br>
                        <strong>Software Engineering</strong>
                        ,
                        <br>
                        Fujian Normal University
                        <br>
                        <br>
                        2013-2014,
                        <br>
                        <strong>Information Technology Management</strong>
                        ,
                        <br>Hong Kong Baptist University</p>
                </div>
                <i class="fa fa-check-square-o"></i>
                <div class="padding-left">
                    <h4>Award</h4>
                    <p>
                        2012,
                        <strong>Special-class award</strong>
                        of China Software Cup.
                        <a class="wrx-link" href="http://www.cnsoftbei.com/bencandy.php?fid=42&id=775" target="_blank">[link]</a>
                        <br>
                        <br>
                        2012,
                        <strong>Third-class award</strong>
                        of Oushi Software Cup.
                        <br>
                        <br>
                        2013,
                        <strong>Scholarship</strong>
                        of Fujian Normal University.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <i class="fa fa-users"></i>
                    <div class="padding-left">
                        <h4>Work Experience</h4>
                        <p>
                            (Y/m/d)
                            <br>
                            <br>
                            2015/06/10-Now,
                            <br>
                            <strong>PHP Programmer (Yii Framework)</strong>
                            <br>
                            XGATE Co., Ltd.,
                            <a class="wrx-link" href="http://www.xgate.com/" target="_blank">[link]</a>
                            <br>
                            Hong Kong Science & Technology Parks, Hong Kong.
                            <br>
                            <br>
                            2015/02/10-2015/05/18,
                            <br>
                            <strong>PHP Programmer (Yii Framework)</strong>
                            <br>
                            Lokchong Co., Ltd.,
                            <br>
                            Hung Hom, Hong Kong.
                            <br>
                            <br>
                            2014/08/11-2015/02/09,
                            <br>
                            <strong>Mobile Game Programmer(Android and IOS)</strong>
                            <br>
                            Four Direction / 4 Play Studio,
                            <a class="wrx-link" href="http://4play.com.hk" target="_blank">[link]</a>
                            <br>
                            Kwun Tong, Hong Kong.
                            <br>
                            <br>
                            2012/10-2013/01,
                            <br>
                            <strong>Mobile Apps Develper(Android and IOS)</strong>
                            <br>
                            Fitgame Digital Co., Ltd.,
                            <br>Nanjing, China</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="achivements" class="section dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="achivement-box">
                    <i class="fa fa-smile-o"></i>
                    <span class="count">6</span>
                    Year
                    <h4>Pragramming Experience</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="achivement-box">
                    <i class="fa fa-code"></i>
                    <span class="count">1.5</span>
                    Year
                    <h4>Working Experience</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="achivement-box">
                    <i class="fa fa-check-square-o"></i>
                    <span class="count">6</span>
                    Independent
                    <h4>Projects completed</h4>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="achivement-box">
                    <i class="fa fa-trophy"></i>
                    <span class="count">2</span>
                    Programmming
                    <h4>Awards won</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section -->
<div id="team" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>

                <strong>Projects</strong>
            </h2>
            <hr>
            <button type="submit" onclick="window.location.href='<?php echo AppAsset::getUrlPath('wang/framework/type/project') ?>'" class="btn btn-default wrx-buttton-project">more</button>
        </div>
        <div id="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="<?php echo AppAsset::getUrlPath("global/images/wechat.png") ?>" alt="..." class="img-circle team-img">
                    <div class="caption">
                        <h3>Wechat Control Platform</h3>
                        <p>CMS Website</p>
                        <p>
                            Including Wechat Oauth2.0 authorization, service account register, CMS system and the whole website for end customer.
                        </p>
                        <button type="submit" onclick="window.location.href='http://www.tongchengchina.com/backend/aboutus'" class="btn btn-default wrx-buttton-project">details</button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="<?php echo AppAsset::getUrlPath("global/images/car.png") ?>" alt="..." class="img-circle team-img">
                    <div class="caption">
                        <h3>Tongcheng China</h3>
                        <p>CMS Website and ios app</p>
                        <p>Carpool platform, including backend website, database desktop website and mobile apps.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="<?php echo AppAsset::getUrlPath("global/images/flybox.jpg") ?>" alt="..." class="img-circle team-img">
                    <div class="caption">
                        <h3>Fly Box</h3>
                        <p>Android App</p>
                        <p>Social Networking App. Special-Class award of the first China Software Cup.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="<?php echo AppAsset::getUrlPath("global/images/oauth.jpg") ?>" alt="..." class="img-circle team-img">
                    <div class="caption">
                        <h3>Oauth 2.0 and its security analysis</h3>
                        <p>Paper and android app</p>
                        <p>Master's Thesis, including a papar on Oauth 2.0 vulnerability and a demo app.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>
                About
                <strong>Me</strong>
            </h2>
            <hr></div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="testimonial" class="owl-carousel owl-theme">
                    <div class="item">
                        <p>
                            As a man who loves programming, I enjoy the process of development.
                            I started to develop mobile apps since 2010 and then I won my first prize by an Android app.
                            So far, I have 5 years experience on Andriod and IOS platform.
                        </p>
                        <p>
                            <strong>WANG Runxin</strong>
                            ,
                            Wangrunxin STU
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div id="contact" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>
                <strong>Contact</strong>
                Me
            </h2>
            <hr></div>
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-4">
                <i class="fa fa-map-marker fa-2x"></i>
                <p>
                    Flat 3, 15/F, Block B,
                    <br>
                    Beautiful Garden,
                    <br>
                    No.11 Chui Lok Street,
                    <br>Tai Po, NT, Hong Kong</p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-envelope-o fa-2x"></i>
                <p>wangrunxin@wangrunxin.com</p>
            </div>
            <div class="col-md-4">
                <i class="fa fa-phone fa-2x"></i>
                <p>+852 9565 8786</p>
                <p>+86 18676460796</p>
            </div>
            <hr>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <hr>
            <h3>Leave me a message</h3>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" id="name" name="name" class="form-control submit-form-api-submitMessage" placeholder="Name" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" id="email" name="email" class="form-control submit-form-api-submitMessage" placeholder="Email" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" class="form-control submit-form-api-submitMessage" rows="4" placeholder="Message" required></textarea>
                    <p class="help-block text-danger"></p>
                </div>

                <div class="form-group">
                    <img src="<?php echo Url::to(['site/code']); ?>" data="<?php echo Url::to(['site/code']); ?>?d=1123" id="getcode_math" style="float:left;width:30%;height:34px;" title="change another" align="absmiddle">
                    <input type="text" id="captcha" name="captcha" style="float:left;width:65%;margin-left:5%;" class="form-control submit-form-api-submitMessage" placeholder="Captcha" required="required">
                    <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                    <button id="submitBt" datatype="submitMessage" data="<?php echo "http://" . $_SERVER['HTTP_HOST'] . Url::to(['api/call']); ?>" type="submit" style="width:100%;" class="btn btn-default submit-api">Send Message</button>
                </div>

            </form>
        </div>
    </div>
</div>
<nav id="footer">
    <div class="container">
        <div class="pull-left fnav">
            <p>Copyright &copy; 2015 WANGRUNXIN STU.</p>
        </div>
        <div class="pull-right fnav">
            <!-- <ul class="footer-social">
            <li>
                <a href="#">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-dribbble"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-linkedin"></i>
                </a>
            </li>
        </ul>
        -->
    </div>
</div>
</nav>

</body>
</html>