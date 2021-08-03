<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
?>
  

    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
    <?php
    $field_options_username = [
        'options' => ['class' => 'form-group has-feedback'],
        'inputTemplate' => "<span class='glyphicon glyphicon-user form-control-feedback'></span>{input}"
    ];
    $field_options_password = [
        'options' => ['class' => 'form-group has-feedback'],
        'inputTemplate' => "<span class='glyphicon glyphicon-lock form-control-feedback'></span>{input}"
    ];
?>

        <?= $form->field($model, 'username', $field_options_username)->textInput(['autofocus' => true, 'placeholder' => 'Username'])->label(false) ?>
        <?= $form->field($model, 'password', $field_options_password)->passwordInput(['autofocus' => true, 'placeholder' => 'Password'])->label(false) ?>

        <div class="form-group">
        <div class="text-left">
            <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                <label for="terms">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-block btn-lg bg-pink waves-effect" style="padding-right: 15px; padding-left: 15px;">Login</button>

            <div class="row m-t-15 m-b--20">
                    <div class="col-xs-5 align-right">
                        <a href="<?= Url::to(['site/resetPassword']) ?>">Forgot Password?</a>
                    </div>
                </div>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
    
</div>
