<div class="top">
		<a href="<?php bloginfo('home'); ?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/res/logo.png" alt=""><span class="title">Помощь</span></a>	
		<form action="<?php bloginfo('home'); ?>">
		<div class="clear"></div>
			<input type="text" name="s" placeholder="Введите свой вопрос" value="<?php echo get_search_query(); ?>">
			<input type="submit" value="Найти ответ">
		</form>
		<a href="#" class="tour">Тур по TechBase</a>
		<div class="clear"></div>
	</div>