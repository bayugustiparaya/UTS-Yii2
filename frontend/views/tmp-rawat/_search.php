<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TmpRawatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tmp-rawat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kd_tindakan') ?>

    <?= $form->field($model, 'harga') ?>

    <?= $form->field($model, 'kd_dokter') ?>

    <?= $form->field($model, 'bagi_hasil_dokter') ?>

    <?php // echo $form->field($model, 'kd_petugas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
