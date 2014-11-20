<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstproduk extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
			$this->stencil->theme('charisma');
			$this->stencil->title('MASTER PRODUCT');
			$this->stencil->layout('default');
			$this->stencil->slice('head');
			$this->stencil->slice('navbar');
			$this->stencil->slice('sidebar');
			$this->stencil->slice('script');
		}

		public function index() {
			$this->stencil->paint('mstproduk_view');
		}
		
		//datatable
		public function get_all()
	{
		$this->load->library('datatables'); //load library datatable
	
		$this->datatables->select('MstProductID,MstProductType,MstProductTypeProduct,MstProductVariant,MstProductGroupingSize,MstProductCategory,MstProductName,MstProductUOM,MstProductStatus,MstProductLastUpDate,MstSpecID,MstGrpReportID,MstEmpID')
			 ->from('mstproduct')
			 ->unset_column('MstProductID')
			 ->add_column('Action',
				        	'<a href="'.site_url('mstproduk/edit/$1').'" class="btn btn-xs btn-info">
				        	Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				        	<a href="'.site_url('mstproduk/hapus/$1').'" class="btn btn-xs btn-success">
				        	Hapus</a>  
				        	','MstProductID');
		
		
		echo $this->datatables->generate();
							
	}
		
		public function popup_prod(){
			$this->load->model('m_crud');
			$data['judul'] = 'Produk';
			$data['daftar'] = $this->m_crud->get_crud_all_produk();
			//$this->load->view('master/allp', $data);
			$this->load->view('pages/popup_prod',$data);
			
			} 
			
		public function getp() {
			$data['new_id'] = $this->generate_id();
			$this->load->model('m_crud');
			$data['judul'] = 'Produk';
			$data['daftar'] = $this->m_crud->get_crud_all_sellprice();
			//$this->load->view('master/allp', $data);
			$this->load->view('pages/allp',$data);
		}
		
		public function getquo() {
			$data['new_id'] = $this->generate_id();
			$this->load->model('m_crud');
			$data['judul'] = 'Produk';
			$data['daftar'] = $this->m_crud->get_crud_all_quotdtl();
			//$this->load->view('master/getquoall', $data);
			$this->stencil->paint('getquoall', $data);
			
		}
		function last_id()
		{
		
		$result = $this->db->select_max('MstProductID')->get('mstproduct')->row();

		return $result;
		}

		public function tambah() {
			$data['judul'] = 'Produk';
			$data['new_id'] = $this->generate_id();
			$data['prod_id']=$this->m_crud->get_crud_all_produk();	
           // $data['str'] = $str;
			//$this->load->view('master/mstproduk_tambah', $data);
			$this->stencil->paint('mstproduk_tambah',$data);
		}

		public function proses_tambah_produk() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_produk();
			redirect('mstproduk/index');
		}

		public function edit($id) {
			$data['judul'] = 'Produk';
			$data['daftar'] = $this->m_crud->get_crud_edit_produk($id);
			//$this->load->view('master/mstproduk_edit',$data);
			$this->stencil->paint('mstproduk_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_produk();
			redirect('mstproduk/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_produk($id);
			redirect('mstproduk/index');
		}
		public function generate_id()
		{
		$dt = $this->m_crud->last_id_prod();
		$id = $dt->MstProductID;
		$id++;
		$new_id = 'PR-'.sprintf("%03s", $id);

		return $new_id;
		}
	}
?>
