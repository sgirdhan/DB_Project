<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\itemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'All Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allitem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ItemID',
            'DonationID',
            'Price',
            'BrandID',
            'IsPriceDec',
            // 'IsActive',
            // 'AddedOn',
            // 'AddedBy',
            // 'size',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
