<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'post-form',
	'enableAjaxValidation'=>false,
    'htmlOptions' => array(
        'class'=>'form-horizontal'
    )
)); ?>
    <p class="note"></p>
    <?php echo $form->errorSummary($model); ?>

    <fieldset>
        <legend>Fields with <span class="required">*</span> are required.</legend>
        <div class='control-group'>
            <?php echo $form->labelEx($model,'title', array('class'=>'control-label')); ?>
            <div class='controls'>
                <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>256, 'class'=>'input-xlarge')); ?>
            </div>
            <?php echo $form->error($model,'title'); ?>
        </div>

        <div class='control-group'>
            <?php echo $form->labelEx($model,'content', array('class'=>'control-label')); ?>
            <div class='controls'>
                <?php echo $form->textArea($model,'content',array('rows'=>6, 'style'=>'width:500px;height:197px;')); ?>
            </div>
            <?php echo $form->error($model,'content'); ?>
        </div>

        <div class='control-group'>
            <?php echo $form->labelEx($model,'create_time', array('class'=>'control-label')); ?>
            <div class='controls'>
                <?php echo $form->textField($model,'create_time', array('size'=>60,'maxlength'=>256, 'class'=>'input-xlarge')); ?>
            </div>
            <?php echo $form->error($model,'create_time'); ?>
        </div>

        <div class='control-group'>
            <?php echo $form->labelEx($model,'create_user_id', array('class'=>'control-label')); ?>
            <div class='controls'>
                <?php echo $form->textField($model,'create_user_id', array('size'=>60,'maxlength'=>256, 'class'=>'input-xlarge')); ?>
            </div>
            <?php echo $form->error($model,'create_user_id'); ?>
        </div>

        <div class='control-group'>
            <?php echo $form->labelEx($model,'update_time', array('class'=>'control-label')); ?>
            <div class='controls'>
                <?php echo $form->textField($model,'update_time', array('size'=>60,'maxlength'=>256, 'class'=>'input-xlarge')); ?>
            </div>
            <?php echo $form->error($model,'update_time'); ?>
        </div>

        <div class='control-group'>
            <?php echo $form->labelEx($model,'update_user_id', array('class'=>'control-label')); ?>
            <div class='controls'>
                <?php echo $form->textField($model,'update_user_id', array('size'=>60,'maxlength'=>256, 'class'=>'input-xlarge')); ?>
            </div>
            <?php echo $form->error($model,'update_user_id'); ?>
        </div>

        <div class='form-actions'>
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
        </div>

<?php $this->endWidget(); ?>

<!-- form -->