<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PenjualanItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjualan-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_penjualan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kd_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga_modal')->textInput() ?>

    <?= $form->field($model, 'harga_jual')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
