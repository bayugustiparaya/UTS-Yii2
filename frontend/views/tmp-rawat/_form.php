<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TmpRawat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tmp-rawat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kd_tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'kd_dokter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bagi_hasil_dokter')->textInput() ?>

    <?= $form->field($model, 'kd_petugas')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
