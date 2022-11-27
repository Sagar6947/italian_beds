<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Home - Italian Beds";
    $data['product_slider'] = getRowByMoreId('product', array('is_visible' => '1', 'is_featured' => '1'));
    $data['banner'] = $this->CommonModal->getAllRows('bc_home_banner');

    $this->load->view('home', $data);
  }

  public function collection($cat_id, $cat_title, $subcat_title = null)
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Our collections - Italian Beds";
    $data['cat_id'] = $cat_id;
    $data['count'] = 0;
    $data['cat_children'] = [];
    $data['collection_title'] = $cat_title;
    $data['subcat_title'] = $subcat_title;
    $data['collection_desc'] = '';
    $data['all_category'] = getRowByMoreId('category', array('is_visible' => '1'));
    $data['st_cat'] = getSingleRowById('category', array('id' => $cat_id));

    foreach ($data['all_category'] as $cat) {
      if ($cat['id'] == $cat_id) {
        $subcategory =  getRowById('category', 'parent_id', $cat_id);
        $data['cat_children'] = $subcategory;
        $data['collection_title'] = $cat['name'];
        $data['collection_desc'] = $cat['description'];
      } else {
      }
    }
    $data['product'] = getRowByMoreId('product', array('is_visible' => '1'));
    $data['product_slider'] = getRowByMoreId('product', array('is_visible' => '1'));

    $prodcount = 0;
    $redirect_pro = '';
    if ($data['product'] != '') {
      foreach ($data['product'] as $pro) {
        $got =  in_array($cat_id, json_decode($pro['categories'], true));
        if (in_array($cat_id, json_decode($pro['categories'], true))) {
          $prodcount++;
          $redirect_pro = $pro;
        } else {
        }
      }
    }
    if ($prodcount == 1) {
      redirect(base_url('product_details/' . $redirect_pro['id'] . '/' . url_title($redirect_pro['name'], '-', true)));
    };

    if ($cat_title == 'pillow') {
      $this->load->view('pillows', $data);
    } else {

      $this->load->view('collection', $data);
    }
  }

  public function pillows()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Pillows - Italian Beds";
    $data['product'] = getRowByMoreId('product', array('is_visible' => '1', 'id' => 25));
    $data['product_slider'] = getRowByMoreId('product', array('is_visible' => '1'));
    $this->load->view('pillows', $data);
  }

  public function about()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "About Us - Italian Beds";
    $this->load->view('about', $data);
  }
  public function shop()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Shop - Italian Beds";

    $this->load->view('shop', $data);
  }
  public function sagar_faq()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Shop - Italian Beds";

    $this->load->view('sagar-faq', $data);
  }

  public function product_details($pro_id, $pro_title)
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Our collections - Italian Beds";
    $data['pro_id'] = $pro_id;
    $data['product_slider'] = getRowByMoreId('product', array('is_visible' => '1'));
    $data['product'] = getRowByMoreId('product', array('is_visible' => '1', 'id' => $pro_id));
    $data['img'] = getRowsByMoreIdWithOrder('product_images', array('product_id' => $pro_id), 'listorder', 'ASC');

    $data['specs'] = $this->CommonModal->getRowById('product_specs', 'product_id', $pro_id);

    if (count($_POST) > 0) {
      $post = $this->input->post();
      $post['product_id'] = $pro_id;
      $review = $this->CommonModal->insertRowReturnId('product_review', $post);
      $this->session->set_userdata('msg', '<div class="alert alert-success">Your review is successfully submit. Thanks For your Review</div>');
      redirect(base_url('product_details/' . $pro_id . '/' . $pro_title));
    }
    $this->load->view('product_details', $data);
  }


  public function new_cart()
  {
    $data['title'] = "Our collections - Italian Beds";
    $this->load->view('new-cart', $data);
  }

  public function new_checkout()
  {
    $data['title'] = "Our collections - Italian Beds";
    $this->load->view('new-checkout', $data);
  }

  public function new_checkout_delivery()
  {
    $data['title'] = "Our collections - Italian Beds";
    $this->load->view('new-checkout-delivery', $data);
  }

  public function new_checkout_ship()
  {
    $data['title'] = "Our collections - Italian Beds";
    $this->load->view('new-checkout-ship', $data);
  }

  public function blog_details($pro_id, $pro_title)
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Our Blogs - Italian Beds";
    $data['pro_id'] = $pro_id;
    $blog = json_decode(getablog($pro_id), true);
    $data['blog'] = $blog;
    // $data['blogview'] = $this->CommonModal->getSingleRowById('bc_blog', array('blog_id' => $pro_id));
    $data['blogview'] = $this->CommonModal->getRowByMoreId('bc_blog', array('blog_id' => $pro_id));

    $this->load->view('blog_details', $data);
  }

  public function sale()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Shop - Italian Beds";
    $data['product_slider'] = getRowByMoreId('product', array('is_visible' => '1'));
    $this->load->view('product_list', $data);
  }
  public function our_products()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Our products - Italian Beds";
    $data['product_slider'] = getRowByMoreId('product', array('is_visible' => '1'));
    $this->load->view('product_list', $data);
  }

  public function bed_frame_collection()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['product_slider'] = getRowByMoreId('product', array('is_visible' => '1'));

    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Bed Frame Collection - Italian Beds";
    $this->load->view('bed-frame-collection', $data);
  }
  public function contact_us()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Contact Us - Italian Beds";
    if (count($_POST) > 0) {
      $post = $this->input->post();
      $contact = $this->CommonModal->insertRowReturnId('contact_query', $post);
      if ($contact) {
        $this->session->set_userdata('msg', '<div class="alert alert-success">Your Query is successfully submit.</div>');
      } else {
        $this->session->set_userdata('msg', '<div class="alert alert-success">Server Error. please try again later.</div>');
      }
      redirect(base_url('contact-us'));
    }
    $this->load->view('contact', $data);
  }

  public function our_review()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Our reviews- Italian Beds";
    $this->load->view('our_review', $data);
  }
  public function faq()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Our FAQ- Italian Beds";
    $this->load->view('faq', $data);
  }
  public function faq2()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Our FAQ- Italian Beds";
    $this->load->view('faq2', $data);
  }
  public function warranty()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Our Warranty- Italian Beds";
    $this->load->view('warranty', $data);
  }


  public function showroom()
  {
    $data['title'] = "Showroom - Italian Beds";
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));

    $data['showroom'] = $this->CommonModal->getAllRows('bc_showroom_gallery');

    $this->load->view('showroom', $data);
  }




  public function blogs()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));
    // $data['myblog'] = $this->CommonModal->getAllRows('bc_blog');
    $data['myblog'] = $this->CommonModal->getRowByMoreId('bc_blog', array('is_visible' => '0'));

    $data['title'] = "Our Blogs- Italian Beds";
    $this->load->view('blogs', $data);
  }
  public function read_blogs()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Our Blogs- Italian Beds";
    $this->load->view('read_blogs', $data);
  }
  public function after_sales_service()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "After sales services- Italian Beds";
    $data['policy'] = $this->CommonModal->getSingleRowById('policy', array('id' => 3));

    $this->load->view('policy', $data);
  }
  public function terms_and_condition()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "After sales services- Italian Beds";
    $data['policy'] = $this->CommonModal->getSingleRowById('policy', array('id' => 2));

    $this->load->view('policy', $data);
  }
  public function privacy_policy()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Privacy Policy- Italian Beds";
    $data['policy'] = $this->CommonModal->getSingleRowById('policy', array('id' => 1));

    $this->load->view('policy', $data);
  }

  public function checkout()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "checkout - Italian Beds";
    $data['customer'] = getSingleRowById('customer', array('user_id' => sessionId('admin_id')));
    $data['checkout'] = '';
    if (sessionId('order_id')) {
      $data['checkout'] = getSingleRowById('checkout', array('id' => sessionId('order_id')));
    } else {
      $data['checkout'] = '';
    }

    $this->load->view('checkout', $data);
  }

  public function login()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    if ($this->session->has_userdata('user_id')) {
      redirect(base_url('my-order'));
    } else {
    }

    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Sign In - Italian Beds";
    if (count($_POST) > 0) {
      extract($this->input->post());
      $login_data = $this->CommonModal->getRowById('customer', 'email', $email);
      if (!empty($login_data)) {
        if ($login_data[0]['password'] == $password) {
          $this->session->set_userdata('user_id', $login_data[0]['user_id']);

          if (count($this->cart->contents()) > 0) {
            redirect(base_url('checkout'));
          } else {
            redirect(base_url('my-order'));
          }
        } else {

          $this->session->set_userdata('msg', '<div class="alert alert-danger">Wrong Password.</div>');
        }
      } else {

        $this->session->set_userdata('msg', '<div class="alert alert-danger">Username or password doesnt match</div>');
      }
    }
    $this->load->view('login', $data);
  }
  public function order_placed()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Order Info - Italian Beds";
    $this->load->view('order_placed', $data);
  }
  public function track()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Track Order - Italian Beds";
    $this->load->view('track', $data);
  }

  public function register()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    if ($this->session->has_userdata('user_id')) {
      redirect(base_url('my-order'));
    } else {
    }
    if (count($_POST) > 0) {
      $post = $this->input->post();
      $getrow = getRowById('customer', 'email', $post['email']);
      if ($getrow != '') {
        $this->session->set_userdata(
          'msg',
          '<div class="alert alert-danger"> You are already registered. Use forget password to remember it.</div>'
        );
        redirect(base_url('register'));
      } else {
        $insert = insertRow('customer', $post);
        if (!$insert) {
          $this->session->set_userdata(
            'msg',
            '<div class="alert alert-danger"> Server error please try again later</div>'
          );
          redirect(base_url('register'));
        } else {
          $this->session->set_userdata(
            'msg',
            '<div class="alert alert-success">You are successfully registered. <br>Login ID - <b>' . $post['email'] . '</b><br>Login Password -  <b>' . $post['password'] . '</b>.</div>'
          );
          redirect(base_url('login'));
        }
      }
    }
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Register - Italian Beds";
    $this->load->view('register', $data);
  }
  public function my_order()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    if ($this->session->has_userdata('user_id')) {
    } else {
      redirect(base_url('login'));
    }
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));
    $data['order_details'] = $this->CommonModal->getRowById('checkout', 'user_id', sessionId('user_id'));

    $data['title'] = "My orders - Italian Beds";

    $this->load->view('my_order', $data);
  }
  public function cart()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));
    $data['like_product'] = getRowByMoreId('product', array('is_visible' => '1', 'is_featured' => '1'));

    $data['title'] = "My Cart - Italian Beds";

    $this->load->view('cart', $data);
  }
  public function initiate_checkout()
  {
    if (sessionId('order_id') == '') {
      unset($_SESSION['order_id']);
    } else {
    }
    redirect(base_url('Home/checkout'));
  }
  public function chechout_save()
  {
    $post = $this->input->post();
    $total = 0;
    foreach ($this->cart->contents() as $items) {
      $total += (float)$items['price'];
    }
    $order = array(
      'user_id' => sessionId('user_id'),
      'name' => $post['first_name'] . ' ' . $post['last_name'],
      'first_name' => $post['first_name'],
      'last_name' => $post['last_name'],
      'number' => $post['phone'],
      'email' => $post['email'],
      'country' => $post['country_code'],
      'state' => $post['state_or_province'],
      'city' => $post['city'],
      'address' => $post['address1'] . ' ' . $post['address2'],
      'address1' => $post['address1'],
      'address2' => $post['address2'],
      'pincode' => $post['postal_code'],
      
       
      'billing_address1' => $post['billing_address1'],
      'billing_address2' => $post['billing_address2'],
      'billing_pincode' => $post['billing_postal_code'],
      'billing_state' => $post['billing_state_or_province'],
      'billing_city' => $post['billing_city'],

      'payment_type' => 'Online',
      'notes' => $post['customer_message'],
      'totalamount' => $total,
      'grand_total' => $total
    );
    if (sessionId('order_id') == '') {
      $order_id = $this->CommonModal->insertRowReturnId('checkout', $order);
      foreach ($this->cart->contents() as $items) {
        $var = explode('--', $items['variant']);
        $pro = explode('-', $items['id']);
        $cart = array(
          'checkoutid' => $order_id,
          'product_id' => $pro[0],
          'product_img' => $items['image'],
          'product_name' => $items['name'],
          'product_price' => $items['price'],
          'product_quantity' => $items['qty'],
          'product_variant_id' => $var[0],
          'product_variant_name' => $var[1],
          'product_variant_price' => $var[2],
          'total_pro_amt' => $items['price'],
        );
        $product_order = $this->CommonModal->insertRowReturnId('checkout_product', $cart);
      }
      $this->session->set_userdata('order_id', $order_id);
      $this->session->set_userdata('currency_code', 'AU');
      $this->session->set_userdata('total_inc_tax', $total);
      $this->session->set_userdata('email', $post['email']);
      $this->session->set_userdata('name', $post['first_name'] . ' ' . $post['last_name']);
    } else {
      $order_id = $this->CommonModal->updateRowById('checkout', 'id', sessionId('order_id'), $order);
    }
    redirect(base_url('Home/delivery_method'));
  }
  public function delivery_method()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));
    if (!sessionId('order_id')) {
      redirect('checkout');
    }
    if (count($_POST) > 0) {
      redirect(base_url('Home/stripe'));
    } else {
    }
    $data['title'] = "Delivery Methods - Italian Beds";
    $this->load->view('delivery_method', $data);
  }
  public function stripe()
  {
    if (!sessionId('order_id')) {
      redirect('checkout');
    }
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Register - Italian Beds";

    $this->load->view('stripe_checkout', $data);
  }
  public function stripeCheckout()
  {

    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    //check whether stripe token is not empty
    if (!empty($_POST['stripeToken'])) {
      //get token, card and user info from the form
      $token  = $_POST['stripeToken'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $card_num = $_POST['card_num'];
      $card_cvc = $_POST['cvc'];
      $card_exp_month = $_POST['exp_month'];
      $card_exp_year = $_POST['exp_year'];

      //include Stripe PHP library
      require_once APPPATH . "third_party/stripe/init.php";

      //set api key
      $stripe = array(
        "secret_key"      => secret_key,
        "publishable_key" => publishable_key
      );



      \Stripe\Stripe::setApiKey($stripe['secret_key']);

      //add customer to stripe
      $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'source'  => $token
      ));

      //item information
      $itemName = "Italian beds";
      $itemNumber = sessionId('order_id');
      $itemPrice = (sessionId('total_inc_tax') * 100);
      $currency = sessionId('currency_code');
      $orderID = sessionId('order_id');

      //charge a credit or a debit card
      $charge = \Stripe\Charge::create(array(
        'customer' => $customer->id,
        'amount'   => $itemPrice,
        'currency' => $currency,
        'description' => $itemNumber,
        'metadata' => array(
          'item_id' => $itemNumber
        )
      ));

      //retrieve charge details
      $chargeJson = $charge->jsonSerialize();

      //check whether the charge is successful
      if ($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1) {
        //order details 
        $amount = $chargeJson['amount'];
        $balance_transaction = $chargeJson['balance_transaction'];
        $currency = $chargeJson['currency'];
        $status = $chargeJson['status'];
        $date = date("Y-m-d H:i:s");


        //insert tansaction data into the database
        $dataDB = array(
          'name' => $name,
          'email' => $email,
          'card_num' => $card_num,
          'card_cvc' => $card_cvc,
          'card_exp_month' => $card_exp_month,
          'card_exp_year' => $card_exp_year,
          'item_name' => $itemName,
          'item_number' => $itemNumber,
          'item_price' => $itemPrice,
          'item_price_currency' => $currency,
          'paid_amount' => $amount,
          'paid_amount_currency' => $currency,
          'txn_id' => $balance_transaction,
          'payment_status' => $status,
          'created' => $date,
          'modified' => $date
        );

        if ($status == 'succeeded') {
          $order_update = $this->CommonModal->updateRowById('checkout', 'id', sessionId('order_id'), array('payment_id' => $balance_transaction, 'payment_status' => 1, 'payment_data' => json_encode($dataDB)));
          $data['title'] = "Payment success - Italian Beds";
          $this->load->view('payment_success', $data);
        } else {
          $order_update = $this->CommonModal->updateRowById('checkout', 'id', sessionId('order_id'), array('payment_id' => $balance_transaction, 'payment_status' => 2, 'payment_data' => json_encode($dataDB)));
          $data['title'] = "Payment Failed - Italian Beds";
          $this->load->view('payment_failed', $data);
        }
      } else {
        echo "Invalid Token";
        $statusMsg = "";
      }
    }
  }
  public function payment_failed()
  {
    $data['category'] = getRowByMoreId('category', array('is_visible' => '1', 'parent_id' => '0'));
    $data['contactinfo'] = $this->CommonModal->getSingleRowById('contactdetails', array('cid' => '1'));

    $data['title'] = "Payment Failed - Italian Beds";
    $this->load->view('payment_failed', $data);
  }
  public function after_pay_payment()
  {
    if (!sessionId('order_id')) {
      redirect('checkout');
    }
    // extract($this->input->post());
    $order_update = $this->CommonModal->updateRowById('checkout', 'id', sessionId('order_id'), array('payment_type' => 1));
    $data['title'] = "Payment success - Italian Beds";
    echo 'success';
  }
  public function logout()
  {
    $this->session->unset_userdata('user_id');
    redirect('register');
  }
}
