<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pegawai $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col-md-6">
        <?= $form->field($model, 'id_User')->textInput() ?>

        <?= $form->field($model, 'Nama_Pegawai')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Status_Pegawai')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Jabatan')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'Tanggal_Bergabung')->textInput() ?>

        <?= $form->field($model, 'Unit_Kerja')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>