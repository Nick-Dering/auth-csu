<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserName */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-name-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->label('ID пользователя')->textInput() ?>

    <?= $form->field($model, 'firstname')->label('Имя')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->label('Фамилия')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'patronymic')->label('Отчество')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->label('Статус (препод/студент)')->textInput() ?>

    <?= $form->field($model, 'group_id')->label('Группа')->textInput() ?>

    <?= $form->field($model, 'specialty_id')->label('Специальность')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
