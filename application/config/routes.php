<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['mattress'] = 'Home/collection/24/mattress';
$route['pillow'] = 'Home/collection/25/pillow';
$route['bed-frames'] = 'Home/collection/32/bed-frames';
$route['collection/(:any)/(:any)'] = 'Home/collection/$1/$2';
$route['collection/(:any)/(:any)/(:any)'] = 'Home/collection/$1/$2/$3';
$route['about-us'] = 'Home/about';
$route['contact-us'] = 'Home/contact_us';
$route['sale'] = 'Home/sale';
$route['faq'] = 'Home/faq';
$route['faq2'] = 'Home/faq2';
$route['warranty'] = 'Home/warranty';
$route['our-products'] = 'Home/our_products';
$route['all-reviews'] = 'Home/our_review';
$route['pillows'] = 'Home/pillows';
$route['bed-frame-collection'] = 'Home/bed_frame_collection';
$route['product_details/(:any)/(:any)'] = 'Home/product_details/$1/$2';
$route['blog_details/(:any)/(:any)'] = 'Home/blog_details/$1/$2';

$route['checkout'] = 'Home/checkout';
$route['login'] = 'Home/login';
$route['register'] = 'Home/register';
$route['after-sales-service'] = 'Home/after_sales_service';
$route['our-blogs'] = 'Home/blogs';
$route['terms-and-condition'] = 'Home/terms_and_condition';
$route['privacy-policy'] = 'Home/privacy_policy';
$route['my-order'] = 'Home/my_order';
$route['cart'] = 'Home/cart';
$route['sagar-faq'] = 'Home/sagar_faq';
$route['new-cart'] = 'Home/new_cart';
$route['new-checkout'] = 'Home/new_checkout';
$route['new-checkout-delivery'] = 'Home/new_checkout_delivery';
$route['new-checkout-ship'] = 'Home/new_checkout_ship';


$route['stripeCheckout'] = 'Home/stripeCheckout';
$route['Logout'] = 'Home/logout';
	


