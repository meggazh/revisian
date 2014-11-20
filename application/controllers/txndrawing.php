<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Txndrawing extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
			$this->stencil->theme('charisma');
			$this->stencil->title('TxnDraw');
			$this->stencil->layout('default');
			$this->stencil->slice('head');
			$this->stencil->slice('navbar');
			$this->stencil->slice('sidebar');
			$this->stencil->slice('script');
			
		}	
		
		public function index() {	
				//$data['judul'] = 'Drawing';
				//$this->load->model('m_crud');
				//$data['daftar'] = $this->m_crud->get_crud_all_drawing();
				$this->stencil->paint('drawing_list');
			 
		}
		public function get_all()
	    {
		$this->load->library('datatables'); //load library datatable
	
		$this->datatables->select('TxnDrawID,TxnDrawNo,TxnDrawDate,TxnDrawStatus,TxnDrawTitle,MstEmpID')
			 ->from('txndraw')
			 ->unset_column('TxnDrawID')
			 ->add_column('Action',
				        	'<a href="'.site_url('txndrawing/edit/$1').'" class="btn btn-xs btn-info">
				        	Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				        	<a href="'.site_url('txndrawing/hapus/$1').'" class="btn btn-xs btn-success">
				        	Hapus</a>  
				        	','TxnDrawID');
		
		
		echo $this->datatables->generate();
							
	      }
			
		function last_id()
	{
		
		$result = $this->db->select_max('TxnDrawID')->get('txndraw')->row();

		return $result;
	}
		
		function adddrawing() {
			$this->load->model('m_crud');
			$data['judul'] = 'Drawing';
			$data['daftar'] = $this->m_crud->get_crud_all_drawing(); // masuk ke controllernya ambil data dari m_crud
			$this->stencil->paint('adddrawing', $data);
			
		}
		
		public function save_form()
	{
		$result = $this->m_crud->save_form();
	
	}

		
		public function tambah() {
			$data['judul'] = 'Drawing';
			$this->stencil->paint('adddrawing', $data);
		}

		public function proses_tambah_draw() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_draw();
			redirect('txndrawing/index');
		}

		public function edit($id) { 
			$data['judul'] = 'Drawing';
			$data['daftar'] = $this->m_crud->get_crud_edit_draw($id);
			$this->stencil->paint('txndrawing_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_draw();
			redirect('txndrawing/index');
		}
		
		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_draw($id);
			redirect('txndrawing/index');
		}
		
	}
?>
