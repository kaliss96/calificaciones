<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */

$this->title = 'Actualizar Usuario: ' . ' ' . $model->nombre_usuario;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nombre_usuario, 'url' => ['view', 'id' => $model->id_usuario]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="usuarios-update">

    <h1 align="center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
