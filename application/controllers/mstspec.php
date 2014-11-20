<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstspec extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
			$this->stencil->theme('charisma');
			$this->stencil->title('MASTER SPECIFICATION');
			$this->stencil->layout('default');
			$this->stencil->slice('head');
			$this->stencil->slice('navbar');
			$this->stencil->slice('sidebar');
			$this->stencil->slice('script');
		}

		public function index() {
			//$data['judul'] = 'Spesification';
			//$data['daftar'] = $this->m_crud->get_crud_all_spec();
			//$this->stencil->paint('mstspec_view',$data);
							$data['path_table'] = 'mstspec/get_all';
							$this->stencil->data($data);
							$this->stencil->paint('spec_list');	
		}
		
		//datatable
		public function get_all()
	{
		$this->load->library('datatables'); //load library datatable
	
		$this->datatables->select('MstSpecID,MstSpecDesc,MstSpecPenggerak,MstSpecBase,MstSpecCrossMember,MstSpecWall,MstSpecSideDoor,MstSpecWing,MstSpecInnerRoof,MstSpecSideGuard,MstSpecBackBumper,MstSpecLamp,MstSpecPainting,MstSpecBackDoor,MstSpecRearDoor,MstSpecTangga,MstSpecLastUpDate,MstEmpID')
			 ->from('mstspec')
			 ->unset_column('mstspec.MstSpecID')
			 ->add_column('Action',
				        	'<a href="'.site_url('mstspec/edit/$1').'" class="btn btn-xs btn-info">
				        	Edit</a>
				        	<a href="'.site_url('mstspec/hapus/$1').'" class="btn btn-xs btn-success">
				        	Hapus</a>  
				        	','MstSpecID');
		echo $this->datatables->generate();
							
	}
		
		public function spec() {
			$this->load->model('m_crud');
			$data['judul'] = 'Produk';
			$data['daftar'] = $this->m_crud->get_crud_all_spec();
			//$this->load->view('master/allp', $data);
			$this->load->view('pages/spec',$data);
		}

		public function tambah() {
			$data['judul'] = 'Spesification';
			//$this->load->view('master/mstspec_tambah', $data);
			$this->stencil->paint('mstspec_tambah',$data);
			
		}

		public function proses_tambah_spec() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_spec();
			redirect('mstspec/index');
		}

		public function edit($id) {
			$data['judul'] = 'Spesification';
			$data['daftar'] = $this->m_crud->get_crud_edit_spec($id);
			//$this->load->view('master/mstspec_edit',$data);
			$this->stencil->paint('mstspec_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_spec();
			redirect('mstspec/index');
		}
		

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_spec($id);
			redirect('mstspec/index');
		}
	}
?>
