
<?php
use yii\bootstrap5\ActiveForm;
?>

<?php if($model->image): ?>
    <img src="/uploads/<?= $model->image?>" alt="">
<?php endif; ?>