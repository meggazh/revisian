<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstcus extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
			$this->stencil->theme('charisma');
			$this->stencil->title('MASTER CUSTOMER');
			$this->stencil->layout('default');
			$this->stencil->slice('head');
			$this->stencil->slice('navbar');
			$this->stencil->slice('sidebar');
			$this->stencil->slice('script');
		}

		public function index() {
	
			$data['new_id'] = $this->generate_id();
			//$data['judul'] = 'Customer';
			$data['bayar'] = $this->m_crud->get_crud_all_pay();
			//$data['daftar'] = $this->m_crud->get_crud_all_cus();
						$data['path_table'] = 'mstcus/get_all';
						$this->stencil->data($data);
						$this->stencil->paint('cus_list');
			//$this->load->view('master/mstcust_view', $data);
			//$this->stencil->paint('mstcust_view',$data);
		}
		
		//datatable
		public function get_all()
	{
		$this->load->library('datatables'); //load library datatable
	
		$this->datatables->select('MstCustID,MstCustNo,MstCustIDName,MstCustIDAbbr,MstCustIDAddress1,MstCustIDAddress2,MstCustIDAddress3,MstCustIDPIC1,MstCustIDPIC2,MstCustIDPIC3,MstCustIDNoTlp,MstCustIDNofax,MstCustIDNpwp,MstCustNppkp,MstCustIDPICEmail1,MstCustIDPICEmail2,MstCustIDPICEmail3,MstCustWebsite,MstCustLastUpdate,MstEmpID,MstPayID')
			 ->from('mstcust')
			 ->add_column('Action',
				        	'<a href="'.site_url('mstcus/edit/$1').'" class="btn btn-xs btn-info">
				        	Edit</a>
				        	<a href="'.site_url('mstcus/hapus/$1').'" class="btn btn-xs btn-success">
				        	Hapus</a>  
				        	','MstCustID');
		echo $this->datatables->generate();
							
	}
		
		
		// menampilkan ID
		function last_id()
		{
		
		$result = $this->db->select_max('MstCustID')->get('mstcust')->row();

		return $result;
		}

		public function tambah() {
			$data['new_id'] = $this->generate_id();
			$data['judul'] = 'Customer';
			$data['pay'] = $this->m_crud->get_crud_all_pay();
			//$data['str'] = $this->m_crud->new_id('mstcust');
			//$this->load->view('master/mstcust_tambah', $data);
			$this->stencil->paint('mstcust_tambah',$data);
		}
		
		public function popup_cus(){
			$this->load->model('m_crud');
			$data['judul'] = 'Cus';
			$data['daftar'] = $this->m_crud->get_crud_all_cus();
			//$this->load->view('master/allp', $data);
			$this->load->view('pages/popup_cus',$data);
			
			}

		public function cust() {
			$this->load->model('m_crud');
			$data['judul'] = 'Cust';
			$data['daftar'] = $this->m_crud->get_crud_all_cus();
			//$this->load->view('master/allp', $data);
			$this->load->view('pages/cust',$data);
		}

		public function proses_tambah_cus() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_cus();
			redirect('mstcus/index');
		}

		public function edit($id) {
			$data['new_id'] = $this->generate_id();
			$data['judul'] = 'Customer';
			$data['daftar'] = $this->m_crud->get_crud_edit_cus($id);
			$data['pay'] = $this->m_crud->get_crud_all_pay();
			//$this->load->view('master/mstcust_edit',$data);
			$this->stencil->paint('mstcust_edit',$data);
			
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_cus();
			redirect('mstcus/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_cus($id);
			redirect('mstcus/index');
		}
		public function generate_id()
		{
		$dt = $this->m_crud->last_id_cus();
		$id = $dt->MstCustID;
		$id++;
		$new_id = 'CS-'.sprintf("%03s", $id);

		return $new_id;
		}
	}
?>
