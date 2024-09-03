<?php

use app\models\KetentuanTindakan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\KetentuanTindakanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Ketentuan Tindakan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ketentuan-tindakan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ketentuan Tindakan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Dosis_Obat',
            'Obat',
            'Deskripsi:ntext',
            'Nama_Tindakan',
            'Biaya',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, KetentuanTindakan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'Dosis_Obat' => $model->Dosis_Obat]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
