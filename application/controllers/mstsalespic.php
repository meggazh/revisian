<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstsalespic extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
			$this->stencil->theme('charisma');
			$this->stencil->title('MASTER SALES PIC');
			$this->stencil->layout('default');
			$this->stencil->slice('head');
			$this->stencil->slice('navbar');
			$this->stencil->slice('sidebar');
			$this->stencil->slice('script');
		}

		public function index() {
			//$data['judul'] = 'Sales PIC';
			$data['daftar'] = $this->m_crud->get_crud_all_salespic();
			//$this->load->view('master/mstsalespic_view', $data);
			//$this->stencil->paint('mstsalespic_view',$data);
						$data['path_table'] = 'mstsalespic/get_all';
						$this->stencil->data($data);
						$this->stencil->paint('pic_list');
		}
        
		public function get_all()
	    {
		$this->load->library('datatables'); //load library datatable
	
		$this->datatables->select('MstSalesPICID,MstSalesPICName,MstSalesPICPICEmail1,MstSalesPICPICEmail2,MstSalesPICPICEmail3,MstEmpID')
			 ->from('mstsalespic')
			 ->add_column('Action',
				        	'<a href="'.site_url('mstsalespic/edit/$1').'" class="btn btn-xs btn-info">
				        	Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				        	<a href="'.site_url('mstsalespic/hapus/$1').'" class="btn btn-xs btn-success">
				        	Hapus</a>  
				        	','MstSalesPICID');
		
		
		echo $this->datatables->generate();
							
	      }
		  
		  
		public function tambah() {
			$data['judul'] = 'Sales PIC';
			//$this->load->view('master/mstsalespic_tambah', $data);
			$this->stencil->paint('mstsalespic_tambah',$data);
		}

		public function proses_tambah_salespic() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_salespic();
			redirect('mstsalespic/index');
		}

		public function edit($id) {
			$data['judul'] = 'Sales PIC';
			$data['daftar'] = $this->m_crud->get_crud_edit_salespic($id);
			//$this->load->view('master/mstsalespic_edit',$data);
			$this->stencil->paint('mstsalespic_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_salespic();
			redirect('mstsalespic/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_salespic($id);
			redirect('mstsalespic/index');
		}
	}
?>
