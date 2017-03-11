<?php

use yii\helpers\Html;

$confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['main/confirm-register', ['token' => $user->auth_key]]);

?>
<div>
<p>Ваш логин: <?= $user->email ?></p>

<p>Ваш пароль: <?= $password ?></p>
</div>
<?= Html::a(Html::encode('Для активации вашего аккаунта пожалуйста, пройдите по ссылке'), $confirmLink) ?>
