<h1>Show Action</h1>

<button class="btn btn-success" id="btn">Click me...</button>

<?php
//$this->registerJSFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>

<?php
$this->registerJs("$('.container').append('<p>SHOWW1!</p>');", \yii\web\View::POS_HEAD)
?>

<?php
//$this->registerCss('.container{background: #ccc');
?>

<?php

$js = <<<JS
    $('#btn').on('click',function() {
      $.ajax({
        url: 'index.php?r=post/index',
        data: {test: '123'},
        success: function(res) {
            console.log(res);
        },
        error: function() {
          alert('Error!');
        }
      });
    })

JS;

$this->registerJS($js);


?>
