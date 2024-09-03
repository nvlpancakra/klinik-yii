<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TagihanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tagihan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Nomor_Tagihan') ?>

    <?= $form->field($model, 'Nama_Pasein') ?>

    <?= $form->field($model, 'Deskripsi_Tagihan') ?>

    <?= $form->field($model, 'Total_Tagihan') ?>

    <?= $form->field($model, 'Status_Pembayaran') ?>

    <?php // echo $form->field($model, 'Tanggal_Pembayaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
