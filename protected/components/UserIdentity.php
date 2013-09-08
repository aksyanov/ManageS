<?php

class UserIdentity extends CUserIdentity
{
	private $_id;

	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
        $user=Users::model()->find('login=?',array($this->username));

        //$sql = 'SELECT * FROM  `tbl_users` WHERE `login`="'.$this->username.'" AND `password` = "'.$this->password.'"';
        //$user = Yii::app()->db->createCommand($sql)->queryAll();
		/*if(empty($user)){
            $this->errorMessage = "Неправильный логин или пароль";
            $this->errorCode=false;
        }else{
			$this->_id=$user[0]['id'];
			$this->username=$user[0]['username'];
			$this->errorCode=true;
		}
		return $this->errorCode;*/

        if($user===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!$user->validatePassword($this->password))
            $this->errorCode='Invalid password';//.self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->_id=$user->id;
            $this->username=$user->login;
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode===self::ERROR_NONE;
	}

	/**
	 * @return integer the ID of the user record
	 */
	public function getId()
	{
		return $this->_id;
	}
}