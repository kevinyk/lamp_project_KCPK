<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function addItem($newItem)
	{
		// $query = "INSERT INTO products (name, description, price, type, size, stock) VALUES (?, ?, ?, ?, ?, ?)";
		// $sizes = array('xs', 's', 'm', 'l', 'xl');
		// $quants = array($newItem['quant_xs'], $newItem['quant_s'], $newItem['quant_m'], $newItem['quant_l'], $newItem['quant_xl']);
		// for($i=0; $i<5; $i++){
		// 	$values= array ($newItem['item_name'], $newItem['description'], $newItem['price'], $newItem['type'], $sizes[$i], $quants[$i]);
		// 	$this->db->query($query, $values);

		// }
		//adds to the products table
		$query = "INSERT INTO products (name, gender, description, price, color, type, front_image_filename, back_image_filename, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
		$values = array($newItem['item_name'], $newItem['gender'], $newItem['description'], $newItem['price'], $newItem['color'], $newItem['type'], $newItem['front_image_filename'], $newItem['back_image_filename']);
		
		$this->db->query($query, $values);
		$newItemID = $this->db->insert_id();
		// adds to the products_stock table
		$query = "INSERT INTO products_stock (product_id, size, stock, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
		$sizes = array('xs', 's', 'm', 'l', 'xl');
		$quants = array($newItem['quant_xs'], $newItem['quant_s'], $newItem['quant_m'], $newItem['quant_l'], $newItem['quant_xl']);
		for($i=0; $i<5; $i++){
			$values= array ($newItemID, $sizes[$i], $quants[$i]);
			$this->db->query($query, $values);

		}
		

	}

	public function editItemInfo($editedInfo)
	{
		
		foreach($editedInfo as $category=>$editedValue)
		{
			$query = "UPDATE products SET $category = ? WHERE id = ?";
			if($editedValue && $category!='id' && $category!='quant_xs' && $category!='quant_s' && $category!='quant_m' && $category!='quant_l' && $category!='quant_xl')
			{
				$values = array($editedValue,$editedInfo['id']);
				$this->db->query($query,$values);
			}
			
		}
		$query = "UPDATE products_stock SET stock = ? WHERE size = ? AND product_id = ?";
		$editedQuants = array('xs'=> $editedInfo['quant_xs'], 's'=>$editedInfo['quant_s'], 'm'=>$editedInfo['quant_m'], 'l'=>$editedInfo['quant_l'], 'xl'=>$editedInfo['quant_xl']);
		foreach ($editedQuants as $size => $quant)
		{
			if($quant){
				$values = array($quant, $size, $editedInfo['id']);
				$this->db->query($query,$values);
			}
		}
	}

	public function getAllItemInfo()
	{
		$query = "SELECT products.id, products.name, products.gender, products.description, products.price, products.type, products.front_image_filename, products.back_image_filename, products_stock.size, products_stock.stock FROM products LEFT JOIN products_stock ON products.id = products_stock.product_id";
		return $this->db->query($query)->result_array();
	}
	public function getItemInfo($itemID)
	{
		$query = "SELECT * FROM products WHERE products.id = ?";
		return $this->db->query($query,$itemID)->row_array();
	}
	public function deleteItem($itemID)
	{
		$query = "DELETE FROM products_stock WHERE products_stock.product_id = ?";
		$this->db->query($query, $itemID);
		$query = "DELETE FROM products WHERE id = ?";
		$this->db->query($query, $itemID);
	}
	public function getMTees(){
		$query = "select * from products where products.gender = 'men' AND products.type = 'shirt' ";

		return $this->db->query($query)->result_array();
	}
	public function getMOuterwear(){
		$query = "select * from products where products.gender = 'men' AND products.type = 'hoodie' ";

		return $this->db->query($query)->result_array();

	}
	public function getWomenAll() {
    	$query = "SELECT * FROM products WHERE products.gender = 'women' ORDER BY created_at DESC";
    	return $this->db->query($query)->result_array();
    }
    public function getMenAll() {
    	$query = "SELECT * FROM products WHERE products.gender = 'men' ORDER BY created_at DESC";
    	return $this->db->query($query)->result_array();   	
    }
    public function getNewWomen() {
    	$query = "SELECT * FROM products WHERE products.gender = 'women' ORDER BY created_at DESC LIMIT 6";
    	return $this->db->query($query)->result_array();
    }
    public function getNewMen() {
    	$query = "SELECT * FROM products WHERE products.gender = 'men' ORDER BY created_at DESC LIMIT 6";
    	return $this->db->query($query)->result_array();
    }
    public function sortWTees($sort_by) {
        $query = "SELECT * FROM products WHERE products.gender = 'women' AND products.type = 'shirt' ORDER BY $sort_by DESC";
        return $this->db->query($query)->result_array();
    }
    public function sortMTees($sort_by) {
        $query = "SELECT * FROM products WHERE products.gender = 'men' AND products.type = 'shirt' ORDER BY $sort_by DESC";
        return $this->db->query($query)->result_array();
    }
    public function sortMenOuterwear($sort_by) {
        $query = "SELECT * FROM products WHERE products.gender = 'men' AND products.type = 'hoodie' ORDER BY $sort_by DESC";
        return $this->db->query($query)->result_array();
    }
    public function sortWomenOuterwears($sort_by) {
        $query = "SELECT * FROM products WHERE products.gender = 'women' AND products.type = 'hoodie' ORDER BY $sort_by DESC";
        return $this->db->query($query)->result_array();  	
    }

    public function getWTees() {
        $query = "SELECT * FROM products WHERE products.gender = 'women' AND products.type = 'shirt' ";
        return $this->db->query($query)->result_array();
    }
    public function getWOuterwears() {
        $query = "SELECT * FROM products WHERE products.gender = 'women' AND products.type = 'hoodie' ";
        return $this->db->query($query)->result_array();
    }
    public function getRandomItems($id){
    	$query = "SELECT * FROM products WHERE gender = ? ORDER BY RAND() LIMIT 3";
    	return $this->db->query($query, $id)->result_array();
    }
    public function getProductStockfromProduct($product_id, $product_size)
	{
		$query = "SELECT products_stock.id FROM products LEFT JOIN products_stock ON products.id = products_stock.product_id WHERE products.id = ? AND products_stock.size = ?";
		$values = array($product_id, $product_size);
		return $this->db->query($query,$values)->row_array();
	}
	public function getCartItems($cart_id)
	{
		$query = "SELECT * FROM products LEFT JOIN products_stock ON products.id = products_stock.product_id LEFT JOIN cart_product ON products_stock.id = cart_product.product_stock_id WHERE cart_product.cart_id = $cart_id";
		return $this->db->query($query)->result_array();
	}
	public function getCartIDfromUserID($user_id)
	{
		$query = "SELECT cart_id FROM cart_users WHERE cart_users.user_id = $user_id ORDER BY cart_id DESC LIMIT 1";
		return $this->db->query($query)->row_array();
	}
	public function addItemToCart($itemToAdd, $cart_id)
	{
		$query = "INSERT INTO cart_product (product_stock_id, cart_id, quantity) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE quantity = ?";
		$values = array($itemToAdd['id'], $cart_id, $itemToAdd['quantity'],$itemToAdd['quantity']);
		$this->db->query($query,$values);
	}
	public function deleteBagItem($product_stock_id, $cart_id)
	{
		$query = "DELETE FROM cart_product WHERE product_stock_id = $product_stock_id AND cart_id = $cart_id";
		$this->db->query($query);
	}
	public function getSearchedItem($id){
		$query = " SELECT * FROM products WHERE color = ? ";

		return $this->db->query($query, $id)->result_array(); 




	}
	public function getOrderInfoFromID($user_id)
	{
		$query = "SELECT * FROM orders WHERE user_id = $user_id ORDER BY created_at DESC";
		return $this->db->query($query)->result_array();
	}
	public function getAllOrderInfo()
	{
		$query = "SELECT * FROM orders ORDER BY created_at DESC";
		return $this->db->query($query)->result_array();
	}
	public function getProductsFromOrder($order_id)
	{
		$query = "SELECT * FROM order_product LEFT JOIN products_stock ON order_product.product_stock_id = products_stock.id LEFT JOIN products ON products_stock.product_id = products.id WHERE order_product.order_id = $order_id";
		return $this->db->query($query)->result_array();
	}
	public function createNewCart($user_id)
	{
		$query = "INSERT INTO cart_users (user_id) VALUES ($user_id)";
		$this->db->query($query);
	}

}