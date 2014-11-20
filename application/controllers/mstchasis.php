<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Mstchasis extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->model('m_crud');
			$this->stencil->theme('charisma');
			$this->stencil->title('Master Chasis');
			$this->stencil->layout('default');
			$this->stencil->slice('head');
			$this->stencil->slice('navbar');
			$this->stencil->slice('sidebar');
			$this->stencil->slice('script');
			
			
		}

		public function index($id=NULL) {
			$data['new_id'] = $this->generate_id();
			//$data['daftar'] = $this->m_crud->get_crud_all_chasis();
						$data['path_table'] = 'mstchasis/get_all';
						$this->stencil->data($data);
						$this->stencil->paint('chas_list');
		}
		
		public function get_all()
	    {
		$this->load->library('datatables'); //load library datatable
	
		$this->datatables->select('MstChasID,MstChasNo,MStChasMaker,MStChasModel,MStChasType,MstEmpID')
			 ->from('mstchas')
			  ->add_column('Action',
				        	'<a href="'.site_url('mstchasis/edit/$1').'" class="btn btn-xs btn-info">
				        	Edit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
				        	<a href="'.site_url('mstchasis/hapus/$1').'" class="btn btn-xs btn-success">
				        	Hapus</a>  
				        	','MstChasID');
	   
		
		
		echo $this->datatables->generate();
							
	      }
		
		
		function last_id()
	{
		
		$result = $this->db->select_max('MstChasID')->get('mstchas')->row();

		return $result;
	}

		public function tambah() {
			$data['new_id'] = $this->generate_id();
			$data['judul'] = 'Chasis';
			$data['str'] = $this->m_crud->last_id('mstchas');
			//$this->load->view('master/mstchasis_tambah', $data);
			$this->stencil->paint('mstchasis_tambah',$data);
		}

		public function proses_tambah_chasis() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->tambah_chasis();
			redirect('mstchasis/index');
		}

		public function edit($id) {
			$data['judul'] = 'Chasis';
			$data['daftar'] = $this->m_crud->get_crud_edit_chasis($id);
			//$this->load->view('master/mstchasis_edit',$data);
			$this->stencil->paint('mstchasis_edit',$data);
			
		}

		public function proses_edit() {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->edit_chasis();
			redirect('mstchasis/index');
		}

		public function hapus($id) {
			$this->load->model('m_crud','',TRUE);
			$this->m_crud->hapus_chasis($id);
			redirect('mstchasis/index');
		}
		public function generate_id()
		{
		$dt = $this->m_crud->last_id();
		$id = $dt->MstChasID;
		$id++;
		$new_id = 'CH-'.sprintf("%03s", $id);

		return $new_id;
		}
		
		//Fungsi cari form
		function search($search_terms = '')
    {
        // If the form has been submitted, rewrite the URL so that the search
        // terms can be passed as a parameter to the action. Note that there
        // are some issues with certain characters here.
        if ($this->input->post('q'))
        {
            redirect('/mstchasis/search/' . $this->input->post('q'));
        }
 
        if ($search_terms)
					{
						// Load the model and perform the search
						$this->load->model('m_crud');
						$results = $this->m_crud->search($search_terms);
					}
			 
					// Render the view, passing it the necessary data
					$this->load->view('mstchasis_view', array(
						'search_terms' => $search_terms,
						'results' => @$results
					));
				}
		
		
		
}
?>
