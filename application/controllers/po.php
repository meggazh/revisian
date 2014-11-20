<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Po extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->stencil->theme('charisma');
		$this->stencil->slice('head');
		$this->stencil->slice('navbar');
		$this->stencil->slice('sidebar');
		$this->stencil->slice('script');

		$this->stencil->layout('default');
		$this->stencil->title('po');

		$this->load->model('m_po');
	}

	public function index()
	{
		$data['path_table'] = 'quotation/get_alls';
		$this->stencil->data($data);
		$this->stencil->paint('po_list');
	}
	
	
	
	public function pook()
	{
		$data['path_table'] = 'po/get_all';
		$this->stencil->data($data);
		$this->stencil->paint('pook');
	}

	public function get_all()
	{
		$this->load->library('datatables');
		$this->datatables->select('TxnPOHdrID,TxnPoHdrNo,TxnPoHdrDate,TxnPoHdrTermTxt,TxnPoHdrDiscount,TxnQuotHdrID,MstSalesPICID,MstApprID,MstEmpID,MstGRPSalesID')
						 ->from('txnpohdr')
						 ->join('txnquothdr','txnquothdr.TxnQuotHdrID=txnpohdr.TxnQuotHdrID','LEFT')
						 ->edit_column('TxnPOHdrID','<input type="checkbox" class="checkbox-quo" name="id[]" value="$1">','TxnPOHdrID')
						 ->edit_column('TxnQuotHdrTotal','Rp. $1','rupiah(TxnQuotHdrTotal)')
						 ->edit_column('MstApprID','$1','check_approve(MstApprID)')
						 ->add_column('Action',
				        	'<a href="'.site_url('quotation/view/$1').'" class="btn btn-xs btn-info">
				        	Detail</a>
				        	<a href="'.site_url('quotation/edit/$1').'" class="btn btn-xs btn-success">
				        	Edit</a>  
				        	<button class="btn btn-xs btn-danger btn-del" id=$1">
				        	Delete','TxnQuotHdrID');

		echo $this->datatables->generate();


	}

	public function create()
	{
		$data['no'] = $this->m_po->get_maxid();

		$this->stencil->data($data);
		

		$this->stencil->paint('po_form');	
	}
	
	
	public function get_quotation()
	{
		$q = $_POST['data']['q'];

		$groups = $this->m_po->get_quotation($q);

		$results = array();
		if($groups != null){
			foreach($groups as $row){
				$results[] = array('id' => $row->TxnQuotHdrID, 'text' => $row->TxnQuotHdrNo);
			}
		}

		echo json_encode(array('q' => $q, 'results' => $results));
		
	}
	
	public function get_detailquotation()
	{
		$id = $_GET['id'];

		$row = $this->m_po->get_detailquotation($id);

		if($row != null)
		{
			$data = array(
				'no_quo' => $row->TxnQuotHdrNo,
				'date' => $row->TxnQuotHdrDate,
				'term' => $row->TxnQuotHdrTermsTxt,
				'discount' => $row->TxnQuotHdrDiscount,
				'remarks' => $row->TxnQuotHdrRemarks,
				'ppn' => $row->TxnQuotHdrPpn
			);

			echo json_encode($data);
		}

	}

	public function get_groupsales()
	{
		$q = $_POST['data']['q'];

		$groups = $this->m_quotation->get_groupsales($q);

		$results = array();
		if($groups != null){
			foreach($groups as $row){
				$results[] = array('id' => $row->MstGRPSalesID, 'text' => $row->MstGRPSalesDesc);
			}
		}

		echo json_encode(array('q' => $q, 'results' => $results));
		
	}

	public function get_typeorder()
	{
		$q = $_POST['data']['q'];

		$groups = $this->m_quotation->get_typeorder($q);

		$results = array();
		if($groups != null){
			foreach($groups as $row){
				$results[] = array('id' => $row->MstTypeOrderID, 'text' => $row->MstTypeOrderName);
			}
		}

		echo json_encode(array('q' => $q, 'results' => $results));
		
	}

	

	public function get_sales()
	{
		$q = $_POST['data']['q'];

		$groups = $this->m_quotation->get_sales($q);

		$results = array();
		if($groups != null){
			foreach($groups as $row){
				$results[] = array('id' => $row->MstSalesPICID, 'text' => $row->MstSalesPICName);
			}
		}

		echo json_encode(array('q' => $q, 'results' => $results));
		
	}

	public function get_typechasis()
	{
		$q = $_POST['data']['q'];

		$groups = $this->m_quotation->get_typechasis($q);

		$results = array();
		if($groups != null){
			foreach($groups as $row){
				$text = $row->MStChasMaker.' '.$row->MStChasModel.' '.$row->MstChasType;
				$results[] = array('id' => $row->MstChasID, 'text' => $text);
			}
		}

		echo json_encode(array('q' => $q, 'results' => $results));	
		
	}

	public function get_drawing()
	{
		$q = $_POST['data']['q'];

		$groups = $this->m_quotation->get_drawing($q);

		$results = array();
		if($groups != null){
			foreach($groups as $row){
				$results[] = array('id' => $row->TxnDrawID, 'text' => $row->TxnDrawNo);
			}
		}

		echo json_encode(array('q' => $q, 'results' => $results));	
		
	}

	public function get_detailcustomer()
	{
		$id = $_GET['id'];

		$row = $this->m_quotation->get_detailcustomer($id);

		if($row != null)
		{
			$data = array(
				'attention' => $row->MstCustIDPIC1,
				'address1' => $row->MstCustIDAddress1,
				'address2' => $row->MstCustIDAddress2,
				'address3' => $row->MstCustIDAddress3,
				'phone' => $row->MstCustIDNoTlp,
				'fax' => $row->MstCustIDNofax,
				'cc' => $row->MstCustIDPIC2,
				'email1' => $row->MstCustIDPICEmail1,
				'email2' => $row->MstCustIDPICEmail2,
				'email3' => $row->MstCustIDPICEmail3
			);

			echo json_encode($data);
		}

	}

	public function get_product()
	{
		$type = $_GET['type'];

		$result = $this->m_quotation->get_product($type);

		echo json_encode($result);
	}

	public function get_detailproduct()
	{
		$id = $_GET['id'];

		$row = $this->m_quotation->get_detailproduct($id);

		if($row != null)
		{
			$data = array(
				'priceid'	=> $row->priceid,
				'unitprice'	=> $row->unitprice
			);

			echo json_encode($data);
		}
	}

	public function save_master()
	{
		$result = $this->m_quotation->save_master();

		$data = array(
			'lastid' => $result,
		);

		echo json_encode($data);
	}

	public function save_detail()
	{
		$id = $this->m_quotation->save_detail();

		if($id != '')
		{
			$this->session->set_flashdata('msgsuccess', 'Succesfully created Quotation');

		}else {
			$this->session->set_flashdata('msgerror', 'Failed saved');
		}
	}

	public function update_master()
	{
		$id = $this->input->post('quotation-id');
		$this->m_quotation->update_master($id);
	
		$data = array(
			'lastid' => $id
		);

		echo json_encode($data);
	}

	public function update_detail()
	{
		//$data = $this->input->post('data',TRUE);
		//echo print_r($data); exit();
		$result = $this->m_quotation->update_detail();

		$this->session->set_flashdata('msgsuccess', 'Succesfully updated Quotation');

	}

	public function view($id)
	{
		$result = $this->m_quotation->get_quotation($id);

		if($result != null)
		{
			$data['quotationhdr'] = $result['quotationhdr'];
			$data['quotationdtl'] = $result['quotationdtl'];
		}

		$this->stencil->data($data);

		$this->stencil->paint('quotation_detail');
	}

	public function edit($id)
	{
		$result = $this->m_quotation->edit_quotation($id);

		if($result != null)
		{
			$data['quotationhdr'] = $result['quotationhdr'];
			$data['quotationdtl'] = $result['quotationdtl'];
		}

		$this->stencil->data($data);
		$this->stencil->paint('quotation_formedit');
	}

	public function delete()
	{
		$id =$_GET['id'];

		if($id != '')
		{
			$result = $this->m_quotation->delete($id);

			if($result == TRUE)
			{
				$this->session->set_flashdata('msgsuccess', 'Succesfully deleted');
			}
			else
			{
				$this->session->set_flashdata('msgerror', 'Failed deleted');
			}
			
			$data = array(
				'status' => TRUE
			);

			echo json_encode($data);
	
		}
		else
		{
			$data  = array(
				'status' => FALSE
			);

			echo json_encode($data);
		}
		
	}

	public function delete_many()
	{
		$data = $this->input->post('data',TRUE);

		if($data != '')
		{
			$result = $this->m_quotation->delete_many($data);

			if($result == TRUE)
			{
				$this->session->set_flashdata('msgsuccess', 'Succesfully deleted');
			}
			else
			{
				$this->session->set_flashdata('msgerror', 'Failed deleted');
			}
			
			$data = array(
				'status' => TRUE
			);

			echo json_encode($data);
	
		}
		else
		{
			$data  = array(
				'status' => FALSE,
				'msg' => 'No ID Selected. Failed delete'
			);

			echo json_encode($data);
		}
		
	}


}

/* End of file quotation.php */
/* Location: ./application/controllers/quotation.php */