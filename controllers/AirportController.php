<?php

namespace app\controllers;
use yii\filters\AccessControl;
use yii\rest\ActiveController;
use app\models\Airport;
class AirportController extends ActiveController
{
    public $modelClass = "app\models\Airport";
    public function init() 
    {
        parent::init();
        \Yii::$app->user->enableSession = false;
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors['access'] = [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'allow' => true,
                    'actions' => ['index', 'search'],
                    'roles' => ['?'],
                ],
                [
                    'allow' => true,
                    'actions' => ['index', 'search', 'view', 'create', 'update', 'delete', 'options'],
                    'roles' => ['admin'],
                ],
            ]
        ];

        $behaviors['authenticator'] = [
            'class' => \yii\filters\auth\HttpBasicAuth::className(),
            'auth' => function($username, $password) {
                return \app\models\User::findByUsernameAndPassword($username, $password);
            },
            'except' => ['index', 'search']
        ];

        return $behaviors;
    }

    public function actionSearch($airport_code = '')
    {
        return Airport::find()->where(['airport_code' => $airport_code])->all();
    }
}
