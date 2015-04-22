<?php if( !is_active_sidebar( 'first-footer-widget-area') 
	&& !is_active_sidebar( 'second-footer-widget-area') 
	&& !is_active_sidebar( 'third-footer-widget-area') 
	&& !is_active_sidebar( 'fourth-footer-widget-area') 
	&& !is_active_sidebar( 'fifth-footer-widget-area') 
	&& !is_active_sidebar( 'sixth-footer-widget-area')) 
return;?>
<div class="sidebar-footer row col-xs-12">
	<div class="col-lg-2 col-md-4 col-sm-6 widget-area">
		<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
			<?php dynamic_sidebar( 'first-footer-widget-area' ); ?> 
		<?php endif; ?>
	</div>
	<div class="col-lg-2 col-md-4 col-sm-6 widget-area">
		<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
			<?php dynamic_sidebar( 'second-footer-widget-area' ); ?> 
		<?php endif; ?>
	</div>
	<div class="col-lg-2 col-md-4 col-sm-6 widget-area">
		<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
			<h4 class="copyright">Teachbase, 2012—<?php echo date("Y"); ?></h4>
			<?php dynamic_sidebar( 'third-footer-widget-area' ); ?> 
		<?php endif; ?>
	</div>
	<div class="col-lg-2 col-md-4 col-sm-6 widget-area">
		<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
			<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?> 
		<?php endif; ?>
	</div>
	<div class="col-lg-2 col-md-4 col-sm-6 widget-area">
		<?php if ( is_active_sidebar( 'fifth-footer-widget-area' ) ) : ?>
			<?php dynamic_sidebar( 'fifth-footer-widget-area' ); ?> 
		<?php endif; ?>
	</div>
	<div class="col-lg-2 col-md-4 col-sm-6 widget-area">
		<?php if ( is_active_sidebar( 'sixth-footer-widget-area' ) ) : ?>
			<?php dynamic_sidebar( 'sixth-footer-widget-area' ); ?> 
		<?php endif; ?>
	</div>
</div>