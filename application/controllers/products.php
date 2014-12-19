<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index()
	{
		$products = new Product();
		$all_products = $products->get()->all_to_array();

		$this->load->view('index', array('products' => $all_products));
	}

	public function create()
	{
		$product = new Product();

		$product->name = $this->input->post('name');
		$product->price = $this->input->post('price');
		$product->description = $this->input->post('description');

		$product->save();

		redirect('/');	
	}

	public function destroy()
	{
		$product = new Product($this->input->post('id'));
		$product->delete();
		redirect('/');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */