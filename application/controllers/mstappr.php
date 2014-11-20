<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstappr extends CI_Controller {
		public function __construct() {
			parent::__construct();
		$this->load->model('m_crud');	
		$this->stencil->theme('charisma');
		$this->stencil->slice('head');
		$this->stencil->slice('navbar');
		$this->stencil->slice('sidebar');
		$this->stencil->slice('script');
       $this->load->helper('url');
	   $this->load->library('form_validation');
		$this->stencil->layout('default');
		$this->stencil->title('Approval');
	
		}
	

		public function index($id=NULL) {
				        $data['path_table'] = 'mstappr/get_all';
						$this->stencil->data($data);
						$this->stencil->paint('appr_list');
			
		}
		
		
		public function get_all()
	    {
		$this->load->library('datatables'); //load library datatable
	
		$this->datatables->select('MstApprID,MstApprName,MstAppr1,MstApprTitle1,MstAppr2,MstApprTitle2,MstAppr3,MstApprTitle3,MstAppr4,MstApprTitle4,MstEmpID')
			 ->from('mstappr')
			 ->add_column('Action',
				        	'<a href="'.site_url('mstappr/edit/$1').'" class="btn btn-xs btn-info">
				        	Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				        	<a href="'.site_url('mstappr/hapus/$1').'" class="btn btn-xs btn-success">
				        	Hapus</a>  
				        	','MstApprID');
		
		
		echo $this->datatables->generate();
							
	      }
		
		
		function simpan_val() {
		
			//validation
		$this->form_validation->set_rules('MstApprID', 'MstApprID', 'required|trim|xss_clean|max_length[45]');			
		$this->form_validation->set_rules('MstAppr1', 'MstAppr1', 'required|trim|xss_clean|max_length[45]');			
		$this->form_validation->set_rules('MstApprTitle1', 'MstApprTitle1', 'required|trim|xss_clean|max_length[45]');			
		$this->form_validation->set_rules('MstAppr2', 'MstAppr2', 'required|trim|xss_clean|max_length[45]');			
		$this->form_validation->set_rules('MstApprTitle2', 'MstApprTitle2', 'required|trim|xss_clean|max_length[45]');
		$this->form_validation->set_rules('MstAppr3', 'MstAppr3', 'required|trim|xss_clean|max_length[45]');			
		$this->form_validation->set_rules('MstApprTitle3', 'MstApprTitle3', 'required|trim|xss_clean|max_length[45]');
		$this->form_validation->set_rules('MstAppr4', 'MstAppr4', 'required|trim|xss_clean|max_length[45]');			
		$this->form_validation->set_rules('MstApprTitle4', 'MstApprTitle4', 'required|trim|xss_clean|max_length[45]');
		$this->form_validation->set_rules('MstAppr4', 'MstAppr4', 'required|trim|xss_clean|max_length[45]');
		$this->form_validation->set_rules('MstEmpID', 'MstEmpID', 'required|trim|xss_clean|max_length[45]');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
							{
								$this->stencil->paint('mstappr_tambah');
							}
								else // passed validation proceed to post success logic
								{
									// build array for the model
									
									$form_data = array(
													'MstApprID' => set_value('MstApprID'),
													'MstAppr1' => set_value('MstAppr1'),
													'MstApprTitle1' => set_value('MstApprTitle1'),
													'MstAppr2' => set_value('MstAppr2'),
													'MstApprTitle2' => set_value('MstApprTitle2'),
													'MstAppr3' => set_value('MstAppr3'),
													'MstApprTitle3' => set_value('MstApprTitle3'),
													'MstAppr4' => set_value('MstAppr4'),
													'MstApprTitle4' => set_value('MstApprTitle4'),
													'MstEmpID' => set_value('MstEmpID')
												);									
					
			// run insert model to write data to db
		
			if ($this->m_crud->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('mstappr/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
		}
		
      function success()
	{       
			$data['daftar']=$this->m_crud->get_crud_all();
			$this->stencil->paint('mstappr_tambah',$data);
	}
	
        
		//Menampilkan Form Tambah
		public function tambah() {
			$data['judul'] = 'Approval';
			$this->stencil->paint('mstappr_tambah',$data);
		}

		public function proses_tambah_appr() {
			$this->load->model('m_crud',TRUE);
			$this->m_crud->tambah_appr();
			redirect('mstappr/index');
		}

		public function edit($id) {
			$data['judul'] = 'Approval';
			$data['daftar'] = $this->m_crud->get_crud_edit_appr($id);
			$this->stencil->paint('mstappr_edit',$data);
		
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_appr();
			redirect('mstappr/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_appr($id);
			$this->session->set_flashdata('msg','Image Deletion Successful!!');
			redirect('mstappr/index');
		} 
		
		
	}
?>
