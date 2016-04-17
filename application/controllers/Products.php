<?php 


class Products extends CI_Controller {

	public function index(){

		$this->load->model("Product");
		$get_products = $this->Product->get_all_products();
		$this->load->view('Products_page', ['product_list' => $get_products]);
	}

	public function new_product(){
		$this->load->view('Product_new');
	}

	public function create(){
		$errors = [];
		if(empty($this->input->post('price'))) {
			$errors['noprice'] = 'Price cannot be blank.';
		}
		elseif(!is_numeric($this->input->post('price'))) {
			$errors['numeric'] = "Price must be entered with numbers only.";
		}
		if(count($errors) > 0) {
			$this->load->view('Product_new', ['errors' => $errors]);
		}
		else {
		$product_info['name'] = $this->input->post('name');
		$product_info['description'] = $this->input->post('description');
		$product_info['price'] = $this->input->post('price');
		$this->load->model("Product");
		$product_add = $this->Product->add_product($product_info);
		redirect($uri = base_url());
		}
	}

	public function show($id){
		$this->load->model('Product');
		$product_info = $this->Product->get_product($id);
		$this->load->view('Product_view', ['product_info' => $product_info]);
	}
	public function edit($id) {

		$this->load->model('Product');
		$product_info = $this->Product->get_product($id);
		$this->load->view('Product_edit', ['product_info' => $product_info]);		
	}
	public function update() {
		$errors = [];
		$product_info['name'] = $this->input->post('name');
		$product_info['description'] = $this->input->post('description');
		$product_info['price'] = $this->input->post('price');
		$product_info['id'] = $this->input->post('id');
		if(empty($this->input->post('price'))) {
			$errors['noprice'] = 'Price cannot be blank.';
		}
		elseif(!is_numeric($this->input->post('price'))) {
			$errors['numeric'] = "Price must be entered with numbers only.";
		}
		if(count($errors) > 0) {
			$this->load->view('Product_edit', ['errors' => $errors, 'product_info' => $product_info]);
		}
		else {
		$this->load->model("Product");
		$product_update = $this->Product->update_product($product_info);
		redirect($uri = base_url());
		}
	}
	public function destroy($id) {
		$this->load->model('Product');
		$this->Product->delete_product($id);
		redirect($uri = base_url());
	}
}

?>