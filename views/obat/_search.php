<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ObatSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="obat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Nama_Obat') ?>

    <?= $form->field($model, 'Kode_Obat') ?>

    <?= $form->field($model, 'Deskripsi_Obat') ?>

    <?= $form->field($model, 'Kategori_Obat') ?>

    <?= $form->field($model, 'Aturan_Pakai') ?>

    <?php // echo $form->field($model, 'Harga_Obat') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
