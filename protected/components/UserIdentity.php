<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
        $sql = 'SELECT * FROM  `tbl_users` WHERE `login`="'.$this->username.'" AND `password` = "'.$this->password.'"';
        $user = Yii::app()->db->createCommand($sql)->queryAll();
		if(empty($user)){
            $this->errorMessage = "Неправильный логин или пароль";
            $this->errorCode=false;
        }else{
			$this->_id=$user[0]['id'];
			$this->username=$user[0]['username'];
			$this->errorCode=true;
		}
		return $this->errorCode;
	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_id;
	}
}