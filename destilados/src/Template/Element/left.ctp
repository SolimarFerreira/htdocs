<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar" style="height: auto;">
		<!-- Sidebar user panel -->

		<div class="user-panel">
			<div class="pull-left image">
				<?php
				/*
					if($this->Session->check('Auth.User.Profile.avatar') && $this->Session->read('Auth.User.Profile.avatar') != '' && file_exists(WWW_ROOT.'img'.DS.'profile'.DS.$this->Session->read('Auth.User.Profile.avatar'))){
						echo $this->Html->image('profile/' . $this->Session->read('Auth.User.Profile.avatar'), array('class'=>'img-circle','alt' => $this->Session->read('Auth.User.Profile.nome')));
					}else{
						echo $this->Html->image('profile/default_profile.jpg', array('class'=>'img-circle','alt' => 'Usuário não logado'));
					}
				*/
				?>
			</div>
			<div class="pull-left info">
				<p><?php //echo ($this->Session->check('Auth.User.Profile.nome')) ? $this->Session->read('Auth.User.Profile.nome') : 'Usuário não logado' ?></p>

				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>

		<ul class="sidebar-menu">
			<li class="header">NAVEGAÇÃO PRINCIPAL</li>

			<li class="treeview">

				<?php
				echo  $this->Html->link(
					'<i class="fa fa-user"></i> <span>Usuários</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>',
					'#',
					['escapeTitle' => false]
				);
				?>

				<ul class="treeview-menu">
					<li class="active">
						<?php
						echo  $this->Html->link(
							'<i class="fa fa-users"></i>  Lista Usuários',
							['controller' => 'Users','action' => 'index'],
							['escapeTitle' => false]
						);
						?>
					</li>
					<li>
						<?php
						echo  $this->Html->link(
							'<i class="fa fa-user-plus"></i> Adicionar Usuário',
							['controller' => 'Users','action' => 'add'],
							['escapeTitle' => false]
						);
						?>
					</li>
				</ul>
			</li>


            <li class="treeview">

                <?php
                echo  $this->Html->link(
                    '<i class="fa fa-beer"></i> <span>Produtos</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>',
                    '#',
                    ['escapeTitle' => false]
                );
                ?>

                <ul class="treeview-menu">
                    <li class="active">
                        <?php
                        echo  $this->Html->link(
                            '<i class="fa fa-beer"></i> Adicionar Produto',
                            ['controller' => 'Produtos','action' => 'add'],
                            ['escapeTitle' => false]
                        );
                        ?>
                    </li>
                    <li>
                        <?php
                        echo  $this->Html->link(
                            '<i class="fa fa-book"></i> Adicionar Categoria',
                            ['controller' => 'Categorias','action' => 'add'],
                            ['escapeTitle' => false]
                        );
                        ?>
                    </li>
                    <li>
                        <?php
                        echo  $this->Html->link(
                            '<i class="fa fa-list"></i>  Lista Produtos',
                            ['controller' => 'Produtos','action' => 'index'],
                            ['escapeTitle' => false]
                        );
                        ?>
                    </li>
                    <li>
                        <?php
                        echo  $this->Html->link(
                            '<i class="fa fa-list"></i>  Lista Categorias',
                            ['controller' => 'Categorias','action' => 'index'],
                            ['escapeTitle' => false]
                        );
                        ?>
                    </li>

                </ul>
            </li>


			<li class="treeview">

				<?php
				echo $this->Html->link(
					'<i class="fa fa-android"></i><span>Adicionar Cliente/Funcionario</span>',
					['controller' => 'Pessoas','action' => 'add'],
					['escapeTitle' => false]

				);
				?>

			</li>

            <li class="treeview">

                <?php
                echo $this->Html->link(
                    '<i class="fa fa-shopping-cart"></i><span>Pedidos</span>',
                    ['controller' => 'Pessoas','action' => 'add'],
                    ['escapeTitle' => false]

                );
                ?>

            </li>

            <li class="treeview">

                <?php
                echo $this->Html->link(
                    '<i class="fa fa-money"></i><span>Compras</span>',
                    ['controller' => 'Pedidos','action' => 'compra'],
                    ['escapeTitle' => false]

                );
                ?>

            </li>


			<li class="treeview">

				<?php
				echo $this->Html->link(
					'<i class="fa fa-book"></i><span>Logout</span>',
					['controller' => 'Users','action' => 'logout'],
					['escapeTitle' => false]

				);
				?>

			</li>
		</ul>


	</section>
	<!-- /.sidebar -->
</aside>