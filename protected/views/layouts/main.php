<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme.css"/>
</head>

<body>

    <div id="wrapper">
        <div id="topMenu" class="topMenu">


            <ul id="topMenuElements" class="topMenuElements">
                <li>
                    <a class="top_menu_el">Главная</a>&nbsp; |
                </li>

                <li>
                    <a class="top_menu_el">	&nbsp; Операции</a>&nbsp; |
                    <ul>
                        <li><a onclick="createWindow('Справочники','Classifiers')">Справочники</a></li>
                        <li><a>Документы</a></li>
                    </ul>
                </li>

                <li>
                    <a class="top_menu_el">&nbsp; Сервис</a>&nbsp;|
                </li>

                <li>
                    <a class="top_menu_el">&nbsp; Помощь</a>
                </li>
            </ul>


        </div>

    </div>
    <div id="footer">Management systems v_0.1</div>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jQuery.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/framework.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js" type="text/javascript"></script>

</body>
</html>