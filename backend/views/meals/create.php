<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Meals */

$this->title = Yii::t('app', 'Create Meals');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Meals'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="meals-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
