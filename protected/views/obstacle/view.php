<?php
/* @var $this ObstacleController */
/* @var $model Obstacle */

$this->breadcrumbs=array(
	'Obstacles'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Obstacle', 'url'=>array('index')),
	array('label'=>'Create Obstacle', 'url'=>array('create')),
	array('label'=>'Update Obstacle', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Obstacle', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Obstacle', 'url'=>array('admin')),
);
?>

<h1>View Obstacle #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'area',
		'name',
		'description',
		'tbl_obstacle_category_id',
	),
)); ?>
