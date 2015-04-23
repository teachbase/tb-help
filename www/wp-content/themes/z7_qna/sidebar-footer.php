<?php if( !is_active_sidebar( 'first-footer-widget-area') 
	&& !is_active_sidebar( 'second-footer-widget-area') 
	&& !is_active_sidebar( 'third-footer-widget-area') 
	&& !is_active_sidebar( 'fourth-footer-widget-area') 
	&& !is_active_sidebar( 'fifth-footer-widget-area') 
	&& !is_active_sidebar( 'sixth-footer-widget-area')) 
return;?>
<div class="sidebar-footer row">
	<div class="footer-section col-lg-7">
		<div class="col-md-4 widget-area">
			<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
				<?php dynamic_sidebar( 'first-footer-widget-area' ); ?> 
			<?php endif; ?>
		</div>
		<div class="col-md-4 widget-area">
			<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
				<?php dynamic_sidebar( 'second-footer-widget-area' ); ?> 
			<?php endif; ?>
		</div>
		<div class="col-md-4 widget-area">
			<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
				<h4 class="copyright">Teachbase, 2012—<?php echo date("Y"); ?></h4>
				<?php dynamic_sidebar( 'third-footer-widget-area' ); ?> 
			<?php endif; ?>
		</div>
	</div>
	<div class="footer-section col-lg-5">
		<div class="col-md-3 widget-area">
			<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
				<?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?> 
			<?php endif; ?>
		</div>
		<div class="col-md-4 widget-area">
			<?php if ( is_active_sidebar( 'fifth-footer-widget-area' ) ) : ?>
				<?php dynamic_sidebar( 'fifth-footer-widget-area' ); ?> 
			<?php endif; ?>
		</div>
		<div class="col-md-5 widget-area">
			<?php if ( is_active_sidebar( 'sixth-footer-widget-area' ) ) : ?>
				<?php dynamic_sidebar( 'sixth-footer-widget-area' ); ?> 
			<?php endif; ?>
		</div>
	</div>
</div>