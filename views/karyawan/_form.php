<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Karyawan */
/* @var $form yii\widgets\ActiveForm */

$fieldOptions = [
    'template' => '<div claSS="form-line">{input}{label}</div>{error}',
    'options' => ['class' => 'form-group form-float'],
    'labelOptions' => ['class' => 'form-label'],
    'errorOptions' => ['class' => 'error'],
];
?>


<div class="block-header">
                <h2>
                    CREATE NEW KARYAWAN
                </h2>
            </div>

    <?php $form = ActiveForm::begin(); ?>

     <!-- Validation Stats -->

     <div class="karyawan-index">


    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
   
                    <?= $form->field($model, 'nik', $fieldOptions)->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'nama', $fieldOptions)->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'username', $fieldOptions)->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'password', $fieldOptions)->passwordInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'auth_key', $fieldOptions)->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'role', $fieldOptions)->textInput() ?>


                    <div class="form-group">
                        <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
