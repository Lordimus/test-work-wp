<?php
	$className = 'banner';
	if (!empty($block['className'])) {
		$className .= ' ' . $block['className'];
	}
?>

<section class="<?php echo esc_attr($className); ?>">

    <div class="carousel owl-carousel owl-theme">
    <?php 
        $slides = get_field('banner_slider');
        if( !empty($slides) ){
            foreach ($slides as $key => $slide) {
            $background_url = ( isset($slide['banner_slider_image']['url']) ) ? $slide['banner_slider_image']['url'] : '';
        ?>
        <div class="item" style="background-image: url(<?php echo esc_url($background_url); ?>);">
            <div class="container">
                <div class="content">
                    <h1 class="title">
                        <?php echo $slide['banner_slider_title']; ?>
                    </h1>
                    <div>
                        <?php 
                        $button = $slide['banner_slider_button'];
                        if ($button['banner_slider_button_text'] != '') { ?>
                            <a class="button white" href="<?php echo esc_url($button['banner_slider_button_link']); ?>" <?php if ($button['banner_slider_button_open_tab'] == 'new') { ?>target="_blank"<?php } ?>>
                                <?php echo $button['banner_slider_button_text']; ?>
                            </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            
            <?php 
            $see_more_key = ( $key != count($slides) - 1 ) ? $key + 1 : 0;
            if(isset( $slides[$see_more_key] )){ ?>
            <div class="next-project">
                <h5 class="title"><?php echo $slides[$see_more_key]['banner_slider_title']; ?></h5>
                <p class="see-more">See more <span>+</span></p>
            </div>
            <?php } ?>
        </div>
        <?php
            }
        }
    ?>
    </div>
    
</section>