<?php 
/*
Template Name: Тур по ресторану
*/
?>
<?php get_header() ?>
<section class="main__section banket">
    <div class="container-fluid banket__header">
        <div class="container">
            <h2 class="banket__header-title">Тур по ресторану</h2>
        </div>  
    </div>
    <div class="container">
       <div class="tur-page__box">
           <?php echo do_shortcode( '[ipanorama id="999"]' )  ?>
       </div>
    </div>
</section>
<?php get_footer(); ?> 