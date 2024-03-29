<?php
class Site extends CI_Controller {
	public function index($id = 1)
	{
		$data['id_kategori'] = $id;
		
		$this->load->view('templates/header');
		$this->load->view('site/index',$data);
		$this->load->view('templates/footer');
		$this->load->view('site/index_vue',$data);
	}
	public function create($id_kategori)
	{
		$data['id_kategori'] = $id_kategori;
		$this->load->view('templates/header');
		$this->load->view('site/_form');
		$this->load->view('templates/footer');
		$this->load->view('site/create_vue',$data);
	}
	public function data_pilihan()
	{
		$this->load->view('templates/header');
		$this->load->view('site/data_urusan');
		$this->load->view('templates/footer');	
		$this->load->view('site/urusan_pilihan_vue');
	}
	public function data_wajib()
	{
		$this->load->view('templates/header');
		$this->load->view('site/data_urusan_wajib');
		$this->load->view('templates/footer');	
		$this->load->view('site/urusan_wajib_vue');
	}
}
