<?php

/* @var $this yii\web\View */
/* @var $group yii\web\View */
/* @var $model yii\web\View */
/* @var $variants yii\web\View */
/* @var $flag yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
<? if($flag): ?>
<div class="alert alert-success">
    <strong>Готово!</strong> Вы внесли изменения!
</div>
<? endif;?>
<div class="container">

<h3><b>Группа: </b><?= $model[0]['student']['group']['name']; ?></h3>

<h3><b>Предмет: </b> <?= $model[0]['subject']['name'].' | Семестр - '.$model[0]['semester'];?> </h3>
<h3><b>Тип Дисциплины: </b> <?= $model[0]['type']['name'];?> </h3>

<?php

//echo '<h4>' . date("H:i:s m-d-Y ") . '</h4>';
?>


<div class="visit-form" style="padding-top: 15px">

    <?php $form = ActiveForm::begin(['id' => 'RatingForm']); ?>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th width="40px">№</th>
            <th>Студент</th>
            <th>Оценка</th>
        </tr>
        </thead>
        <tbody>
        <? $j= 1; for($i = 0; $i < count($model); $i++ ) :?>
            <tr>
                <td>
                    <?= $j++ ?>
                </td>
                <td>
                    <?= $model[$i]['student']['lastname'].' '.$model[$i]['student']['firstname'] ?>
                </td>
                    <?= $form->field($model[$i], "[$i]id", [
                        'template' => "{input}",
                        'options' => ['tag' => false]
                    ])->label(false)->hiddenInput()?>
                <td>
                    <?= $form->field($model[$i], "[$i]rating")->dropDownList($variants,['prompt'=>'Выбрать...', 'options'=>[ $model[$i]['rating'] =>["Selected"=>true]]])->label(false) ?>
                </td>
            </tr>
        <? endfor;?>
        </tbody>
    </table>
</div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>