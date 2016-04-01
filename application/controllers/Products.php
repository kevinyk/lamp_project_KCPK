<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$this->load->view('home_view');
	}
	public function item()
	{
		$this->load->view('item_view');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function outerwear() 
	{
		$this->load->model('Product');
		$products['menOuterwear'] = $this->Product->getMOuterwear();

		$this->load->view('Outerwear', $products);
	}
	public function itempage($itemID)
	{
		$this->load->model('Product');
		$products['menTees'] = $this->Product->getItemInfo($itemID);

		$this->load->view('itempage', $products);

	}
    public function sortwomenTees()
    {
        $this->load->model('Product');
        $form = $this->input->post();

        $products['allWtees'] = $this->Product->sortWTees($form['sort_by']);
        $this->load->view('womenTees', $products);
    }
    public function sortMenTees()
    {
    	$this->load->model('Product');
    	$form = $this->input->post();

    	$products['menTees'] = $this->Product->sortMTees($form['sort_by']);
    	$this->load->view('MenTees', $products);
    }
    public function sortMenOuterwear()
    {
    	$this->load->model('Product');
    	$form = $this->input->post();

    	$products['menOuterwear'] = $this->Product->sortMenOuterwear($form['sort_by']);
    	$this->load->view('Outerwear', $products);
    }
    public function sortWomenOuterwear()
    {
    	$this->load->model('Product');
    	$form = $this->input->post();

    	$products['allWOuterwears'] = $this->Product->sortWomenOuterwears($form['sort_by']);
    	$this->load->view('WOuterwear', $products);
    }
	public function menTees()
	{
		$this->load->model('Product');
		$products['menTees'] = $this->Product->getMTees();

		$this->load->view('MenTees', $products);
	}

    public function women_all()
    {
        $this->load->model('Product');
        $products['allWomen'] = $this->Product->getWomenAll();
        $this->load->view('women_all', $products);
    }
    public function men_all()
    {
    	$this->load->model('Product');
    	$products['allMen'] = $this->Product->getMenAll();
    	$this->load->view('men_all', $products);
    }
    public function newArrivals()
    {
    	$this->load->model('Product');
    	$products['newWomen'] = $this->Product->getNewWomen();
    	$products['newMen'] = $this->Product->getNewMen();
    	$this->load->view('new_arrivals', $products);
    }
    public function shopOuterwear(){
    	$this->load->model('Product');
    	$products['womenWear'] = $this->Product->getWOuterwears();
    	$products['menWear'] = $this->Product->getMOuterwear();

    	$this->load->view('shopOuterwear', $products);
    }
    public function shopShirts(){
    	$this->load->model('Product');

    	$products['womenTees'] = $this->Product->getWTees();
    	$products['menTees'] = $this->Product->getMTees();

    	$this->load->view('shopShirts', $products);
    }
	public function womenTees()
    {
        $this->load->model('Product');
        $products['allWtees'] = $this->Product->getWTees();
        $this->load->view('womenTees', $products);
    }
    public function womenOuterwears()
    {
        $this->load->model('Product');
        $products['allWOuterwears'] = $this->Product->getWOuterwears();
        $this->load->view('WOuterwear', $products);
    }
	public function add_item()
	{	
		$this->load->library("form_validation");
		$this->form_validation->set_rules("item_name", "Item Name", "trim|required");
		$this->form_validation->set_rules("type", "Item Type", "trim|required");
		$this->form_validation->set_rules("description", "Description", "trim|required");
			if($this->form_validation->run() === FALSE)
				{
				     
				     $this->session->set_flashdata('errors', validation_errors());
				     // $this->session->set_userdata('regError', validation_errors());
				     redirect('/Products/Login');
				}
			else
				{
					 $newItem = $this->input->post();
					 $this->load->model('Product');
					 // var_dump($newUser);
				  //    die();
					 
					 //image upload code
					    $config['upload_path']          = './assets/currentProducts';
		                $config['allowed_types']        = 'gif|jpg|png|jpeg';
		                $config['max_size']             = 500;
		                $config['max_width']            = 0;
		                $config['max_height']           = 0;
		                $config['overwrite']           = FALSE;

		                $this->load->library('upload', $config);

		                if ( ! $this->upload->do_upload('front_image'))
		                {
		                        $error = array('error' => $this->upload->display_errors());

		                }
		                else
		                {
		                        $data = array('upload_data' => $this->upload->data());
		                        $newItem['front_image_filename'] = $data['upload_data']['file_name'];

		                }
		                if ( ! $this->upload->do_upload('back_image'))
		                {
		                        $error = array('error' => $this->upload->display_errors());

		                }
		                else
		                {
		                        $data = array('upload_data' => $this->upload->data());
		                        $newItem['back_image_filename'] = $data['upload_data']['file_name'];


		                }

		                	 $this->Product->addItem($newItem);
							 redirect('/Users/admin_homepage');
						}
	}
	function add_item_form(){
		$this->load->view('add_item_form');
	}
	function editProductForm($itemID){
		$this->load->model('Product');
		$currentItem = $this->Product->getItemInfo($itemID);
		$this->load->view('edit_item_form', $currentItem);
	}
	function removeProductConfirm($itemID)
	{
		$this->load->model('Product');
		$currentItem = $this->Product->getItemInfo($itemID);
		$this->load->view('remove_product_confirm', $currentItem);
	}
	function removeProduct($itemID)
	{
		$this->load->model('Product');
		$this->Product->deleteItem($itemID);
		redirect('/Users/admin_homepage');
	}
	function edit_item($itemID)
	{
		$editedInfo = $this->input->post();
			$config['upload_path']          = './assets/currentProducts';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 100;
            $config['max_width']            = 0;
            $config['max_height']           = 0;
            $config['overwrite']           = FALSE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('front_image'))
            {
            
                    $data = array('upload_data' => $this->upload->data());
                    $editedInfo['front_image_filename'] = $data['upload_data']['file_name'];

            }
            if ($this->upload->do_upload('back_image'))
            {
                    $data = array('upload_data' => $this->upload->data());
                    $editedInfo['back_image_filename'] = $data['upload_data']['file_name'];


            }
		$this->load->model('Product');
		$this->Product->editItemInfo($editedInfo);
	}
	public function add_to_cart()
	{
		$itemToAdd = $this->input->post();
		$this->load->model('Product');
		$itemToAdd['id']= $this->Product->getProductStockfromProduct($itemToAdd['product_id'], $itemToAdd['size']);
		$this->Product->addItemToCart($itemToAdd, $this->session->userdata['cart_id']);

	}
	function itemDetails($itemID){
		$this->load->model('Product');
		$currentItems['itemInfo'] = $this->Product->getItemInfo($itemID);

		$currentItems['items']= $this->Product->getRandomItems($currentItems['itemInfo']['gender']);

		$this->load->view('itempage', $currentItems);
	}
	function goToCart(){
		$this->session->userdata('cart_id');
	}
	public function displayBag()
	{
		$currentUserID = $this->session->userdata['currentUser']['id'];
		$this->load->model('Product');
		$currentCart = $this->Product->getCartIDfromUserID($currentUserID);
		$currentCartID=$currentCart['cart_id'];
		$cartItems['cart_id'] = $currentCartID;
		$cartItems['allItems'] = $this->Product->getCartItems($currentCartID);
		$cartItems['subtotal']=0;
		foreach($cartItems['allItems'] as $item){
			$cartItems['subtotal']+=($item['price']*$item['quantity']);
		}
		$this->load->view('Bag', $cartItems);
	}
	public function checkout()
	{
		$currentUserID = $this->session->userdata['currentUser']['id'];
		$this->load->model('Product');
		$currentCart = $this->Product->getCartIDfromUserID($currentUserID);
		$currentCartID=$currentCart['cart_id'];
		$cartItems['allItems'] = $this->Product->getCartItems($currentCartID);
		$this->load->view('checkout_confirm', $cartItems);
	}
	public function shipping()
	{
		$this->load->view('shipping_info');
	}
	public function process_order()
	{
		$shippingInfo = $this->input->post();
	}
	public function remove_from_bag($product_stock_id)
	{
		$this->load->model('Product');
		$currentUserID = $this->session->userdata['currentUser']['id'];
		$currentCart = $this->Product->getCartIDfromUserID($currentUserID);
		$currentCartID=$currentCart['cart_id'];
		$this->Product->deleteBagItem($product_stock_id,$currentCartID);
		redirect('/Products/DisplayBag');
	}
	public function search(){
		$this->load->model('Product');

		$id = $this->input->post();

		$items['searchedItems']= $this->Product->getSearchedItem($id);

		$this->load->view('searchProducts', $items);

	}
	public function getOrderInfo($order_id)
	{
		$this->load->model('Product');
		$data['productInfo'] = $this->Product->getProductsFromOrder($order_id);
		$this->load->view('orders', $data);
	}
}




