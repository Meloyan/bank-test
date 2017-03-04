<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<div id="wrapper">

    <?= $this->render('//common/loginHead'); ?>

    <?php if (Yii::$app->session->hasFlash('confirm_through_email')): ?>

        <?php

                $confirm_through_email = Yii::$app->session->getFlash('confirm_through_email');

        echo \yii\bootstrap\Alert::widget([
            'options' => [
                'class' => 'alert-success'
            ],
            'body' => $confirm_through_email
        ]);
        ?>

    <?php endif; ?>
    <!-- Register section
    ================================================== -->
    <section>
        <div class="page-section pad-sec-80">
            <div class="register-section">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                                <h2>Log in</h2>

                                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                                <?= $form->field($model, 'username') ?>

                                <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control form-group']) ?>

                                <div class="form-group">
                                    <?= Html::submitButton('Signup', ['class' => 'btn btn-md btn-primary', 'name' => 'Register-button']) ?>
                                    <span>Forgot your <a href="#">Password</a>? </span>
                                    <span><a href="<?= Url::to(['main/register']); ?>"> Registration</a></span>
                                </div>

                                <?php ActiveForm::end(); ?>
                            <div class="sep-section"></div>

                            <div class="sign-different">
                                <p>Want to use one of your other accounts? Sign-in here:</p>
                                <a class="facebook-sign" href="#"><i class="fa fa-facebook"></i> Sign In With
                                    Facebook</a>
                                <a class="twitter-sign" href="#"><i class="fa fa-twitter"></i> Sign In With Twitter</a>
                            </div> <!-- end sign-different -->

                        </div> <!-- col-md-6 -->

                    </div> <!-- end row -->
                </div> <!-- end container -->
            </div> <!-- end register-section -->
        </div>
    </section>
    <!-- end Register section -->
</div>