<?php
/* @var $this ObstacleController */
/* @var $model Obstacle */

$this->breadcrumbs=array(
	'Obstacles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Obstacle', 'url'=>array('index')),
	array('label'=>'Manage Obstacle', 'url'=>array('admin')),
);
?>

<h1>Create Obstacle</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>