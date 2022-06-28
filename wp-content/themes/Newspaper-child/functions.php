<?php
/*  ----------------------------------------------------------------------------
    Newspaper V6.3+ Child theme - Please do not use this child theme with older versions of Newspaper Theme

    What can be overwritten via the child theme:
     - everything from /parts folder
     - all the loops (loop.php loop-single-1.php) etc
	 - please read the child theme documentation: http://forum.tagdiv.com/the-child-theme-support-tutorial/


     - the rest of the theme has to be modified via the theme api:
       http://forum.tagdiv.com/the-theme-api/

 */




/*  ----------------------------------------------------------------------------
    add the parent style + style.css from this folder
 */
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 1001);
function theme_enqueue_styles() {
    wp_enqueue_style('td-theme', get_template_directory_uri() . '/style.css', '', TD_THEME_VERSION, 'all' );
    wp_enqueue_style('td-theme-child', get_stylesheet_directory_uri() . '/style.css', array('td-theme'), TD_THEME_VERSION . 'c', 'all' );

}
// Tạo shortcode chèn coupon vào bài viết
function create_shortcode_coupon($args, $content) {
    ob_start();
    ?>

    <div class="mgg-coupon-cat-list mgg-tiki">
            <?php

            // check if the repeater field has rows of data
            if( have_rows('coupon') ):

                // loop through the rows of data
                while ( have_rows('coupon') ) : the_row(); ?>

         <h2 id="ma-giam-gia-tp" class="mgg-coupon-brand-title"><?php the_sub_field('ten_nhom_ma'); ?></h2>           
                    
                    <?php
                    // Lấy ra các file trong nhóm

                    if( have_rows('ten_coupon_sub') ):

                        while( have_rows('ten_coupon_sub') ) : the_row(); 
                            
                            ?>

                            <div class="mgg-list-mgg-item ">
                    <div class="mgg-block-left">
                        <div class="mgg-discount-box"> <span class="mgg-discount-med-text"> GIẢM </span> <span class="mgg-discount-big-text"> <?php the_sub_field('ten_ma'); ?> </span>
                        </div>
                    </div>
                    <div class="mgg-block-middle">
                        <h5 class="mgg-list-mgg-title"><?php the_sub_field('ten_dai_dien'); ?></h5>
                        <p class="mgg-item-expires"><span class="mggicon"></span><strong>Hạn dùng: <?php $ngay = get_sub_field('ngay_het_han'); if($ngay!=null){the_sub_field('ngay_het_han');}else{ echo "Dùng đến khi hết";} ?></strong></p>
                        <p class="mgg-item-note"><span class="mggicon"></span><?php the_sub_field('mo_ta_ngan'); ?>
                        </p>
                    </div>
                    <div class="mgg-block-right">
                    <?php $code=get_sub_field('code'); if($code!=null){ ?>
                        <a rel="nofollow" href="<?php the_sub_field('link'); ?>" class="mgg-button" onclick="var person = prompt('Copy bằng phím Ctrl+C, sau đó bấm OK để đi đến mua hàng.', '<?php the_sub_field('code'); ?>');" target="_blank"> <span class="mgg-code-cover"> <span class="mggicon-scissors"></span>LẤY MÃ </span> <span class="mgg-code-text"><?php the_sub_field('code'); ?></span> </a>
                        <?php }else{ ?>
                            <a rel="nofollow" href="<?php the_sub_field('link'); ?>" class="mgg-button" target="_blank"> <span class="mgg-code-cover"> <span class="mggicon-scissors"></span>MUA NGAY</span> <span class="mgg-code-text">Code</span> </a>
                            <?php } ?>
                    </div>
                </div>
                            
                            
                            <?php
                                
                        endwhile;

                    endif; 

                endwhile;

            else :

                // no rows found

            endif;

            ?>
            </div>


<?php
$group_list = ob_get_contents();
        ob_end_clean();
        return $group_list;

}
add_shortcode('magiamgia', 'create_shortcode_coupon');
// ket thuc shortcode