<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>
</head>

<body>
<div id="mainBody">
    <div id="leftContent">
        <?
            if(!Yii::app()->user->isGuest){
        ?>

        <div id="userInfoWidget">
            <?php
                $this->widget('CUserInfo');
            ?>
            <div class="clear"></div>
        </div>
        <div id="timeNow" style="margin-top: 10px;">qwerty</div>
        <div id="userStatusBarsWidget">
            <?php
                $this->widget('CUserStatusBars');
            ?>
            <div class="clear"></div>
        </div>
        <div id="mainActionsWidget">
            <b>Основные действия</b>
            <?php
                $this->widget('CMainActions');
            ?>
            <div class="clear"></div>
        </div>

        <?
            }
        ?>
    </div>
    <div id="mainContent">
        <?php echo $content; ?>
    </div>
</div>

<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js" type="text/javascript"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/time.js" type="text/javascript"></script>

</body>
</html>