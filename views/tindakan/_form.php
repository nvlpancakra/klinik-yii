<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tindakan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nama_Tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kode_Tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Kategori_Tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tanggal_Waktu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nama_Pasien')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
