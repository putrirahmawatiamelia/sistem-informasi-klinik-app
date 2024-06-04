<?php

use app\models\Wilayah;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\WilayahSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Wilayah';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wilayah-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Wilayah', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Laporan Data Wilayah', ['laporan'], ['class' => 'btn btn-info']) ?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_wilayah',
            'kode_wilayah',
            'nama_wilayah',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Wilayah $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_wilayah' => $model->id_wilayah]);
                 }
            ],
        ],
    ]); ?>


</div>
