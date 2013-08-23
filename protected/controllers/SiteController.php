<?php

class SiteController extends CController
{
	public $layout='main';

    public function filters()
    {
        return array(
            'accessControl',
        );
    }

	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

    public function accessRules()
    {
        return array(
            array('deny',
                'actions'=>array('index'),
                'users'=>array('?'),
            ),
            array('allow',
                'actions'=>array('index'),
                'users'=>array('@'),
            ),
            array('allow',
                'actions'=>array('logout'),
                'users'=>array('*'),
            ),

        );
    }

	public function actionIndex()
	{echo date("M-d-Y", mktime(0, 0, 0, 12, 32, 1997));
		$this->render('index');
	}

    public function actionLogin(){
        if(isset($_POST['login_b'])){
            $identity = new UserIdentity($_POST['login'],$_POST['password']);
            if($identity->authenticate()){
                Yii::app()->user->login($identity);
                $this->redirect(Yii::app()->user->returnUrl);
            }else{
                echo $identity->errorMessage;
            }
        }
        $this->render('login');
    }

    public function actionLogout(){
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}
