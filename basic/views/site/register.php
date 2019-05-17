<?php
/**
 * User: Virtice <synd13@yandex.ru>
 * Date: 17.05.2019
 * Time: 19:13
 */

/** @var $model \app\models\database\User */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

?>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-4 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'login')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput() ?>

    <?= $form->field($model, 'private_shiptor_token')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'public_shiptor_token')->textInput(['autofocus' => true]) ?>


    <div class="form-group">
        <div class="col-lg-offset-4 col-lg-8">
            <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
