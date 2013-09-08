<?php

class InterfaceButtons extends CActiveRecord
{
    public $inMenu = false;
	/**
	 * The followings are the available columns in table 'tbl_user':
	 * @var integer $id
	 * @var string $user_id
	 * @var string $interface_types_id
	 * @var string $name
	 * @var string $synonym
     * @var string $interface_actions_id
     * @var string $button
     * @var string $parent_id
     * @var string $visible
     * @var string $sort
	 */

	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'tbl_interface_buttons';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('users_id,name,interface_types_id,interface_actions_id', 'required'),
			array('name,synonym', 'length', 'max'=>255),
            array('id,interface_types_id,users_id,interface_actions_id,button,parent_id,visible,sort', 'numerical', 'integerOnly'=>true),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
            'user'=>array(self::BELONGS_TO, 'Users', 'users_id'),
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'login' => 'Login',
            'password' => 'Password',
            'companies_id' => 'ID of company',
		);
	}
}