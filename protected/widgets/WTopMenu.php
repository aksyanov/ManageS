<?
class WTopMenu extends CWidget
{
    protected $menus;
    //Yii::app()->clientScript->registerCssFile('css/CUserStatusBars.css');
    public function init()
    {
        $backgroundImg = '<img src="'.Yii::app()->request->baseUrl.'/img/icons/plus_black.png" width=20px>';

        $user = Users::model()->findByPk(Yii::app()->user->getId());
        $this->menus = $user->interfaceButtons;
        $menus = $this->menus;

        $allHtml = '<ul id="topMenuElements" class="topMenuElements">';

        foreach($menus as $menu){
            if(!$menu->visible || $menu->inMenu) continue;

            $innerButton = '<a class="top_menu_el">'.$menu->synonym.'</a>&nbsp; |';
            if($menu->button){
                $allHtml.= '<li>'.$innerButton.'</li>';
            }else{
                $children = $this->getAllChild($menu->id);
                $allHtml.= '<li>'.$innerButton.$children.'</li>';
            }

        }

        $allHtml.='<li>'.$backgroundImg.'</li>';
        $allHtml.= '</ul>';

        echo $allHtml;


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

    protected function  getAllChild($parentId){
        $children = '<ul>';
        $menus = $this->menus;
        foreach($menus as $menu){
            if($menu->parent_id==$parentId){
                $children.= '<li><a>'.$menu->synonym.'</a></li>';
                $menu->inMenu = true;
            }
        }
        $children.= '</ul>';

        return $children;
    }

}