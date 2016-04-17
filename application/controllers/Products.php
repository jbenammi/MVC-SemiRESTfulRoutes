<?php 

/**
* 
*/
class Products extends CI_Controller {

	public function index(){

		$this->load->model("Product");
		$get_products = $this->Product->get_all_products();
		$this->load->view('Products', ['product_list' => $get_products]);
	}
	
}

 ?>