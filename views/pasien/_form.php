<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nama_Pasein')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tgl_Lahir')->textInput() ?>

    <?= $form->field($model, 'Jenis_Kelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kelurahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Provinsi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
