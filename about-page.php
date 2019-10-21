<?php 
/*
Template Name: О нас
*/
?>
<?php get_header(); ?>

<section class="main__section about-page">
    <div class="container-fluid banket__header about-page__bg">
        <div class="container">
            <h2 class="banket__header-title">О нас</h2>
        </div>
    </div>
    <div class="container">
        <div class="about-page__desc">
            <p>
                «Гранатовый сад №1» – элегантный ресторан, в котором вас вкусно накормят и предложат широкий выбор развлечений. 
                <br>
                Гостей ожидают сразу несколько площадок разного формата. Есть и красивые банкетные помещения, и уютные комнаты для отдыха в узком кругу или деловых переговоров, и крытые летние веранды. При входе в один из залов посетителей встречает внушительная стена с полками, полностью заставленными домашней утварью и соленьями. Специально для детей на улице оборудован яркий игровой уголок. По вечерам свои двери открывает ночной клуб с караоке.
            </p>
        </div>
    </div>
</section>

<!-- Gallery -->

<section class="main__section gallery">
    <div class="container-fluid p-0">
        <p class="line-granat"></p>
        <h2 class="main__title">Галерея</h2>
        <div class="gallery__box">
            <div class="container-fluid p-0">
                <?php

                if ( $terms = get_terms( array( 'taxonomy' => 'category', 'include' => '165,164,166' , 'orderby' => 'include', 'exclude' => '1' ) ) ) :

                    echo '<div class="gallery__filter">';

                    foreach ( $terms as $term ) :
                        echo '<a href="' . $term -> term_id.'" class="gallery-filter__link">';
                        echo $term->name;
                        echo '</a>';
                    endforeach;

                    echo '</div>';
                endif;
                ?>

                <div class="gallery-page__box-photo">

                    <div id="164" class="gallery-page__box gallery-page__box--hide">
                        <div class="row m-0">

                            <?php
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'porechni-rest',
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

                    <div id="165" class="gallery-page__box gallery-page__box--hide">
                        <div class="row m-0">

                            <?php
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'cherkaski-rest',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                                ?>

                                <div class="col-6 col-sm-6 col-md-6 col-lg-3  gallery-page__item">
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

                    <div id="166" class="gallery-page__box gallery-page__box--hide">
                        <div class="row m-0">

                            <?php
                            $posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'night-club',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => false, // подавление работы фильтров изменения SQL запроса
                            ) );

                            foreach( $posts as $post ){
                                setup_postdata($post);
                                ?>

                                <div class="col-6 col-sm-6 col-md-6 col-lg-3  gallery-page__item">
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
    </div>
</section>

<?php get_footer(); ?> 