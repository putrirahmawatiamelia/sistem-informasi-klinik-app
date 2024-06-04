<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan Grafik Pasien';
$this->params['breadcrumbs'][] = $this->title;

$pasienData = $dataProvider->getModels();
$namaPasien = [];
$jenisKelamin = [];

foreach ($pasienData as $pasien) {
    $jenisKelamin[] = $pasien->jenis_kelamin;
}

$jenisKelaminJson = json_encode($jenisKelamin);

?>

<h1><?= Html::encode($this->title) ?></h1>

<canvas id="pasienChart" width="200" height="100"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('pasienChart').getContext('2d');
    var pasienChart = new Chart(ctx, {
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
