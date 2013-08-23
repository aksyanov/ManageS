<?
class CUserInfo extends CWidget
{
    public function init()
    {
        Yii::app()->clientScript->registerCssFile('css/CUserInfo.css');

        $defUserPic  = '<img src="'.Yii::app()->request->baseUrl.'/img/def_userpic_man.jpg" width="160px">';
        $settingsImg = '<img src="'.Yii::app()->request->baseUrl.'/img/sys/settings.png" width="30px">';
        $msgImg = '<img src="'.Yii::app()->request->baseUrl.'/img/sys/msg.png" width="30px">';
        $infoImg = '<img src="'.Yii::app()->request->baseUrl.'/img/sys/info.png" width="30px">';
        $logoutImg = '<a href="/site/logout"><img src="'.Yii::app()->request->baseUrl.'/img/sys/logout.png" width="30px"></a>';


        echo '
        <div id="userInfoMain">
            <div id="userInfoTop">
                <div id="userInfoLogo">';
        echo        $defUserPic;
        echo'   </div>
                <div id="userInfoButtons">
                    <div class="elUserInfoButtons">';echo $settingsImg; echo '</div>
                    <div class="elUserInfoButtons">';echo $msgImg; echo '</div>
                    <div class="elUserInfoButtons">';echo $infoImg; echo '</div>
                    <div class="elUserInfoButtons">';echo $logoutImg; echo '</div>
                </div>
            </div>
            <div id="userInfoBot">
                <div id="userInfoMenu">

                </div>
            </div>
        </div>';

/*
        $cash_type_count = 0;
        $cash_type_count_t = array();
        $cash_type_count_tn = array();

        $model_cash = new Cash;
        $model_history = new History;
        $model_cashcats = new CashCats;

        $res=$model_history->findAll('`users_id` = '.Yii::app()->user->getId().' ORDER by `date` DESC');

        echo '<table width="100%" style="text-align:center;"><tr>
						<td class="histButtonCtd"></td>
						<td>Тип</td>
						<td>Счет</td>
						<td>Сумма</td>
						<td>Комментарий</td>
						<td>Категория</td>
						<td>Дата</td>
						</tr>
			';

        for($i=0;$i<count($res);$i++)
        {
            if($res[$i]->type=='addcash')
            {
                echo '<tr class="trhover"><td ></td><td>'.$res[$i]->type.'</td><td>'.$res[$i]->name.'</td><td>-</td><td>-</td><td>-</td><td>'.$res[$i]->date.'</td></tr>';
            }
            if($res[$i]->type=='1')
            {
                $tmp_type=$model_cashcats->FindByPk($res[$i]->type);
                $tmp_cat=$model_cashcats->FindByPk($res[$i]->cat_cash_id);

                echo '<tr class="trhover"><td class="histButtonCtd"><img class="histButtonC" src="images/delete1.png" onclick="del_history_el('.$res[$i]->id.')" width="15px"></td><td>'.$tmp_type->name.'</td><td>'.$res[$i]->name.'</td><td>-'.$res[$i]->value.'</td><td>'.$res[$i]->comment.'</td><td>'.$tmp_cat->name.'</td><td>'.$res[$i]->date.'</td></tr>';
            }
            if($res[$i]->type=='2')
            {
                $tmp_type=$model_cashcats->FindByPk($res[$i]->type);
                $tmp_cat=$model_cashcats->FindByPk($res[$i]->cat_cash_id);

                echo '<tr class="trhover"><td class="histButtonCtd"><img class="histButtonC" src="images/delete1.png" onclick="del_history_el('.$res[$i]->id.')" width="15px"></td><td>'.$tmp_type->name.'</td><td>'.$res[$i]->name.'</td><td>'.$res[$i]->value.'</td><td>'.$res[$i]->comment.'</td><td>'.$tmp_cat->name.'</td><td>'.$res[$i]->date.'</td></tr>';
            }
        }

        echo '</table>';*/
    }

    public function run()
    {
    }

}