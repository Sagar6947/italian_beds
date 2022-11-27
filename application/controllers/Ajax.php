<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends CI_Controller
{
    public function addto_cart()
    {
        $product_id = $this->input->post('pid');
        $variant = $this->input->post('variant');
        $quantity = $this->input->post('quantity');

        $product = getSingleRowById('bc_product', array('id' => $product_id));
        $images = getSingleRowById('bc_product_images', array('product_id' => $product_id));
        $variant_details = getSingleRowById('bc_product_variants', array('id' => $variant));
        $var = explode('--', $variant);
        if ($variant_details != '') {
            $price = $variant_details['price'];
            $discounted_price = $variant_details['sale_price'];
        } else {
            $price = $product['price'];
            $discounted_price = $product['discounted_price'];
        }
        $data = array(
            'id'      => $product['id'] . '-' . $var[0],
            'qty'     => (int)$quantity,
            'discount_price'   => $discounted_price,
            'price'   => $price,
            'name'    => $product['name'],
            'image'    => $images['image_file'],
            'weight'    => $product['weight'],
            'variant'    => $variant,
            'is_visible' => $product['is_visible'],
        );

        $this->cart->insert($data);
        print_r($data);
    }
    public function fetch_cart()
    {
        cartlist();
    }
    public function fetch_cart_count()
    {
        echo $this->cart->total_items();
    }
    public function load_total_count()
    {
        echo $this->cart->total() - ((sessionId('promo_amt') != '') ? sessionId('promo_amt') : 0);
    }
    public function load_total()
    {
        echo $this->cart->total();
    }
    public function load_total_discount()
    {
        $dis = 0;
        $price = 0;
        foreach ($this->cart->contents() as $items) {
            if ($items['is_visible'] == true) {
                if ($items['discount_price'] != '') {
                    $dis += $items['price'] * $items['qty'];
                    $price += $items['discount_price'] * $items['qty'];
                } else {
                    $price += $items['price'] * $items['qty'];
                }
            }
        }
        $rem =  ((int)$dis - (int)$price);
        if ($rem > 0) {
            echo $rem;
        } else {
            echo 0;
        }
    }
    public function load_tax()
    {

        $price = 0;
        foreach ($this->cart->contents() as $items) {
            if ($items['is_visible'] == true) {
                if ($items['discount_price'] != '') {

                    $price += $items['discount_price'] * $items['qty'];
                } else {
                    $price += $items['price'] * $items['qty'];
                }
            }
        }

        $data = $this->CommonModal->getRowById('bc_miscellaneous', 'id', 1);
        echo (($price * $data[0]['data_value']) / 100);
    }
    public function delete_item()
    {
        $product_id = $this->input->post('pid');
        $data = array(
            'rowid' => $product_id,
            'qty'   => 0
        );
        $this->cart->update($data);
    }
    public function fetch_cart_list()
    {
        $this->load->view('fetch_full_cart');
    }
    public function update_qty()
    {
        extract($this->input->post());
        $data = array(
            'rowid' => $rowid,
            'qty'   => $qty
        );
        $this->cart->update($data);
    }
    public function create_login()
    {
        $post = array("first_name" => "Guest", "last_name" => "Account", "company" => "", "email" => $this->input->post('mail'), "password" => "", "phone" => "");
        $resp = json_decode(createcustomer($post), true);
        if ($resp['status'] != '') {
            $this->session->set_userdata('msg', '<div class="alert alert-danger">' . $resp['errors']['.customer_create'] . ' </div>');
        } else {
            $this->session->set_userdata('msg', '<div class="alert alert-success">You are successfully registered. Login here to continue.</div>');
        }
    }
    public function get_country_name()
    {
        $countryCode = $this->input->post('countryCode');
        $country = $this->CommonModal->getRowById('bc_countries', 'iso2', $countryCode);
        echo $country[0]['name'];
    }
    public function get_state()
    {
        $countryCode = $this->input->post('countryCode');
        $state = $this->CommonModal->getRowById('bc_states', 'country_code', $countryCode);
        echo '<option>Select State Or Province </option>';
        foreach ($state as $row) {
            echo '<option value="' . $row['iso2'] . '">' . $row['name'] . '</option>';
        }
    }
    public function get_state_name()
    {
        $stateOrProvinceCode = $this->input->post('stateOrProvinceCode');
        $country = $this->CommonModal->getRowById('bc_states', 'iso2', $stateOrProvinceCode);
        echo $country[0]['name'];
    }
    public function get_promo()
    {
        $promo = $this->input->post('promo');
        $promo_row = $this->CommonModal->getRowById('promocode', 'pid', $promo);
        if ($this->cart->total() > $promo_row[0]['deduction']) {
            echo $promo_row[0]['deduction'];
            $this->session->set_userdata('promo_id', $promo);
            $this->session->set_userdata('promo_amt', $promo_row[0]['deduction']);
        } else {
            echo 0;
        }
    }
    public function update_image()
    {
        $array = $_POST['arrayorder'];
        if ($_POST['update'] == "update") {
            $count = 1;
            foreach ($array as $idval) {
                $sql =  $this->CommonModal->updateRowById('bc_product_images', 'id', $idval, array('listorder' => $count));
                // if ($sql) {
                //     echo "Record updated successfully";
                // } else {
                //     echo "Error updating record: " . $conn->error;
                // }
                $count++;
            }
            echo "Record updated successfully";
        } else {
            echo "Error updating record";
        }
    }
}
