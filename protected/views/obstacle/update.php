<?php
/* @var $this ObstacleController */
/* @var $model Obstacle */

$this->breadcrumbs=array(
	'Obstacles'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Obstacle', 'url'=>array('index')),
	array('label'=>'Create Obstacle', 'url'=>array('create')),
	array('label'=>'View Obstacle', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Obstacle', 'url'=>array('admin')),
);
?>

<h1>Update Obstacle <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>