<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PlanDeEstudio */

$this->title = $model->id_plan;
$this->params['breadcrumbs'][] = ['label' => 'Plan De Estudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="plan-de-estudio-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_plan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_plan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_plan',
            'id_asig',
            'id_facultad',
            'curso',
            'semestre',
        ],
    ]) ?>

</div>
