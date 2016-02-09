add_filter('woocommerce_get_price','reigel_woocommerce_get_price',20,2);
function reigel_woocommerce_get_price($price,$post){
	if ($post->post->post_type === 'post')
		$price = get_post_meta($post->id, "price", true);
	return $price;
}
