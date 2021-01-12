<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model frontend\models\Post */
/* @var $form yii\widgets\ActiveForm */
const STATUS = ['Y' => 'ACTIVE', 'N' => 'INACTIVE'];
?>
<div class="post-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'article_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'article_desc')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'cover_image_id')->fileInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'status')->dropDownList(STATUS,) ?>
    <?php // $form->field($model, 'category_id')->textInput() ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
</div>