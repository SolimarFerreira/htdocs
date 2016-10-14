<div class="login-box">
    <div class="login-logo">
        <a href="/"><b>WSR Bebidas</b></a>
    </div>
    <!-- /.login-logo -->
    <?php echo $this->Flash->render('flash'); ?>
    <div class="login-box-body">


        <!--<div id="form_login" <?php //echo ($this->Session->check('Settings.Navigation.LoginPanel') && $this->Session->read('Settings.Navigation.LoginPanel') == 'reset') ? 'style="display: none;"' : '' ?> >-->
        <div id="form_login">
            <p class="login-box-msg">Efetue seu login</p>
            <?php
            /*
            echo $this->Form->create('User', array(
                'inputDefaults' => array(
                    'div' => 'form-group has-feedback'
                )
            ));
            */
            echo $this->Form->create();

            echo '<div class="form-group has-feedback required">';
            //echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Username/Login', 'label' => false, 'disabled'=>false, 'after'=>'<span class="glyphicon glyphicon-user form-control-feedback"></span>'));
            echo $this->Form->input('username', array('class' => 'form-control', 'placeholder' => 'Username/Login', 'label' => false, 'disabled'=>false));
            echo '<span class="fa fa-user form-control-feedback"></span>';
            echo '</div>';

            echo '<div class="form-group has-feedback required">';
            //echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password', 'label' => false, 'after'=>'<span class="glyphicon glyphicon-lock form-control-feedback"></span>'));
            echo $this->Form->input('password', array('class' => 'form-control', 'placeholder' => 'Password', 'label' => false));
            //echo '<span class="glyphicon glyphicon-lock form-control-feedback"></span>';
            echo '<span class="fa fa-key form-control-feedback"></span>';
            echo '</div>';

            echo $this->Form->button('Entrar', array(
                'id'    => 'btnConsultar',
                'type'  => 'submit',
                'class' => 'btn btn-primary btn-block btn-flat',
                'div'   => 'box-footer'
            ));
            echo $this->Form->end();
            ?>
            <br>
            <!--<a href="#" id="go_lost_pass">Recuperar senha</a><br>-->
        </div>

        <!--
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
        -->
    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->