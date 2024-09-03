<?php

use app\models\Wilayah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\WilayahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Wilayah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wilayah-index">

    <h1>
        <?= Html::encode($this->title) ?>
    </h1>

    <p>
        <?= Html::a('Create Wilayah', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Kota_Tinggal',
            'Alamat',
            'Kode_Pos',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Wilayah $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'Kota_Tinggal' => $model->Kota_Tinggal]);
                    }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>