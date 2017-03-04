<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<div id="wrapper">

    <?= $this->render('//common/loginHead'); ?>
    <!-- Register section
    ================================================== -->
    <section>
        <div class="page-section pad-sec-80">
            <div class="register-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">

                            <h2>Register</h2>
                            <?php $form = ActiveForm::begin(['id' => 'register-form']); ?>

                            <?= $form->field($model, 'username')->textInput(['class' => 'form-control form-group']) ?>

                            <?= $form->field($model, 'email') ?>

                            <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-group']) ?>
                            <?= $form->field($model, 'password_confirm')->passwordInput(['class' => 'form-control form-group']) ?>

                            <?= $form->field($model, 'sex')->radioList([1 => 'man', 0 => 'female']) ?>

                            <div class="form-group">
                                <?= Html::submitButton('Signup', ['class' => 'btn btn-md btn-primary', 'name' => 'Register-button']) ?>
                            </div>

                            <?php ActiveForm::end(); ?>

                        </div> <!-- col-md-6 -->
                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div> <!-- end register-section -->
        </div>
    </section>
    <!-- end Register section -->

</div>