<?php
/* @var $this ObstacleCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Obstacle Categories',
);

$this->menu=array(
	array('label'=>'Create ObstacleCategory', 'url'=>array('create')),
	array('label'=>'Manage ObstacleCategory', 'url'=>array('admin')),
);
?>

<h1>Obstacle Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
