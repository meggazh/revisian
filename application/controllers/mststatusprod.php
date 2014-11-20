<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mststatusprod extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
			$this->stencil->theme('charisma');
			$this->stencil->title('MASTER STATUS PRODUCT');
			$this->stencil->layout('default');
			$this->stencil->slice('head');
			$this->stencil->slice('navbar');
			$this->stencil->slice('sidebar');
			$this->stencil->slice('script');
		}

		public function index() {
	
						$data['path_table'] = 'mststatusprod/get_all';
						$this->stencil->data($data);
						$this->stencil->paint('statuspod_list');
		}
		public function get_all()
	    {
		$this->load->library('datatables'); //load library datatable
	
		$this->datatables->select('MstStatusProdID,MstStatusProdGroup,MstStatusProdSubGroup,MstStatusProdJob')
			 ->from('mststatusprod')
			 ->add_column('Action',
				        	'<a href="'.site_url('mststatusprod/edit/$1').'" class="btn btn-xs btn-info">
				        	Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				        	<a href="'.site_url('mststatusprod/hapus/$1').'" class="btn btn-xs btn-success">
				        	Hapus</a>  
				        	','MstStatusProdID');
		
		
		echo $this->datatables->generate();
							
	      }

		public function tambah() {
			$data['judul'] = 'Status produksi';
			//$this->load->view('master/mststatusprod_tambah', $data);
			$this->stencil->paint('mststatusprod_tambah', $data);
		}

		public function proses_tambah_sts() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_sts();
			redirect('mststatusprod/index');
		}

		public function edit($id) {
			$data['judul'] = 'Status produksi';
			$data['daftar'] = $this->m_crud->get_crud_edit_sts($id);
			//$this->load->view('master/mststatusprod_edit',$data);
			$this->stencil->paint('mststatusprod_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_sts();
			redirect('mststatusprod/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_sts($id);
			redirect('mststatusprod/index');
		}
	}
?>
