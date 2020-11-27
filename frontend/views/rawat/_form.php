<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rawat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rawat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_rawat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_rawat')->textInput() ?>

    <?= $form->field($model, 'nomor_rm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hasil_diagnosa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uang_bayar')->textInput() ?>

    <?= $form->field($model, 'kd_petugas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
