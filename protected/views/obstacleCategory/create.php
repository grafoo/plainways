<?php
/* @var $this ObstacleCategoryController */
/* @var $model ObstacleCategory */

$this->breadcrumbs=array(
	'Obstacle Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ObstacleCategory', 'url'=>array('index')),
	array('label'=>'Manage ObstacleCategory', 'url'=>array('admin')),
);
?>

<h1>Create ObstacleCategory</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>