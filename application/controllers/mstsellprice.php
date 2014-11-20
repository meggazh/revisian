<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstsellprice extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
			$this->stencil->theme('charisma');
			$this->stencil->title('MASTER SELLING PRICE');
			$this->stencil->layout('default');
			$this->stencil->slice('head');
			$this->stencil->slice('navbar');
			$this->stencil->slice('sidebar');
			$this->stencil->slice('script');
		}

		public function index() {
			//$data['judul'] = 'Selling Price';
			//$data['daftar'] = $this->m_crud->get_crud_all_sellprice();
						$data['path_table'] = 'mstsellprice/get_all';
						$this->stencil->data($data);
						$this->stencil->paint('sellprice_list');
		}
		
		
		public function get_all()
	    {
		$this->load->library('datatables'); //load library datatable
	
		$this->datatables->select('MstSellingPriceID,MstProductID,MstSellingPriceUnitPrice,MstSellingPriceExpiredDate,MstSellingPriceStatus,MstEmpID')
			 ->from('mstsellingprice')
			 ->unset_column('mstsellingprice.MstSellingPriceID')
			 ->add_column('Action',
				        	'<a href="'.site_url('mstsellprice/edit/$1').'" class="btn btn-xs btn-info">
				        	Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				        	<a href="'.site_url('mstsellprice/hapus/$1').'" class="btn btn-xs btn-success">
				        	Hapus</a>  
				        	','MstSellingPriceID');
		
		
		echo $this->datatables->generate();
							
	      }
		
		public function tambah() {
			$data['produk']=$this->m_crud->get_crud_all_produk();
			$data['selling']=$this->m_crud->get_crud_all_sellprice();	
			$data['judul'] = 'Selling Price';
			//$this->load->view('master/mstprice_tambah', $data);
			$this->stencil->paint('mstsellprice_tambah',$data);
		}

		public function proses_tambah_sellprice() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_sellprice();
			redirect('mstsellprice/index');
		}
		
		public function get_product()
		{
			$type = $_GET['type'];

			$result = $this->m_crud->get_product($type);

			echo json_encode($result);
		}
		
		
		public function edit($id) {
			$data['judul'] = 'Selling Price';
			$data['daftar'] = $this->m_crud->get_crud_edit_sellprice($id);
			$data['produk']=$this->m_crud->get_crud_all_produk();
			$this->stencil->paint('mstsellprice_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_sellprice();
			redirect('mstsellprice/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_sellprice($id);
			redirect('mstsellprice/index');
		}
	}
?>
