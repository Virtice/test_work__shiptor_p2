<?php

namespace app\modules\api\controllers;

use yii\web\Controller;

class V1Controller extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
