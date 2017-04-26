<?php
namespace prologgg\relation\controllers;

class DefaultController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'massage' => $this->module->hellowString = 'sad'
        ]);
    }
}