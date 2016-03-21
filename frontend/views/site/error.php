<?php
use frontend\assets\AppAsset;
use frontend\utils\ApiHelper;
use yii\helpers\Html;

$request = $this->context->action->controller->module->requestedRoute;
if ($request == "api/call") {
	$apiHelper = new ApiHelper();
	$apiHelper->createErrorJson(0, "no api found or unknown error.");
}

?>

<!DOCTYPE html>

<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Error | WANG Runxin</title>

	<meta name="description" content="Our 404 page">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?=Html::cssFile('@web/include/global.style/css/css.css');?>
	<?=Html::cssFile('@web/include/global.style/css/da84.css');?>
	<?=Html::cssFile('@web/include/global.style/css/normalize.css');?>
	<?=Html::cssFile('@web/include/global.style/css/default.css');?>
	<?=Html::cssFile('@web/include/global.style/css/fakeLoader.css');?></head>

<body class="error">

	<div class="fakeloader"></div>

	<main class="content-primary">

		<div class="container">

			<div class="dialog">

				<h1 class="mega">
					</h1>

				<h2 class="subhead">
					Sorry&nbsp;|&nbsp;抱歉
					<br>
					<lable class="description">
						<?=nl2br(Html::encode($message))?></lable>
					<br></h2>

			</div>

			<nav class="nav-choices">

				<div class="options">Your options&nbsp;|&nbsp;你的选择</div>

				<ul>
					<li>
						<a class="btn btn-primary" href="<?php echo AppAsset::getUrlPath(''); ?>">主页 | home</a>
					</li>

					<li id="separator-404" class="separator">&nbsp;&nbsp;</li>
					<li>
						<a class="btn btn-primary" href="#" id="punch-a-moose" >管理员 | Log</a>

					</li>

				</ul>

			</nav>

		</div>

	</main>

</body>

</html>