<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Catálogo';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->fetch('meta') ?>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <?php echo $this->Html->css(array('/bootstrap/css/bootstrap.min.css','/dist/css/AdminLTE.min.css','/dist/css/skins/_all-skins.min.css'));?>
    <?php echo $this->Html->css(array('/plugins/iCheck/flat/blue.css','/plugins/morris/morris.css','/plugins/jvectormap/jquery-jvectormap-1.2.2.css'));?>
    <?php echo $this->Html->css(array('/plugins/datepicker/datepicker3.css','/plugins/daterangepicker/daterangepicker-bs3.css','/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'));?>

    <?php //echo $this->Html->script(array('/plugins/jQuery/jQuery-2.1.4.min.js'));?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php echo $this->element('header'); ?>

    <?php echo $this->element('left'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">


        <?php echo $this->fetch('content'); ?>

    </div>

    <?php echo $this->element('footer'); ?>

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->


<?php //echo $this->Html->script(array('/bootstrap/js/bootstrap.min.js','/plugins/morris/morris.min.js'));?>
<?php //echo $this->Html->script(array('/plugins/sparkline/jquery.sparkline.min.js','/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js','/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'));?>
<?php //echo $this->Html->script(array('/dist/js/pages/dashboard.js'));?>

<?php echo $this->Html->script(array('/plugins/jQuery/jQuery-2.1.4.min' ,
                                        '/plugins/jQueryUI/jquery-ui-1.10.3',
                                        '/bootstrap/js/bootstrap.min',
                                        '/plugins/knob/jquery.knob',
                                        '/plugins/daterangepicker/daterangepicker',
                                        '/plugins/datepicker/bootstrap-datepicker',
                                        '/plugins/datepicker/locales/bootstrap-datepicker.pt-BR',
                                        '/plugins/money/jquery.mask.money',
                                        '/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min',
                                        '/plugins/slimScroll/jquery.slimscroll.min',
                                        '/plugins/fastclick/fastclick.min',
                                        'destilados' ,
                                        '/dist/js/app.min',
                                        '/dist/js/demo'));?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>

<!--<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>->


</body>
</html>
