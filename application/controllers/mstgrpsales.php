<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstgrpsales extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
			$this->stencil->theme('charisma');
			$this->stencil->title('MASTER GROUP SALES');
			$this->stencil->layout('default');
			$this->stencil->slice('head');
			$this->stencil->slice('navbar');
			$this->stencil->slice('sidebar');
			$this->stencil->slice('script');
		}

		public function index() {
			//$data['judul'] = 'Group Sales';
			//$data['daftar'] = $this->m_crud->get_crud_all_grpsales();
			//$this->load->view('master/mstgrpsales_view', $data);
			//$this->stencil->paint('mstgrpsales_view',$data);
			            $data['path_table'] = 'mstgrpsales/get_all';
						$this->stencil->data($data);
						$this->stencil->paint('grpsales_list');
		}
		
		
		public function get_all()
	    {
		$this->load->library('datatables'); //load library datatable
	
		$this->datatables->select('MstGRPSalesID,MstGRPSalesDesc,MstGRPSalesAbbr,MstEmpID')
			 ->from('mstgrpsales')
			 ->add_column('Action',
				        	'<a href="'.site_url('mstgrpsales/edit/$1').'" class="btn btn-xs btn-info">
				        	Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				        	<a href="'.site_url('mstgrpsales/hapus/$1').'" class="btn btn-xs btn-success">
				        	Hapus</a>  
				        	','MstGRPSalesID');
		
		
		echo $this->datatables->generate();
							
	      }
		  
		  
		  
			public function grps() {
			$data['judul'] = 'Group Sales';
			$data['daftar'] = $this->m_crud->get_crud_all_grpsales();
			//$this->load->view('master/mstgrpsales_view', $data);
			$this->load->view('pages/groupsales',$data);
		}
		
		public function tambah() {
			$data['judul'] = 'Group Sales';
			//$this->load->view('master/mstgrpsales_tambah', $data);
			$this->stencil->paint('mstgrpsales_tambah',$data);
		}

		public function proses_tambah_grpsales() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_grpsales();
			redirect('mstgrpsales/index');
		}

		public function edit($id) {
			$data['judul'] = 'Group Sales';
			$data['daftar'] = $this->m_crud->get_crud_edit_grpsales($id);
			//$this->load->view('master/mstgrpsales_edit',$data);
			$this->stencil->paint('mstgrpsales_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_grpsales();
			redirect('mstgrpsales/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_grpsales($id);
			redirect('mstgrpsales/index');
		}
	}
?>
