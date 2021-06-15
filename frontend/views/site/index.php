<?php

/* @var $this yii\web\View */
/* @var $groups yii\web\View */

$this->title = 'My Yii Application';
use yii\helpers\Url;
?>
<?php
//foreach ($model as $key => $value) {
//    echo '<a href="/index.php?r=site%2Fstudents&id='.$value['group']['id'].'">'.$value['subject']['name'].'-'.$value['group']['name'].'</a><br>';
//}
//?>
<h4><b>Вы: </b><?= Yii::$app->user->identity->userName[0]->fio; ?></h4>
<div class="just-padding">

    <div class="list-group list-group-root well">

        <div class="list-group collapse in" id="item-1" aria-expanded="true" style="">

            <? foreach ($groups as $key => $group) :?>

                <a href="#item-1-<?=$group['id']?>" class="list-group-item collapsed" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-chevron-right"></i><?=$key?>
                </a>
                <div class="list-group collapse" id="item-1-<?=$group['id']?>" aria-expanded="false" style="height: 0px;">

                    <? foreach ($group['subject'] as $subject) :?>
                        <? $url = Url::to(['site/students', 'subject' => $subject['id'], 'semester' => $subject['semester']]); ?>
                        <a href="<?=$url?>" class="list-group-item"><?=$subject['name'].' ['.$subject['semester'].']'?></a>
                    <? endforeach;?>
                </div>


            <? endforeach;?>

        </div>


    </div>

</div>
