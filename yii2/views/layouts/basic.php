<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <title>Document</title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

   <div class="wrap">
       <div class="container">
           <ul class="nav nav-pills">
               <li class="nav-item" role="presentation">
                  <?= Html::a('Главная', '/web/') ?>
               </li>
               <li class="nav-item">
                   <?= Html::a('Статьи', ['post/index']) ?>
               </li>
               <li class="nav-item">
                   <?= Html::a('Статья', ['post/show']) ?>
               </li>
               <li class="nav-item">
<!--                   <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
               </li>
           </ul>

           <?php echo $content ?>
       </div>
   </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>