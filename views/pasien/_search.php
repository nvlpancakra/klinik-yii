<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'Nama_Pasein') ?>

    <?= $form->field($model, 'Tgl_Lahir') ?>

    <?= $form->field($model, 'Jenis_Kelamin') ?>

    <?= $form->field($model, 'Alamat') ?>

    <?= $form->field($model, 'Kelurahan') ?>

    <?php // echo $form->field($model, 'Kecamatan') ?>

    <?php // echo $form->field($model, 'Provinsi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
