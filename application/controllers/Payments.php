<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('./vendor/autoload.php');

class Payments extends CI_Controller {

	public function index()
	{ 
		$this->load->view('index');
	}

  public function stripe_pay() 
  {
    $stripe_keys = array(
      "secret_key" => "sk_test_Zvn6vShZ8hmbi12FODMeqUbf",
      "publishable_key" => "pk_test_wRHTZZ09fmxjJHTmn5n4SxUj"
    );

    \Stripe\Stripe::setApiKey($stripe_keys["secret_key"]);

    $token = $this->input->post("stripeToken");
    $subtotal = $this->session->userdata('subtotal');


    try {
      $charge = \Stripe\Charge::create(array(
        "amount" => ($subtotal*100) , // amount in cents, again
        "currency" => "usd",
        "source" => $token,
        "description" => "Charing the user in the example"
        ));
    } catch(\Stripe\Error\Card $e) {
      $this->session->set_flashdata("errors", "Invalid Card. Please try again with another credit card");
    }
    redirect("/");
  }
}























