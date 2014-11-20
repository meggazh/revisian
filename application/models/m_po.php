<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_po extends CI_Model {
	
	public function get_maxid()
	{
		$query = $this->db->select_max('TxnPOHdrID')->get('txnpohdr');

		if($query->num_rows > 0)
		{
			$id = $query->row()->TxnPOHdrID;
			$id++;
			return $id;
		}else
		{
			return $id=1;
		}
	}
	
	public function get_quotation($key)
	{
		$query = $this->db->select('TxnQuotHdrID,TxnQuotHdrNo')
						  ->like('TxnQuotHdrNo',$key)
						  ->get('txnquothdr');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}else
		{
			return NULL;
		}
	}
	
	public function get_detailquotation($id)
	{
		$query = $this->db->get_where('txnquothdr',array('TxnQuotHdrID'=>$id));

		if($query->num_rows() > 0)
		{
			return $query->row();
		}else
		{
			return null;
		}
	}
	
}