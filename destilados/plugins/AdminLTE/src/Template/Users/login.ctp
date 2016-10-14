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
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Publicador Bíblia no Celular';
?>
<?php echo $this->Html->docType('html5'); ?>
<html>
<head>
    <?php echo $this->Html->charset(); ?>

    <title>
        <?php echo $cakeDescription ?>:
        <?php //echo $title_for_layout; ?>
    </title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'));
    echo $this->fetch('meta');

    echo $this->Html->css('/bootstrap/css/bootstrap.min.css');
    echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
    echo $this->Html->css('/dist/css/AdminLTE.min.css');
    echo $this->Html->css('/plugins/iCheck/square/blue.css');
    ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php echo $this->fetch('css'); ?>


</head>

<body class="login-page">


    <div class="login-box">
        <div class="login-logo">
            <a href="/">Publicador <b>Bíblia</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <?php //echo $this->Session->flash(); ?>

            <!--<div id="form_login" <?php echo ($this->Session->check('Settings.Navigation.LoginPanel') && $this->Session->read('Settings.Navigation.LoginPanel') == 'reset') ? 'style="display: none;"' : '' ?> >-->
            <div id="form_login">
                <p class="login-box-msg">Efetue seu login</p>
                <?php

                echo $this->Form->create('User', array(
                    'inputDefaults' => array(
                        'div' => 'form-group has-feedback'
                    )
                ));


                //echo $this->Form->create();


                echo '<div class="form-group has-feedback required">';
                echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Username/Login', 'label' => false, 'disabled'=>false));
                echo '<span class="glyphicon glyphicon-user form-control-feedback"></span>';
                echo '</div>';

                //echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Username/Login', 'label' => false, 'disabled'=>false, 'div' => array('class' => 'form-group has-feedback required', 'after'=>'<span class="glyphicon glyphicon-user form-control-feedback"></span>'));

                echo '<div class="form-group has-feedback required">';
                echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password', 'label' => false));
                echo '<span class="glyphicon glyphicon-lock form-control-feedback"></span>';
                echo '</div>';

                //echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password', 'label' => false, 'after'=>'<span class="glyphicon glyphicon-lock form-control-feedback"></span>'));

                echo $this->Form->button('Entrar', array(
                    'id'    => 'btnConsultar',
                    'type'  => 'submit',
                    'class' => 'btn btn-primary btn-block btn-flat',
                    'div'   => 'box-footer'
                ));
                echo $this->Form->end();
                ?>
                <br>
                <a href="#" id="go_lost_pass">Recuperar senha</a><br>
            </div>

            <div id="form_lost_pass" <?php echo ($this->Session->check('Settings.Navigation.LoginPanel') && $this->Session->read('Settings.Navigation.LoginPanel') == 'reset') ? '' : 'style="display: none;"' ?>>
                <p class="login-box-msg">Informe seu email</p>
                <?php
                echo $this->Form->create('User', array(
                    'action'=>'reset',
                    'inputDefaults' => array(
                        'div' => 'form-group has-feedback'
                    )
                ));
                echo $this->Form->hidden('reset',array('value'=> ($this->Session->check('Settings.Navigation.LoginPanel') && $this->Session->read('Settings.Navigation.LoginPanel') == 'reset') ? true : false));
                echo $this->Form->input('email', array('value'=>($this->Session->check('Settings.Navigation.LoginPanelUserEmail')) ? $this->Session->read('Settings.Navigation.LoginPanelUserEmail') : '','class' => 'form-control', 'placeholder' => 'Email', 'label' => false, 'disabled'=>false, 'after'=>'<span class="glyphicon glyphicon-envelope form-control-feedback"></span>'));
                echo $this->Form->button('Recuperar senha', array(
                    'id'    => 'btnConsultar',
                    'type'  => 'submit',
                    'class' => 'btn btn-primary btn-block btn-flat',
                    'div'   => 'box-footer'
                ));
                echo $this->Form->end();
                ?>
                <br>
                <a href="#" id="go_form_login">Voltar ao login</a><br>
            </div>
        </div>
        <!-- /.login-box-body -->
    </div><!-- /.login-box -->


<!-- jQuery 2.1.4 -->
<?php echo $this->Html->script('/plugins/jQuery/jQuery-2.1.4.min.js'); ?>
<!-- Bootstrap 3.3.2 JS -->
<?php echo $this->Html->script('/bootstrap/js/bootstrap.min.js'); ?>
<!-- iCheck -->
<?php echo $this->Html->script('/plugins/iCheck/icheck.min.js'); ?>

<!-- Javascript da pagina -->
<?php //echo $this->Html->script('/theme/AdminLTE/js/' . ucfirst($this->params['controller']) . '/' . Inflector::underscore($this->params['action'])); ?>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
<?php echo $this->fetch('script'); ?>
</body>
</html>