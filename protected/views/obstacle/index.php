<?php
/* @var $this ObstacleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Obstacles',
);

$this->menu=array(
	array('label'=>'Create Obstacle', 'url'=>array('create')),
	array('label'=>'Manage Obstacle', 'url'=>array('admin')),
);
?>

<h1>Obstacles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
