<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TmpRawat */

$this->title = 'Tambah Tmp Rawat';
$this->params['breadcrumbs'][] = ['label' => 'Tmp Rawat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tmp-rawat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
