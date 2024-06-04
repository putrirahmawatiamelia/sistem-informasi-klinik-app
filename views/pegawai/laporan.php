<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Grafik Pegawai';
$this->params['breadcrumbs'][] = $this->title;

$pegawaiData = $dataProvider->getModels();
$jenisKelamin = [];

foreach ($pegawaiData as $pegawai) {
    $jenisKelamin[] = $pegawai->jenis_kelamin;
}

$jenisKelaminJson = json_encode($jenisKelamin);

?>

<h1><?= Html::encode($this->title) ?></h1>

<canvas id="pegawaiChart" width="400" height="200"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('pegawaiChart').getContext('2d');
    var pegawaiChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?= $jenisKelaminJson ?>,
            datasets: [{
                label: 'Jenis Kelamin',
                data: <?= $jenisKelaminJson ?>,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
