		<footer class="top-buffer">
			<div class="container-fluid">
			  <div class="row">
				<?php
				wp_nav_menu( array(
                'menu'              => 'secondary1',
                'theme_location'    => 'secondary1',
                'container'         => 'div',
                'container_class'   => 'col-sm-offset-1 col-sm-2',
                'menu_class'        => 'list-unstyled ',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
				<?php
				wp_nav_menu( array(
                'menu'              => 'secondary2',
                'theme_location'    => 'secondary2',
                'container'         => 'div',
                'container_class'   => 'col-sm-2',
                'menu_class'        => 'list-unstyled ',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
				<?php
				wp_nav_menu( array(
                'menu'              => 'secondary3',
                'theme_location'    => 'secondary3',
                'container'         => 'div',
                'container_class'   => 'col-sm-2',
                'menu_class'        => 'list-unstyled ',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
				<div class="social col-sm-offset-2 col-sm-3">
				<form class="navbar-form clearfix" role="search">
					<span class="social-icons">
						<a href="https://www.facebook.com/HNFP.IN/"><i class="fa fa-facebook fa-outline"></i></a>
						<a href="https://twitter.com/hnfp_in"><i class="fa fa-twitter fa-outline"></i></a>
						<a href="whatsapp://send?text=<?php bloginfo('url');?>" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a>
					</span>
					<a href=""><i class="fa fa-search"></i></a>
					<?php _e( do_shortcode( '[wp_google_searchbox]' ) );?>
					<!--input type="text" name="s" class="search-query" placeholder="Search" /-->
				</form>
				</div>
			</div>
		  </div>
		</footer>

<?php wp_footer();?>
</body>
</html>
<style>
	.wgs_wrapper{
		display: inline-block;
		vertical-align: middle;
		width: 70px;
	}
	.wgs_wrapper .gsc-control-cse{ padding: 0;}
	.wgs_wrapper .gsc-input-box, .wgs_wrapper .gsc-input-box .gsc-input{
		background: transparent !important;
		font: lighter medium/2 "Montserrat" !important;
	}
	.wgs_wrapper .gsc-search-button{ display: none; }
	.wgs_wrapper .gsc-input-box td{ padding: 0 !important; }
	.wgs_wrapper .gsib_b{ display: none; }

</style>
​<script>
  window.onload = function(){
		jQuery( '.gsc-input' ).attr( 'placeholder', 'Search' );
  };
</script>
