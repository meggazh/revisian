<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Mstemployee extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
			$this->stencil->theme('charisma');
			$this->stencil->title('MASTER EMPLOYEE');
			$this->stencil->layout('default');
			$this->stencil->slice('head');
			$this->stencil->slice('navbar');
			$this->stencil->slice('sidebar');
			$this->stencil->slice('script');
		}

		public function index() {
			//$data['judul'] = 'Employee';
			//$data['daftar'] = $this->m_crud->get_crud_all_employee();
			//$this->load->view('master/mstemployee_view', $data); //<--file view
						$data['path_table'] = 'mstemployee/get_all';
						$this->stencil->data($data);
						$this->stencil->paint('employee_list');
			
		}
		public function get_all()
	    {
		$this->load->library('datatables'); //load library datatable
	
		$this->datatables->select('MstEmpID,MstEmpNIK,MstEmpName,MstEmpDiv,MstEmpGender,MstEmpEdu,MstEmpReligi,MstEmpBirdthDate,MstEmpJoinDate,MstEmpNoRek,MstEmpNoKtp,MstEmpNoNpwp,MstEmpNoJamsos,MstEmpAddress,MstEmpPassword,MstEmpLevel,MstEmpLastUpdate')
			 ->from('mstemp')
			 ->add_column('Action',
				        	'<a href="'.site_url('mstemployee/edit/$1').'" class="btn btn-xs btn-info">
				        	Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				        	<a href="'.site_url('mstemployee/hapus/$1').'" class="btn btn-xs btn-success">
				        	Hapus</a>  
				        	','MstEmpID');
		
		
		echo $this->datatables->generate();
							
	      }

		public function tambah() {
			$data['judul'] = 'Employee';
			//$this->load->view('master/mstemployee_tambah', $data);//--file view mstemployee
			$this->stencil->paint('mstemployee_tambah',$data);
			
		}

		public function proses_tambah_employee() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_employee();
			redirect('mstemployee/index');
		}

		public function edit($id) {
			$data['judul'] = 'Employee';
			$data['daftar'] = $this->m_crud->get_crud_edit_employee($id); //--> file modelcrud & fungsi get_crud_edit_employee()
			//$this->load->view('master/mstemployee_edit',$data);  //--> file 'mstemployee_edit' view
			$this->stencil->paint('mstemployee_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);  //file-->modelcrud & fungsi 'edit_employee()'
			$this->m_crud->edit_employee(); //fungsi 'edit_employee()'
			redirect('mstemployee/index'); //kehalaman  index
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE); //-->file model crude
			$this->m_crud->hapus_employee($id); // fungsi 'hapus_employee()'
			redirect('mstemployee/index'); //kehalaman index
		}
		
	}
?>