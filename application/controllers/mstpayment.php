<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstpayment extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
			$this->stencil->theme('charisma');
			$this->stencil->title('MASTER PAYMENT');
			$this->stencil->layout('default');
			$this->stencil->slice('head');
			$this->stencil->slice('navbar');
			$this->stencil->slice('sidebar');
			$this->stencil->slice('script');
		}

		public function index() {
	
						$data['path_table'] = 'mstpayment/get_all';
						$this->stencil->data($data);
						$this->stencil->paint('pay_list');
		}
		
		
		public function get_all()
	    {
		$this->load->library('datatables'); //load library datatable
	
		$this->datatables->select('MstPayID,MstPaySyarat,MstEmpID')
			 ->from('mstpay')
			 ->unset_column('mstpay.MstPayID')
			 ->add_column('Action',
				        	'<a href="'.site_url('mstpayment/edit/$1').'" class="btn btn-xs btn-info">
				        	Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				        	<a href="'.site_url('mstpayment/hapus/$1').'" class="btn btn-xs btn-success">
				        	Hapus</a>  
				        	','MstPayID')
			 ;
		
		
		echo $this->datatables->generate();
							
	      }

		public function tambah() {
			$data['judul'] = 'Payment';
			//$this->load->view('master/mstpayment_tambah', $data);
			$this->stencil->paint('mstpayment_tambah',$data);
		}

		public function proses_tambah_pay() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_pay();
			redirect('mstpayment/index');
		}

		public function edit($id) {
			$data['judul'] = 'Payment';
			$data['daftar'] = $this->m_crud->get_crud_edit_pay($id);
			//$this->load->view('master/mstpayment_edit',$data);
			$this->stencil->paint('mstpayment_edit',$data);
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_pay();
			redirect('mstpayment/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_pay($id);
			redirect('mstpayment/index');
		}
	}
?>
