<?php
use yii\helpers\Html;
use app\models\LoginForm;
/**
 * @var yii\base\View $this
 * @var app\components\TestComponent $testComponent
 */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?php echo Html::encode($this->title); ?></h1>

<p>
    This is the About page. You may modify the following file to customize its content:
</p>
<?= $testComponent->property;  ?>
<code><?php echo __FILE__; ?></code>

<?php
/**
 * @var \yii\widgets\ActiveForm $form
 */
$form = $this->beginWidget('\yii\widgets\ActiveForm',
    array('options' => array('class' => 'form-horizontal'))
);
$model = new LoginForm();
echo $form->field($model,'username')->textInput();
echo $form->field($model,'password')->passwordInput();
echo $form->field($model,'rememberMe')->checkbox();
echo Html::tag('div', Html::submitButton('Login', null, null, array('class' => 'btn btn-primary')), array('class' => 'form-actions'));
$this->endWidget();
?>
