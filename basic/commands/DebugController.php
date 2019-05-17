<?php
/**
 * User: Virtice <synd13@yandex.ru>
 * Date: 17.05.2019
 * Time: 20:10
 */

namespace app\commands;


use app\helpers\Uuid;
use yii\console\Controller;

class DebugController extends Controller
{
    public function actionUuid()
    {
        echo Uuid::generate();
    }
}