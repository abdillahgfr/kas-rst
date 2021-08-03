<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Karyawan';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="karyawan-index">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                <h1><?= Html::encode($this->title) ?></h1>
             <p>
                  <?= Html::a('Create Karyawan', ['create'], ['class' => 'btn btn-success']) ?>
            </p>

<div class="body table-responsive">
    <table class="table table-striped">
        <thead>

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'id_karyawan',
                'nik',
                'nama',
                'username',


                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

