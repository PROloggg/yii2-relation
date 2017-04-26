<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel prologgg\relation\models\search\RelationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Связь';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать связь', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'model',
            'relation_model',
            'model_id',
            'model_relation_id',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view} {update} {delete}', 'buttonOptions' => ['class' => 'btn btn-default'], 'options' => ['style' => 'width: 65px;']],
        ],
    ]); ?>
</div>
