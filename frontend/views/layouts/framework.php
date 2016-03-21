<?php
use frontend\assets\AppAsset;
use yii\helpers\Html;
?>

<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->title; ?></title>

    <?=Html::jsFile('@web/include/frame.layout/js/jquery.min.js')?>
    <?=Html::jsFile('@web/include/extensions/fullscren.choices/dist/jquery.fatNav.min.js');?>
    <?=Html::jsFile('@web/include/extensions/fullscren.choices/js/main.js');?>

    <?=Html::cssFile('@web/include/extensions/fullscren.choices/css/normalize.css');?>
    <?=Html::cssFile('@web/include/extensions/fullscren.choices/css/default.css');?>
    <?=Html::cssFile('@web/include/extensions/fullscren.choices/css/main.css');?>
    <?=Html::cssFile('@web/include/extensions/fullscren.choices/dist/jquery.fatNav.min.css');?>

</head>
<body>
    <header class="wrx_top_bar">
        <img src="<?php echo AppAsset::getUrlPath('global.style/img/logo1.png'); ?>">
        <h4>wangrunxin</h4>
    </header>
    <div class="fat-nav">
        <div class="fat-nav__wrapper">
            <ul>
                <li>
                    <a href="<?php echo AppAsset::getUrlPath('wang/index') ?>">Home | 主页</a>
                </li>
                <li>
                    <a href="<?php echo AppAsset::getUrlPath('/wang/framework?type=project') ?>">Projects | 项目</a>
                </li>

                <li>
                    <a href="<?php echo AppAsset::getUrlPath('/wang/framework?type=about') ?>">About | 关于我</a>
                </li>
                <li>
                    <a href="<?php echo AppAsset::getUrlPath('/wang/framework?type=contact') ?>">Contact | 联系我</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <?php echo $content; ?></div>
</body>
</html>