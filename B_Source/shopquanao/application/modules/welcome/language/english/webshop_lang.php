<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Webshop Language Array
 * English
 * Contains all language strings used by the webshop class.
 *
 * @subpackage		Languages
 * @author          Shin Okada
 * @copyright       Copyright (c) 2010
 * @license         http://www.gnu.org/licenses/lgpl.html
 * @link            http://www.okadadesign.no
 * @filesource
 */

// ---------------------------------------------------------------------------

/* Webshop field names */

// Change this according to your module folder name. 
$lang['webshop_shop_name'] = 'CI shop';
$lang['webshop_folder'] = 'webshop';
$lang['webshop_buy'] = 'BUY';


// modules/webshop/views/customerlogin.php
$lang['customer_login_enjoy_shopping'] = 'Enjoy your shopping!';
$lang['customer_login_plz_login'] = 'Please login. This will fill up your details at check out automatically.';


// modules/webshop/views/shoppingcart.php
$lang['webshop_update'] = 'Cập nhập';
$lang['webshop_delete'] = 'Xóa';
$lang['webshop_checkout'] = 'Kiểm tra Checkout';
$lang['webshop_no_items_to_show'] = 'No item to show';
$lang['webshop_will_be_added'] = 'sẽ được thêm vào';
$lang['webshop_shipping_charge'] = 'Shipping charge';
$lang['webshop_currency'] = 'dollars';
$lang['webshop_currency_symbol'] = ' VNĐ'; // &#36;
$lang['webshop_shoppingcart_empty'] = 'Giỏ hàng rỗng';
$lang['webshop_search'] = 'search';
$lang['webshop_click_here'] = 'Click here';
$lang['webshop_if_registered'] = 'if you are already registered.';


// modules/webshop/views/registration.php
$lang['webshop_email'] = 'Email';
$lang['webshop_email_confirm'] = 'Email Confirmation';
$lang['webshop_pass_word'] = 'Mật Khẩu';
$lang['webshop_pass_word_conf'] = 'Nhập lại Mật Khẩu';
$lang['webshop_first_name'] = 'Tên';
$lang['webshop_last_name'] = 'Họ';
$lang['webshop_mobile_tel'] = 'Điện Thoại';
$lang['webshop_shipping_address'] = 'Địa chỉ nhận hàng';
$lang['webshop_address'] = 'Địa Chỉ';
$lang['webshop_post_code'] = 'Postal Code';
$lang['webshop_city'] = 'Thành Phố';
$lang['webshop_register'] = 'Đăng ký';
$lang['webshop_regist_plz_here'] = 'Đăng ký tại đây';
$lang['webshop_price'] = 'Giá';
$lang['webshop_registed_before'] = 'Your email is in our database. Please login.';
$lang['webshop_thank_registration'] = 'Thank you for your registration! You may log in now.';
$lang['webshop_name'] = "Tên";
$lang['webshop_code'] = "Code";


// modules/webshop/controllers/webshop.php for function messages
$lang['webshop_message_contact_us'] = 'Contact us';
$lang['webshop_message_contact'] = 'Contact';
$lang['webshop_message_subject'] = 'Email message from %s.';
$lang['webshop_message_sender'] = 'Sender ';
$lang['webshop_message_sender_email'] = 'Sender email ';
$lang['webshop_message_message'] = 'Message ';
$lang['webshop_message_thank_for_message'] = 'Thanks for your message! You have sent email.';
$lang['message_message'] = 'Message ';
$lang['general_login_msg'] = "Or click <span class='login'>%s</span> if you are already registered.";
$lang['general_logged_in'] = "You are logged in";
$lang['general_hello'] = "Hello ";
$lang['general_web_shop'] = 'Web shop';
$lang['general_check_out'] = 'Go to check out';


/* Strings used on general page */
$lang['general_login'] = 'Log in';
$lang['general_logout'] = 'Log out';
$lang['general_not_logged_in'] = 'You are not logged in.';
$lang['general_cart'] = 'Cart';
$lang['general_shopping_cart'] ='Shopping cart';
$lang['general_search_results'] ='Search Results';
$lang['general_pass_word'] = "Password";
$lang['general_register'] = "Register";


/* orders */
$lang['orders_added_cart'] = "Thêm sản phẩm này vào giỏ hàng.";
$lang['orders_product_removed'] = "Sản phẩm đã bị xóa.";
$lang['orders_not_in_cart'] = "Sản phẩm không có trong giỏ!";
$lang['orders_no_records'] = "No records";
$lang['orders_record'] = "record";
$lang['orders_records'] = "records";
$lang['orders_updated'] = "updated";
$lang['orders_no_changes_detected'] = "No changes detected";
$lang['orders_nothing_to_update'] = "Không có gì update";
$lang['orders_nothing_in_cart'] = "Không có gì trong giỏ!";
$lang['orders_no_item_yet'] = "Bạn chưa có hàng trong giỏ!";
$lang['orders_total_price'] = "Tổng giá tiền";


/* view/confirmorder.php*/
$lang['orders_plz_confirm'] = "Please Confirm Your Order and Fill up Your Details";
$lang['orders_confirm_before'] = "Please confirm your order before clicking the Email Your Order Now button below. Vis du har changes, ";
$lang['orders_go_to_cart'] = "go back to your shopping cart";
$lang['orders_sub_total'] = "SUB-TOTAL : ";
$lang['orders_shipping'] = "Shipping: ";
$lang['orders_total_with_shipping'] = "TOTAL (with shipping): ";
$lang['orders_email'] = "Email";
$lang['orders_email_confirm'] = "Email Confirm";
$lang['orders_shipping_address'] = "Shipping Address";
$lang['orders_post_code'] = "Post number";
$lang['orders_city'] = "City";
$lang['orders_email_order'] = "Email Order";


/*ordersuccess.php */
$lang['orders_thank_you'] = "Thank you for your order! We will get in touch as soon as possible. Please check your email. We have sent confirmation email.";
 
 
/* controllers/webshop/emailorder*/
$lang['email_here_is'] = "Here is the details of order submitted to www.webshop.com";
$lang['email_number_of_order'] = "Nummer of bestilling";
$lang['email_product_name'] = "Product navn";
$lang['email_product_price'] = "product pris";
$lang['email_we_will_call'] = "Thank you for your order. We will call you as soon as possible.";
$lang['email_order_conf'] = "Order confirmation";


/* views/contact.php */
$lang['contact_your_message']="Lời nhắn";
$lang['contact_captcha']= "Nhập vào hai từ";
$lang['contact_send']= "Gửi Đi";
$lang['contact_if_you_human'] = "If you are human, please input six letters or nummers. Please try again!";
$lang['contact_all_field_required'] = "All fields are required . Please try ingen!";


// modules/webshop/controllers/subscribe function
$lang['subscribe_newsletter'] = 'Newsletter';
$lang['subscribe_subscribe'] = 'Subscribe';
$lang['subscribe_unsubscribe'] = 'Unsubscribe';
$lang['subscribe_registed_before'] = 'Your email is already in our list.';
$lang['subscribe_thank_for_subscription'] = 'Thanks for subscribing our newsletter!';
$lang['subscribe_you_been_subscribed'] = 'You have been unsubscribed!';
$lang['subscribe_need_login'] = 'You need to login first';
$lang['subscribe_you_been_unsubscribed'] = 'You have been unsubscribed from Newsletter';


// modules/webshop/controllers/login function
$lang['login_logged_in'] = 'You are logged in!';
$lang['login_email_pw_incorrect'] = 'Sorry, your email or password is incorrect!';
$lang['webshop_mostsold'] = 'Most Sold';
$lang['webshop_newproduct'] = 'New Product';


// calendar
$lang['kago_event'] = 'Event';

// security
$lang['webshop_write_ans'] = "Type the answer.";
$lang['webshop_security_question'] = "Security question.";
$lang['webshop_security_wrong'] = "Your answer is wrong.";


/* End of file webshop_lang.php */
/* Location: ./modules/webshop/language/english/webshop_lang.php */