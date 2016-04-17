<?php 


class Product extends CI_Model {

	// This function retrieves all columns from the database needed to be displayed on the products page or for processing other requests
	public function get_all_products(){
		$query = "SELECT products.name, products.description, products.price, products.id FROM products";
		return $this->db->query($query)->result_array();
	}
	public function add_product($product_info){
		$query = "INSERT INTO products(name, description, price, created_on, updated_on) VALUES(?, ?, ?, now(), now());";
		$info = [$product_info['name'], $product_info['description'], $product_info['price']];
		$this->db->query($query, $info);
	}
	public function get_product($id) {
		$query = "SELECT products.name, products.description, products.price, products.id FROM products WHERE id = '".$id."'";
		return $this->db->query($query)->row_array();
	}
	public function update_product($product_info){
		$query = "UPDATE products SET name=?, description=?, price=?, updated_on=now() WHERE id = ?;";
		$info = [$product_info['name'], $product_info['description'], $product_info['price'], $product_info['id']];
		$this->db->query($query, $info);
	}
	public function delete_product($id){
		$query = "DELETE FROM products WHERE id = '".$id."';";
		$this->db->query($query);
	}

}

 ?>