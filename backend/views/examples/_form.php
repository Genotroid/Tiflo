<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Examples */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examples-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sample')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'full')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?=Gallery::widget([
        'model' => $model,
        'label' => 'Изображение'
    ]);?>

    <?php ActiveForm::end(); ?>

</div>
