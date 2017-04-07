<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Список товаров';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">
    <p>
        <?= Html::a('Добавить товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
	    'name',
            'cat_id',
           
            'manufacturer',
            'wood',
            'wet',
            //'size',
            'grade',
            'price',
            // 'img',
            // 'gallery',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
