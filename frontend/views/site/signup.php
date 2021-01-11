<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model frontend\models\SignupForm */

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\datetime\DateTimePicker;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to signup:</p>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['options' => [
                'enctype' => 'multipart/form-data',
            ], 'id' => 'form-signup']); 
            echo $form->field($model, 'username')->textInput(['autofocus' => true]);
            echo $form->field($model, 'email');
            echo  $form->field($model, 'password')->passwordInput();
            echo $form->field(
                $model,
                'birthdate',
                ['options' => ['placeholder' => 'birthdate']]
            )->widget(DatePicker::classname(), [
                'type' => DatePicker::TYPE_COMPONENT_APPEND,
                'options' => [
                    'placeholder' => 'birthdate',
                ],
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'dd-M-yyyy', 'endDate' => "0d", 'readonly' => true,
                    'autoclose' => true,
                ]
            ]);
            echo $form->field($model, 'file')->fileInput();
            ?>
            <br>
            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>