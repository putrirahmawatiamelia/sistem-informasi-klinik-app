<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Transaksi $model */

$this->title = $model->id_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Transaksi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="transaksi-view">

    <h1>Transaksi: <?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_transaksi',
            'pasien.nama',
            'tindakan.nama_tindakan',
            'obat.nama_obat',
            'jumlah_obat',
            'total_biaya',
        ],
    ]) ?>

    <p>
        <!-- <?= Html::a('Ubah', ['update', 'id_transaksi' => $model->id_transaksi], ['class' => 'btn btn-primary']) ?> -->
        <?= Html::a('Hapus', ['delete', 'id_transaksi' => $model->id_transaksi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda ingin menghapus data ini?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

</div>
