<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tagihan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tagihan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nomor_Tagihan')->textInput() ?>

    <?= $form->field($model, 'Nama_Pasein')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Deskripsi_Tagihan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Total_Tagihan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Status_Pembayaran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tanggal_Pembayaran')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
