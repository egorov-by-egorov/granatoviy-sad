<?php 
/*
Template Name: Галерея
*/
?>
<?php get_header() ?>
<section class="main__section banket">
    <div class="container-fluid banket__header">
        <div class="container">
            <h2 class="banket__header-title">Галерея</h2>
        </div>  
    </div>
</section>

<!-- Gallery -->

<section class="main__section gallery">
    <div class="gallery__box">
        <div class="container-fluid p-0">
            <div class="gallery-page__box-photo">

                <div class="gallery-page__box">
                    <div class="row m-0">

                        <?php 
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'all',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                                ?>
                                
                                <div class="col-6 col-sm-6 col-md-6 col-lg-3 gallery-page__item">
                                    <a href="<?php  
                                    $checkBigPic = get_field( "picture-big" );

                                    if( $checkBigPic ) {
                                        the_field('picture-big');
                                    } else {
                                        the_field('picture');
                                    }
                                ?>" class="img-zoom">
                                        <div class="gallery-page__content">
                                        <img alt="" src="<?php the_field('picture'); ?>">
                                        </div>
                                    </a>
                                </div>
                                

                                <?php
                            }

                                    wp_reset_postdata(); // сброс
                        ?>
                    </div>
                </div>


            </div>

        </div>
    </div>
</section>
<?php get_footer(); ?> 