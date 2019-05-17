<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Shiptor :: Test :: Part 2';

$registerUrl = Url::to('site/register')
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>API proxy shiptor</h1>

        <p class="lead">Авторизутейсь или зарегистрируйтесь</p>

        <p><a class="btn btn-lg btn-success" href="<?= $registerUrl ?>">Регистрация</a></p>
    </div>

    <div class="body-content">

        <div class="row">

        </div>

    </div>
</div>
