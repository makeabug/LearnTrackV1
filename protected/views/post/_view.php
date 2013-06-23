<?php
/* @var $this PostController */
/* @var $data Post */
?>

<tr>
	<td class="sorting_1"><?php echo CHtml::encode($data->title); ?></td>
	<td class="center "><?php echo CHtml::encode($data->update_time); ?></td>
	<td class="center ">Staff</td>
	<td class="center ">
		<span class="label label-important">Banned</span>
	</td>
	<td class="center ">
		<?php echo CHtml::link(
				'<i class="icon-zoom-in icon-white"></i> View', 
				array('post/view', 'id' => $data->id), 
				array('class'=>'btn btn-success'));
		?>
		<?php echo CHtml::link(
				'<i class="icon-edit icon-white"></i> Edit', 
				array('post/update', 'id' => $data->id), 
				array('class'=>'btn btn-info'));
		?>
		<?php echo CHtml::link(
				'<i class="icon-trash icon-white"></i> Delete', 
				array('post/delete', 'id' => $data->id), 
				array('class'=>'btn btn-danger'));
		?>
	</td>
</tr>