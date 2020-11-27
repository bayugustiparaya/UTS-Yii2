<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PendaftaranSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendaftaran-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_daftar') ?>

    <?= $form->field($model, 'nomor_rm') ?>

    <?= $form->field($model, 'tgl_daftar') ?>

    <?= $form->field($model, 'tgl_janji') ?>

    <?= $form->field($model, 'jam_janji') ?>

    <?php // echo $form->field($model, 'keluhan') ?>

    <?php // echo $form->field($model, 'kd_tindakan') ?>

    <?php // echo $form->field($model, 'nomor_antri') ?>

    <?php // echo $form->field($model, 'kd_petugas') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
