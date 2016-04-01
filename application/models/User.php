<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function addUser($newUser)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, birthday, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
		$values = array($newUser['first_name'], $newUser['last_name'], $newUser['email'], $newUser['password'], $newUser['birthday']);
		$this->db->query($query, $values);
		$newUserID = $this->db->insert_id();
		$query = "INSERT INTO cart_users (user_id) VALUES ($newUserID)";
		$this->db->query($query);
	}
	public function loginUser($user)
	{
		$query = "SELECT * FROM users WHERE email = ? AND password = ?";
		$values =  array($user['email'], $user['password']);
		return $this->db->query($query, $values)->row_array();
	}
	public function getUserInfo($userID)
	{
		$query = "SELECT * FROM users WHERE users.id = ?";
		$values = $userID;
		return $this->db->query($query,$values)->row_array();
	}
	public function loginAdmin($admin)
	{
		$query = "SELECT * FROM admin WHERE email = ? AND password = ?";
		$values = array($admin['email'], $admin['password']);
		return $this->db->query($query,$values)->row_array();
	}
	public function add_shipping_info($shippingInfo,$user_id)
	{
		$query = "INSERT INTO addresses (street_number_name, apt_num, city, state, zip_code, user_id, type, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, 'shipping', NOW(), NOW())";
		$values = array($shippingInfo['address'], $shippingInfo['address2'], $shippingInfo['city'], $shippingInfo['state'], $shippingInfo['zipcode'], $user_id);
		var_dump($values);
		var_dump($query);
		$this->db->query($query, $values);
	}
	public function add_billing_info($billingInfo,$user_id)
	{
		$query = "INSERT INTO addresses (street_number_name, apt_num, city, state, zip_code, user_id, type, created_at, updated_at) VALUES (?, ?, ?, ?, ?,  $user_id, 'billing', NOW(), NOW())";
		$values = array($billingInfo['address'], $billingInfo['address2'], $billingInfo['city'], $billingInfo['state'], $billingInfo['zipcode']);
		$this->db->query($query, $values);
	}
	public function add_order($order_info)
	{
		$query = "INSERT INTO orders (cart_id, user_id, subtotal, billing_address_id, shipping_address_id, created_at, updated_at) VALUES (?, ?, ?, ?, ?, NOW(), NOW())";
		$values = array($order_info['cart_id'], $order_info['id'], $order_info['subtotal'], $order_info['billingID'], $order_info['billingID']);
		$this->db->query($query,$values);
	}
	public function getBillingAddress($user_id)
	{
		$query = "SELECT * FROM addresses WHERE user_id = $user_id AND type = 'billing' ORDER BY created_at DESC LIMIT 1";
		return $this->db->query($query)->row_array();
	}
	public function getShippingAddress($user_id)
	{
		$query = "SELECT * FROM addresses WHERE user_id = $user_id AND type = 'shipping' ORDER BY created_at DESC LIMIT 1";
		return $this->db->query($query)->row_array();
	}
	public function getOrderInfo($order_id)
	{
		$query = "SELECT * FROM orders WHERE id = $order_id";
		return $this->db->query($query)->row_array();

	}
	public function getOrderInfoFromUser($user_id)
	{
		$query = "SELECT * FROM orders WHERE user_id = $user_id";
	}
	public function getProductsStockFromOrder($order_id)
	{
		$query = "SELECT products_stock.id FROM products_stock LEFT JOIN order_product ON products_stock.id = order_product.product_stock_id WHERE order_product.order_id = $order_id";
		return $this->db->query($query)->row_array();
	}
	public function getProductInfoFromProductStock($product_stock_id)
	{
		$query = "SELECT * FROM products LEFT JOIN products_";
	}
	public function getProductInfoFromOrder($order_id)
	{
		$query = "SELECT * FROM order_product LEFT JOIN products_stock ON order_product.product_stock_id = products_stock.id LEFT JOIN products ON products_stock.product_id = products.id WHERE order_product.order_id = $order_id";
		return $this->db->query($query)->result_array();
	}




}