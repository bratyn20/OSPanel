<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin() ?>
    <?php echo $form->field($form_model, 'name') ?>
    <?php echo $form->field($form_model, 'email') ?>
    <?php echo Html::submitButton('Send', ['class'=> 'btn btn-success']) ?>
<?php ActiveForm::end() ?>
