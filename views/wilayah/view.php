<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Wilayah $model */

$this->title = $model->id_wilayah;
$this->params['breadcrumbs'][] = ['label' => 'Data Wilayah', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="wilayah-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_wilayah',
            'kode_wilayah',
            'nama_wilayah',
        ],
    ]) ?>

    <p>
        <?= Html::a('Ubah', ['update', 'id_wilayah' => $model->id_wilayah], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id_wilayah' => $model->id_wilayah], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda ingin menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
