<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PegawaiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pegawai-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_Pegawai') ?>

    <?= $form->field($model, 'id_User') ?>

    <?= $form->field($model, 'Jenis_Pegawai') ?>

    <?= $form->field($model, 'Status_Pegawai') ?>

    <?= $form->field($model, 'Jabatan') ?>

    <?php // echo $form->field($model, 'Tanggal_Bergabung') ?>

    <?php // echo $form->field($model, 'Unit_Kerja') ?>

    <?php // echo $form->field($model, 'Nama_Pegawai') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
