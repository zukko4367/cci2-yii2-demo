<?php

namespace app\controllers;


use yii\base\Controller;
use yii\filters\AccessControl;

class ApiController extends Controller
{
    public $layout = 'main';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                    ],
                ],
            ]
        ];
    }
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    public function actionIndex()
    {
        return json_encode(['success' => true, 'response' => 100]);
    }

    public function actionCreate()
    {
        return json_encode(['success' => true, 'response' => 100]);
    }
}