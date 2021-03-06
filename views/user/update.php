<?php

use yii\helpers\Html;

/**
 * @var yii\base\View $this
 * @var mdm\admin\models\User $model
 */

$this->title = 'Update User: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-update">

	<h1><?= Html::encode($this->title) ?></h1>

	<div class="col-lg-6">
		<?php echo $this->render('_form', [
		'model' => $model,
	]); ?>
	</div>
	<div class="col-lg-3">
		<div class="row">
			
		</div>
	</div>

</div>
