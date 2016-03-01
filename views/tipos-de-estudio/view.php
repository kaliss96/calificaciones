<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TiposDeEstudio */

$this->title = $model->nombre_tipo_estudio;
$this->params['breadcrumbs'][] = ['label' => 'Tipos de Estudios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-de-estudio-view">
  <h1  class="title-form" align="center"><?= Html::encode($this->title) ?></h1>
  <fieldset>
    <div class="imagen">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <div class="formularios">
            <?= DetailView::widget([
              'model' => $model,
              'attributes' => [
                //'id_tipo_estudio',
                'nombre_tipo_estudio',
              ],
            ]) ?>
            <p align="right">
              <?= Html::a('Actualizar', ['update', 'id' => $model->id_tipo_estudio], ['class' => 'btn btn-primary']) ?>
              <?= Html::a('Eliminar', ['delete', 'id' => $model->id_tipo_estudio], [
                'class' => 'btn btn-danger',
                'data' => [
                  'confirm' => '¿Está seguro de eliminar este Tipo de Estudio?',
                  'method' => 'post',
                ],
              ]) ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </fieldset>
</div>
