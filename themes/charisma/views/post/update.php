<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Blogs'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Blog', 'url'=>array('index')),
	array('label'=>'Create Blog', 'url'=>array('create')),
	array('label'=>'View Blog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Blog', 'url'=>array('admin')),
);
?>

<div class="row-fluid sortable ui-sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title="">
			<h2><i class="icon-edit"></i> Update Post <?php echo $model->id; ?></h2>
			<div class="box-icon">
				<?php 
					echo CHtml::link('<i class="icon-list"></i>', 
						array('/post'), 
						array('class'=>'btn btn-close btn-round', 'title'=>'Blog List'));
				?>
			</div>
		</div>
		<div class="box-content">
            <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div>