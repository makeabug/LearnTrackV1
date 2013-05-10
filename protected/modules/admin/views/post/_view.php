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
		<a class="btn btn-success" href="#">
			<i class="icon-zoom-in icon-white"></i>  
			View                                            
		</a>
		<a class="btn btn-info" href="#">
			<i class="icon-edit icon-white"></i>  
			Edit                                            
		</a>
		<a class="btn btn-danger" href="#">
			<i class="icon-trash icon-white"></i> 
			Delete
		</a>
	</td>
</tr>