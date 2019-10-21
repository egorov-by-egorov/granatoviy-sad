<?php
	
    add_action( 'wp_enqueue_scripts', 'my_styles' );
    add_action( 'wp_enqueue_scripts', 'my_scripts' );
	
    // Подключение стилей
    function my_styles() {
    	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'datepicker-style', get_template_directory_uri() . '/assets/css/datepicker.min.css' );
        wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
        wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	}
	
    // Подключение скриптов
    function my_scripts() {
//
    	wp_deregister_script( 'jquery' );
    	wp_register_script( 'jquery',  get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js');
    	wp_enqueue_script('jquery');
//		Bootstrap
        wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true );
//    	Datepicker ( "Header -> Форма бронирования стола" use for search (modal)id="modal_book" -> (input)id="book-datepicker")
        wp_enqueue_script( 'datepicker', get_template_directory_uri() . '/assets/js/datepicker.min.js', array('jquery'), null, true );
//      Magnific ( "Главная, О нас, Галерея" use for search (box)class="gallery__box" -> (elem)class="gallery-page__item")
        wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true  );
//		Mask-input ("Header -> Форма бронирования стола" use for search (modal)id="modal_book" -> (input)id="form__tel")
    	wp_enqueue_script( 'mask-script', get_template_directory_uri() . '/assets/js/jquery.mask.min.js',  array('jquery'), null, true );
//		Custom script
        wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), null, true  );
	}
    // Добавляем возможность custom logo
    add_theme_support( 'custom-logo' );
	
	// custom title tag
    add_theme_support( 'title-tag' );	
	
	// Убираем оборачивающие теги CF7
    remove_filter( 'the_content', 'wpautop');
    remove_filter( 'the_excerpt', 'wpautop');
    add_filter( 'wpcf7_autop_or_not', '__return_false' );
	
    /**
		* Implement the Custom Header feature.
	*/
	
    require get_template_directory() . '/inc/custom-header.php';
	
    /**
		* Custom template tags for this theme.
	*/
    require get_template_directory() . '/inc/template-tags.php';
	
    /**
		* Functions which enhance the theme by hooking into WordPress.
	*/
    require get_template_directory() . '/inc/template-functions.php';
	
	
	// Add short description to product content list
	add_action( 'woocommerce_after_shop_loop_item_title', 'my_add_short_description', 9 );
    function my_add_short_description() {
        echo '<p class="woocommerce-loop-product__custom-description">' . get_the_excerpt() . '</p><br />';
	}
	
    // Remove the sorting dropdown from Woocommerce
    remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );
    // Remove the result count from WooCommerce
    remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
    // Remove link to product page
    remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
    add_theme_support( 'menus' );
	
	
    // Override loop template and show quantities next to add to cart buttons
	
    add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );
    function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
    	if ( $product && $product->is_type( 'simple' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
    		$html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
    		$html .= woocommerce_quantity_input( array(), $product, false );
    		$html .= '<div class="gswbut"><button type="submit" class="button alt added">' . esc_html( $product->add_to_cart_text() ) . '</button></div>';
    		$html .= '</form>';
		}
    	return $html;
	}
//	Вывод заголовока категории
    function woocommerce_template_loop_category_title( $category ) {
	?>
	<h2 class="woocommerce-loop-category__title">
		<?php
            echo esc_html( $category->name );
		?>
	</h2>
	<?php
	}
	
	
    // Shop attributes 
    add_action( 'woocommerce_after_shop_loop_item_title', 'show_attributes', 20 );
	
    function show_attributes() {
		global $product;
		$product->list_attributes();
	}
	
    // removes Order Notes Title - Additional Information
    add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );
	
    add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
	
    function custom_override_checkout_fields( $fields ) {
		unset($fields['billing']['billing_country']);  
		unset($fields['shipping']['shipping_country']);
		
		return $fields;
	}
	
	// change thankyou text
	add_filter('woocommerce_thankyou_order_received_text', 'woo_my_thankyou_order_received_text' );
	function woo_my_thankyou_order_received_text() {
		return "Наш менеджер свяжется с Вами в ближайшее время.";
	}
	
	
function rog_shop_strings( $translated_text, $text, $domain ) {
	
	if( 'woocommerce' === $domain ) {
	
		switch ( $translated_text ) {
			case 'Заказ принят' :
			$translated_text = 'Спасибо за заказ, ждем Вас снова!';
			break;
		}
	}
	return $translated_text;
}
add_filter( 'gettext', 'rog_shop_strings', 20, 3 );



add_filter( 'woocommerce_email_recipient_new_order', 'additional_email_recipient', 10, 2 );
function additional_email_recipient( $recipient, $order ) {
    if ( ! is_a( $order, 'WC_Order' ) ) return $recipient;
    if( $order->get_shipping_method() == 'Доставка из ресторана в Марьино' ){
        $recipient .= ',sm.programming@yandex.ru';
    }
	else if ( $order->get_shipping_method() == 'Доставка из ресторана в Соколе' ){
        $recipient .= ',sm.programming@ya.ru';
    }
    return $recipient;
}