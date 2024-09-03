<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TindakanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tindakan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Nama_Tindakan') ?>

    <?= $form->field($model, 'Kode_Tindakan') ?>

    <?= $form->field($model, 'Kategori_Tindakan') ?>

    <?= $form->field($model, 'Tanggal_Waktu') ?>

    <?= $form->field($model, 'Nama_Pasien') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
