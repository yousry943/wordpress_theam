	<div class="col-md-3 sidebar">
		<!-- ================================== TOP NAVIGATION ================================== -->
		<div class="side-menu animate-dropdown outer-bottom-xs">
			<div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
			<nav class="yamm megamenu-horizontal" role="navigation">
				<ul class="nav">


					<?php big_store_product_list_categories(); ?>

				</ul><!-- /.nav -->
			</nav><!-- /.megamenu-horizontal -->
		</div><!-- /.side-menu -->
		<!-- ================================== TOP NAVIGATION : END ================================== -->
		<div class="sidebar-module-container">

			<div class="sidebar-filter">
				<?php dynamic_sidebar('lift-sidebar') ?>
			</div><!-- /.sidebar-filter -->
		</div><!-- /.sidebar-module-container -->
	</div>