<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs=array(
	'Blogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Post', 'url'=>array('index')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>

<div class="row-fluid sortable ui-sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title="">
			<h2><i class="icon-edit"></i> Create Blog</h2>
			<div class="box-icon">
				<?php 
					echo CHtml::link('<i class="icon-list"></i>', 
						array('/admin/post'), 
						array('class'=>'btn btn-close btn-round', 'title'=>'Blog List'));
				?>
			</div>
		</div>
		<div class="box-content">
            <?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
        </div>
    </div>
</div>