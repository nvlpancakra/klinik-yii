<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\KetentuanTindakan $model */

$this->title = 'Create Ketentuan Tindakan';
$this->params['breadcrumbs'][] = ['label' => 'Ketentuan Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ketentuan-tindakan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
