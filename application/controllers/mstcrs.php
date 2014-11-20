<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mstcrs extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('m_crud');
			$this->stencil->theme('charisma');
			$this->stencil->title('MASTER CURRENCY');
			$this->stencil->layout('default');
			$this->stencil->slice('head');
			$this->stencil->slice('navbar');
			$this->stencil->slice('sidebar');
			$this->stencil->slice('script');
		$this->load->library('form_validation');
	}

	public function index() {
		$this->load->model('m_crud');
		//$data['daftar'] = $this->m_crud->get_crud_all_crs();
					//Get Data
						$data['path_table'] = 'mstcrs/get_all';
						$this->stencil->data($data);
						$this->stencil->paint('crs_list');
	}
	
	public function get_all()
	    {
		$this->load->library('datatables'); //load library datatable
	
		$this->datatables->select('MstCrsID,MstCrsName,MstCrsSym,MstEmpID')
			 ->from('mstcrs')
			->add_column('Action',
				        	'<a href="'.site_url('mstcrs/edit/$1').'" class="btn btn-xs btn-info">
				        	Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				        	<a href="'.site_url('mstcrs/hapus/$1').'" class="btn btn-xs btn-success">
				        	Hapus</a>  
				        	','MstCrsID');
		echo $this->datatables->generate();
	      }
	

	public function tambah() 
	{
		$data['judul'] = 'Currency';
		//$this->load->view('master/mstproduk_tambah', $data);
		$this->stencil->paint('mstcrs_tambah',$data);
	}

	public function proses_tambah_crs() {
		$this->load->model('m_crud','',TRUE);
		$this->m_crud->tambah_crs();
		redirect('mstcrs/index');
	}

	public function edit($id) {
		$data['judul'] = 'Currency';
		$data['daftar'] = $this->m_crud->get_crud_edit_crs($id);
		//$this->load->view('master/mstcrs_edit',$data);
		$this->stencil->paint('mstcrs_edit',$data);
	}

	public function proses_edit() {
		$this->load->model('m_crud','',TRUE);
		$this->m_crud->edit_crs();
		redirect('mstcrs/index');
	}

	public function hapus($id) {
		$this->load->model('m_crud','',TRUE);
		$this->m_crud->hapus_crs($id);
		redirect('mstcrs/index');
		
	}
	
}
?>
