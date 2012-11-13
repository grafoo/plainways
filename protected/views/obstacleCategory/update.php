<?php
/* @var $this ObstacleCategoryController */
/* @var $model ObstacleCategory */

$this->breadcrumbs=array(
	'Obstacle Categories'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ObstacleCategory', 'url'=>array('index')),
	array('label'=>'Create ObstacleCategory', 'url'=>array('create')),
	array('label'=>'View ObstacleCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ObstacleCategory', 'url'=>array('admin')),
);
?>

<h1>Update ObstacleCategory <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>