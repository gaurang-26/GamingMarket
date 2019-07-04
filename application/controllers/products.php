<?php
class Products extends CI_Controller{
	//index function is by dfault setup and used to load the main page any other functions can be created here adn will be used by going through the products page.
	
	
	public function index(){
		//Get All Products
		$data['products'] = $this->Products_model->get_products();
		
		//Load View
		$data['main_content'] = 'products';
		$this->load->view('layouts/main', $data);
	}
	
	public function details($id){
		//Get Product Details
		$data['product'] = $this->Products_model->get_product_details($id);
		
		//Load View
		$data['main_content'] = 'details';
		$this->load->view('layouts/main', $data);
	}
}