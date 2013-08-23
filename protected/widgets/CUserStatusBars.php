<?
class CUserStatusBars extends CWidget
{
    public function init()
    {
        Yii::app()->clientScript->registerCssFile('css/CUserStatusBars.css');
        echo 'Здоровье';
        echo '<div class="borderBar"><div class="contentBar" style="background-color: red;width: 40px;"></div></div>';
        echo 'Досуг';
        echo '<div class="borderBar"><div class="contentBar" style="background-color: green;width: 150px;"></div></div>';
        echo 'Голод';
        echo '<div class="borderBar"><div class="contentBar" style="background-color: #ffff00;width: 100px;"></div></div>';
    }

    public function run()
    {
    }

}