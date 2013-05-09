<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <style type="text/css" media="all">
        @import url("<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css");
        @import url("<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css");
        @import url("<?php echo Yii::app()->request->baseUrl; ?>/css/main.css");
    </style>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.js"></script>
  </head>
  <body>
    <div id="wrap">	
        <div class="navbar navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="brand" href="#">LearnTrack Admin</a>
                    <div class="nav-collapse collapse">
                        <?php 
                        $this->widget('zii.widgets.CMenu', array(
                            'id' => 'nav',
                            'htmlOptions' => array(
                                'class' => 'nav'
                            ),
                            'items' => array(
                                array('label' => 'Dashboard', 'url'=>array('/site/index')),
                                //array('label' => 'Blog', 'url'=>array('/post')),
                            	array('label' => 'Demo', 'url'=>array('/demo')),
                            ),
                        ));
                        ?>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        
        <div class="container">
            <?php echo $content;?>    
        </div>
    </div>
    
  </body>
</html>
