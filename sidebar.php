<?php 
$global_opt = get_fields('option');
$post_id = get_the_ID();

$arr_post = array();
$arr_post[] = $post_id;
?>
<div class="sidebar">
    <div class="__image_gif">
        <img src="<?php echo $global_opt['logo_header'];?>">
    </div>
    <div class="list_sv">
        <h3>DỊCH VỤ NỔI BẬT</h3>
        <?php 
        $query = new WP_Query( array(
            'post_type' => 'dichvu',
            'posts_per_page' => 10,
            'post_status' => 'publish',
            'post__not_in' => $arr_post,
        ));
        if( $query->have_posts() ){
            echo "<ul>";
            while( $query->have_posts() ){
                $query->the_post();
                ?>
                <li>
                    <a href="<?php echo get_the_permalink();?>"><?php echo get_the_title();?></a>
                </li>
                <?php
            }
            wp_reset_postdata();
            echo "</ul>";
        }
        ?>
    </div>
</div>
