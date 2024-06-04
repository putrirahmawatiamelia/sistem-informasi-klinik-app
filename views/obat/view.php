<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Obat $model */

$this->title = $model->id_obat;
$this->params['breadcrumbs'][] = ['label' => 'Data Obat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="obat-view">

    <h1>Data Obat: <?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_obat',
            'nama_obat',
            'harga',
            'stok',
        ],
    ]) ?>

    <p>
        <?= Html::a('Ubah', ['update', 'id_obat' => $model->id_obat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id_obat' => $model->id_obat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda ingin menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
