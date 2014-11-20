<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstprice extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
			$this->stencil->theme('charisma');
			$this->stencil->title('MASTER PRICE');
			$this->stencil->layout('default');
			$this->stencil->slice('head');
			$this->stencil->slice('navbar');
			$this->stencil->slice('sidebar');
			$this->stencil->slice('script');
		}

		public function index() {
			$data['judul'] = 'Price';
			$data['daftar'] = $this->m_crud->get_crud_all_price();
			//$this->load->view('master/mstprice_view', $data);
			$this->stencil->paint('mstprice_view',$data);
		}
	
		
		public function tambah() {
			$data['judul'] = 'Price';
			$data['produk']=$this->m_crud->get_crud_all_produk();
			//$this->load->view('master/mstprice_tambah', $data);
			$this->stencil->paint('mstprice_tambah',$data);
		}

		public function proses_tambah_price() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_price();
			redirect('mstprice/index');
		}

		public function edit($id) {
			$data['judul'] = 'Price';
			$data['daftar'] = $this->m_crud->get_crud_edit_price($id);
			//$this->load->view('master/mstprice_edit',$data);
			$this->stencil->paint('mstprice_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_pay();
			redirect('mstprice/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_price($id);
			redirect('mstprice/index');
		}
	}
?>
