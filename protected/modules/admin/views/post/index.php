<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Blogs',
);

$this->menu=array(
	array('label'=>'Create Post', 'url'=>array('create')),
	array('label'=>'Manage Post', 'url'=>array('admin')),
);
?>



<div class="row-fluid sortable ui-sortable">		
	<div class="box span12">
		<div class="box-header well" data-original-title="">
			<h2><i class="icon-edit"></i> Blogs</h2>
			<div class="box-icon">
				<!-- <a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
				<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
				<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a> -->
				<?php 
					echo CHtml::link('<i class="icon-plus"></i>', 
						array('/admin/post/create'), 
						array('class'=>'btn btn-close btn-round', 'title'=>'Create Blog'));
				?>
			</div>
		</div>
		<div class="box-content">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <div class="row-fluid">
                    <div class="span6">
                        <div id="DataTables_Table_0_length" class="dataTables_length">
                            <label>
                                <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                                    <option value="10" selected="selected">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> records per page
                            </label>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="dataTables_filter" id="DataTables_Table_0_filter">
                            <label>Search: <input type="text" aria-controls="DataTables_Table_0"></label>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
                    <thead>
				        <tr role="row">
        				    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 185px;" aria-sort="ascending" aria-label="Username: activate to sort column descending">标题</th>
        				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 183px;" aria-label="Date registered: activate to sort column ascending">日期</th>
        				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 88px;" aria-label="Role: activate to sort column ascending">分类</th>
        				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 102px;" aria-label="Status: activate to sort column ascending">状态</th>
        				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 348px;" aria-label="Actions: activate to sort column ascending">操作</th>
		                </tr>
		             </thead>   
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <?php
                            $this->widget('zii.widgets.CListView', array(
                            	'dataProvider'=>$dataProvider,
                            	'template' => '{items}',
                            	'itemView'=>'_view',
                            ));
                        ?>
		            </tbody>
                </table>
                
                <?php
                    /*$this->widget('zii.widgets.grid.CGridView', array(
                    	'dataProvider'=>$dataProvider,                   	
                    	'itemsCssClass' => 'table table-striped table-bordered bootstrap-datatable datatable',
                        'template' => '{items}',
                        'columns' => array(
                            array(
                                'name' => '标题',
                                'value' => '$data->title',
                                'headerHtmlOptions' => array(
                                    'class' => 'sorting_asc',
                                    'role' => 'columnheader',
                                    'tabindex' => '0',
                                    'aria-controls' => 'DataTables_Table_0',
                                    'rowspan'=>'1', 
                                    'colspan'=>'1', 
                                    'style'=>'width: 185px;'
                                ),
                            ),
                            array(
                                'name' => '日期',
                                'value' => '$data->update_time',
                                'headerHtmlOptions' => array(
                                    'class' => 'sorting',
                                    'role' => 'columnheader',
                                    'tabindex' => '0',
                                    'aria-controls' => 'DataTables_Table_0',
                                    'rowspan'=>'1', 
                                    'colspan'=>'1', 
                                    'style'=>'width: 183px;'
                                ),
                            ),
                            array(
                                'name' => '分类',
                                'value' => 'Staff',
                                'headerHtmlOptions' => array(
                                    'class' => 'sorting',
                                    'role' => 'columnheader',
                                    'tabindex' => '0',
                                    'aria-controls' => 'DataTables_Table_0',
                                    'rowspan'=>'1', 
                                    'colspan'=>'1', 
                                    'style'=>'width: 88px;'
                                ),
                            ),
                            array(
                                'name' => '状态',
                                'value' => 'Banned',
                                'headerHtmlOptions' => array(
                                    'class' => 'sorting',
                                    'role' => 'columnheader',
                                    'tabindex' => '0',
                                    'aria-controls' => 'DataTables_Table_0',
                                    'rowspan'=>'1', 
                                    'colspan'=>'1', 
                                    'style'=>'width: 102px;'
                                ),
                            ),
                            array(
                                'name' => '操作',
                                'type'=>'html',
                                'value' => '
                                    <a class="btn btn-success" href="#"><i class="icon-zoom-in icon-white"></i>View</a>
                            		<a class="btn btn-info" href="#"><i class="icon-edit icon-white"></i>Edit</a>
                            		<a class="btn btn-danger" href="#"><i class="icon-trash icon-white"></i>Delete</a>',
                                'headerHtmlOptions' => array(
                                    'class' => 'sorting',
                                    'role' => 'columnheader',
                                    'tabindex' => '0',
                                    'aria-controls' => 'DataTables_Table_0',
                                    'rowspan'=>'1', 
                                    'colspan'=>'1', 
                                    'style'=>'width: 348px;'
                                ),
                            ),
                        ),
                    ));*/
                ?>
                
                <div class="row-fluid">
                    <div class="span12">
                        <div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div>
                    </div>
                    <div class="span12 center">
                        <div class="dataTables_paginate paging_bootstrap pagination">
                            <ul>
                                <li class="prev disabled"><a href="#">← Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li class="next"><a href="#">Next → </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div><!--/span-->
</div>