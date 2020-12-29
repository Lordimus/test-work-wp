<?php
	$className = 'text-content';
	if (!empty($block['className'])) {
		$className .= ' ' . $block['className'];
	}
?>

<section class="<?php echo esc_attr($className); ?>">

    <div class="top-title">
        <div class="container">
            <h6 class="title">
                <?php echo get_field('content_top_title'); ?>
            </h6>
        </div>
    </div>

    <div class="content">
        <div class="container-sm">
            <div class="editor">
                <?php echo get_field('content_text'); ?>
            </div>

            <?php if( have_rows('content_button') ): ?>
				<?php while( have_rows('content_button') ): the_row(); ?>
                    <div class="content-bttn">
                        <a class="button" href="<?php echo get_sub_field('content_button_link'); ?>" <?php if (get_sub_field('content_button_open_tab') == 'new') { ?>target="_blank"<?php } ?>>
                            <?php echo get_sub_field('content_button_text'); ?>
                        </a>
                    </div>
                <?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>

</section>