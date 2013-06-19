<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'View Post', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<div class="row-fluid sortable ui-sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title="">
			<h2><i class="icon-edit"></i> Update Post <?php echo $model->id; ?></h2>
			<div class="box-icon">
				<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
			</div>
		</div>
		<div class="box-content">
            <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div>