<?
class CMainActions extends CWidget
{
    public function init()
    {
        Yii::app()->clientScript->registerCssFile('css/CMainActions.css');
        echo '<div id="mainActionsMain">';
        echo 'Развлечения<br>';
        echo 'Работа<br>';
        echo 'Учеба<br>';
        echo '</div>';
    }

    public function run()
    {
    }

}