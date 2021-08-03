<?php 
     if (Yii::$app->user->isGuest) {
         $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
         $menuItems[] = '<li>'
         . Html::beginForm(['/site/logout'], 'post')
         . Html::submitButton(
             'Logout (' . Yii::$app->user->identity->username . ')',
             ['class' => 'btn btn-link logout']
         )
         . Html::endForm()
         . '</li>';
 }
 echo Nav::widget([
     'options' => ['class' => 'navbar-nav navbar-right'],
     'items' => $menuItems,
 ]);
 ?>