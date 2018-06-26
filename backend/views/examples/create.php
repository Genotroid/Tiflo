<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Examples */

$this->title = 'Create Examples';
$this->params['breadcrumbs'][] = ['label' => 'Examples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="examples-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
