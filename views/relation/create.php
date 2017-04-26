<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model prologgg\relation\models\Relation */

$this->title = 'Создать связь';
$this->params['breadcrumbs'][] = ['label' => 'Связь', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="relation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
