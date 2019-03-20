<?php

namespace effsoft\eff\module\admin\controllers;

use effsoft\eff\EffController;
use yii\filters\AccessControl;


class DashboardController extends EffController{

    public function behaviors() {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    function actionIndex(){
        
        return $this->render('index.php', []);
    }
}