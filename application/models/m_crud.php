<?php
    
	class M_crud extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		function get_crud_all($config,$id) {
			$query=$this->db->query("select * from mstappr ");
			return $query->result();
		}
	
		function tambah_appr()  				
		
		
		{
			$data = array(
				'MstApprID'=>$this->input->post('MstApprID'),
				'MstApprName'=>$this->input->post('MstApprName'),
				'MstAppr1'=>$this->input->post('MstAppr1'),
				'MstApprTitle1'=>$this->input->post('MstApprTitle1'),
				'MstAppr2'=>$this->input->post('MstAppr2'),
				'MstApprTitle2'=>$this->input->post('MstApprTitle2'),
				'MstAppr3'=>$this->input->post('MstAppr3'),
				'MstApprTitle3'=>$this->input->post('MstApprTitle3'),
				'MstAppr4' =>$this->input->post('MstAppr4'),
				'MstApprTitle4'=>$this->input->post('MstApprTitle4'),
				'MstEmpID'=>$this->input->post('MstEmpID')
			);  
			
			
			
			return $this->db->insert('mstappr', $data);
		}
		
		
		function get_crud_edit_appr($id) {
				$this->db->where('MstApprID',$id);
				$query = $this->db->get('mstappr');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_appr() {
			$id = $this->input->post('MstApprID');
			$data = array (
				'MstApprID'=>$this->input->post('MstApprID'),
				'MstApprName'=>$this->input->post('MstApprName'),
				'MstAppr1'=>$this->input->post('MstAppr1'),
				'MstApprTitle1'=>$this->input->post('MstApprTitle1'),
				'MstAppr2'=>$this->input->post('MstAppr2'),
				'MstApprTitle2'=>$this->input->post('MstApprTitle2'),
				'MstAppr3'=>$this->input->post('MstAppr3'),
				'MstApprTitle3'=>$this->input->post('MstApprTitle3'),
				'MstAppr4' =>$this->input->post('MstAppr4'),
				'MstApprTitle4'=>$this->input->post('MstApprTitle4'),
				'MstEmpID'=>$this->input->post('MstEmpID')
			);
			$this->db->where('MstApprID',$id);
			$this->db->update('mstappr',$data);
		}
		function hapus_appr($id){
			$this->db->where('MstApprID',$id);
			$this->db->delete('mstappr');
			
		}
			
		// ini koding chasis//

			
		function get_crud_all_chasis() {
			$query=$this->db->query("select * from mstchas");
			return $query->result();
		
		}
		
		 function search($terms)
			{
				// Execute our SQL statement and return the result
				$sql = "SELECT MstChasID, MstChasNo, MStChasMaker, MStChasModel, MStChasType,
				 MstEmpID
							FROM mstchas
							WHERE MATCH (content) AGAINST (?) > 0";
				$query = $this->db->query($sql, array($terms, $terms));
				return $query->result();
			}
			
			
		function last_id()
		{
		
		$result = $this->db->select_max('MstChasID')->get('mstchas')->row();

		return $result;
		}
		function tambah_chasis() {
			$data = array(
			     'MstChasID' => $this->input->post('MstChasID'),
				'MstChasNo' => $this->input->post('MstChasNo'),
				'MStChasMaker' => $this->input->post('MStChasMaker'),
				'MStChasModel' => $this->input->post('MStChasModel'),
				'MStChasType' => $this->input->post('MStChasType'),
				'MstEmpID' => $this->input->post('MstEmpID')
			);
			return $this->db->insert('mstchas', $data);
		}
		function get_crud_edit_chasis($id) {
				$this->db->where('MstChasID',$id);
				$query = $this->db->get('mstchas');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_chasis() {
			$id = $this->input->post('MstChasID');
			$data = array (
			     'MstChasID' => $this->input->post('MstChasID'),
				'MstChasNo' => $this->input->post('MstChasNo'),
				'MStChasMaker' => $this->input->post('MStChasMaker'),
				'MStChasModel' => $this->input->post('MStChasModel'),
				'MStChasType' => $this->input->post('MStChasType'),
				'MstEmpID' => $this->input->post('MstEmpID')
			);
			$this->db->where('MstChasID',$id);
			$this->db->update('mstchas',$data);
		}
		function hapus_chasis($id){
			$this->db->where('MstChasID',$id);
			$this->db->delete('mstchas');
		}
		
		//ini koding currency
		
		function get_crud_all_crs() {
			$query=$this->db->query("SELECT * FROM  mstcrs ");
			return $query->result();
		
		}
 
		function tambah_crs() {
			$data = array(
				'MstCrsID' => $this->input->post('MstCrsID'),
				'MstCrsName	' => $this->input->post('MstCrsName'),
				'MstCrsSym' => $this->input->post('MstCrsSym'),
				'MstEmpID' => $this->input->post('MstEmpID')
			);
			return $this->db->insert('mstcrs', $data);
		}
		function get_crud_edit_crs($id) {
				$this->db->where('MstCrsID',$id);
				$query = $this->db->get('mstcrs');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_crs() {
			$id = $this->input->post('MstCrsID');
			$data = array (
				'MstCrsName' => $this->input->post('MstCrsName'),
				'MstCrsSym' => $this->input->post('MstCrsSym'),
				'MstEmpID' => $this->input->post('MstEmpID')
			);
			$this->db->where('MstCrsID',$id);
			$this->db->update('mstcrs',$data);
		}
		function hapus_crs($id){
			$this->db->where('MstCrsID',$id);
			$this->db->delete('mstcrs');
		}
			//ini koding customer
		function get_crud_all_cus() {
			$query=$this->db->query("select * from mstcust");
			return $query->result();
		
		}
		 function last_id_cus()
		{
		
		$result = $this->db->select_max('MstCustID')->get('mstcust')->row();

		return $result;
		}
		
		function tambah_cus() {
			$data = array(
				'MstCustID' => $this->input->post('MstCustID'),
				'MstCustNo' => $this->input->post('MstCustNo'),
				'MstCustIDName' => $this->input->post('MstCustIDName'),
				'MstCustIDAbbr' => $this->input->post('MstCustIDAbbr'),
				'MstCustIDAddress1' => $this->input->post('MstCustIDAddress1'),
				'MstCustIDAddress2' => $this->input->post('MstCustIDAddress2'),
				'MstCustIDAddress3' => $this->input->post('MstCustIDAddress3'),
				'MstCustIDPIC1' => $this->input->post('MstCustIDPIC1'),
				'MstCustIDPIC2' => $this->input->post('MstCustIDPIC2'),
				'MstCustIDPIC3' => $this->input->post('MstCustIDPIC3'),
				'MstCustIDNoTlp' => $this->input->post('MstCustIDNoTlp'),
				'MstCustIDNofax' => $this->input->post('MstCustIDNofax'),
				'MstCustIDNpwp' => $this->input->post('MstCustIDNpwp'),
				'MstCustNppkp' => $this->input->post('MstCustNppkp'),
				'MstCustIDPICEmail1' => $this->input->post('MstCustIDPICEmail1'),
				'MstCustIDPICEmail2' => $this->input->post('MstCustIDPICEmail2'),
				'MstCustIDPICEmail3' => $this->input->post('MstCustIDPICEmail3'),
				'MstCustWebsite' => $this->input->post('MstCustWebsite'),
				'MstCustLastUpDate' => $this->input->post('MstCustLastUpDate'),
				'MstEmpID' => $this->input->post('MstEmpID'),
				'MstPayID' => $this->input->post('MstPayID')
			);
			return $this->db->insert('mstcust', $data);
		}
		function get_crud_edit_cus($id) {
				$this->db->where('MstCustID',$id);
				$query = $this->db->get('mstcust');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_cus() {
			$id = $this->input->post('MstCustID');
			$data = array (
				'MstCustID' => $this->input->post('MstCustID'),
				'MstCustNo' => $this->input->post('MstCustNo'),
				'MstCustIDName' => $this->input->post('MstCustIDName'),
				'MstCustIDAbbr' => $this->input->post('MstCustIDAbbr'),
				'MstCustIDAddress1' => $this->input->post('MstCustIDAddress1'),
				'MstCustIDAddress2' => $this->input->post('MstCustIDAddress2'),
				'MstCustIDAddress3' => $this->input->post('MstCustIDAddress3'),
				'MstCustIDPIC1' => $this->input->post('MstCustIDPIC1'),
				'MstCustIDPIC2' => $this->input->post('MstCustIDPIC2'),
				'MstCustIDPIC3' => $this->input->post('MstCustIDPIC3'),
				'MstCustIDNoTlp' => $this->input->post('MstCustIDNoTlp'),
				'MstCustIDNofax' => $this->input->post('MstCustIDNofax'),
				'MstCustIDNpwp' => $this->input->post('MstCustIDNpwp'),
				'MstCustNppkp' => $this->input->post('MstCustNppkp'),
				'MstCustIDPICEmail1' => $this->input->post('MstCustIDPICEmail1'),
				'MstCustIDPICEmail2' => $this->input->post('MstCustIDPICEmail2'),
				'MstCustIDPICEmail3' => $this->input->post('MstCustIDPICEmail3'),
				'MstCustWebsite' => $this->input->post('MstCustWebsite'),
				'MstCustLastUpDate' => $this->input->post('MstCustLastUpDate'),
				'MstEmpID' => $this->input->post('MstEmpID'),
				'MstPayID' => $this->input->post('MstPayID')
			);
			$this->db->where('MstCustID',$id);
			$this->db->update('mstcust',$data);
		}
		function hapus_cus($id){
			$this->db->where('MstCustID',$id);
			$this->db->delete('mstcust');
		}
		//ini koding grpsales
			function get_crud_all_grpsales() {
			$query=$this->db->query("select * from mstgrpsales");
			return $query->result();
		
		}
		function tambah_grpsales() {
			$data = array(
				'MstGRPSalesID' => $this->input->post('MstGRPSalesID'),
				'MstGRPSalesDesc' => $this->input->post('MstGRPSalesDesc'),
				'MstGRPSalesAbbr' => $this->input->post('MstGRPSalesAbbr'),
				'MstEmpID' => $this->input->post('MstEmpID')
			);
			return $this->db->insert('mstgrpsales', $data);
		}
		function get_crud_edit_grpsales($id) {
				$this->db->where('MstGRPSalesID',$id);
				$query = $this->db->get('mstgrpsales');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_grpsales() {
			$id = $this->input->post('MstGRPSalesID');
			$data = array (
				'MstGRPSalesID' => $this->input->post('MstGRPSalesID'),
				'MstGRPSalesDesc' => $this->input->post('MstGRPSalesDesc'),
				'MstGRPSalesAbbr' => $this->input->post('MstGRPSalesAbbr'),
				'MstEmpID' => $this->input->post('MstEmpID')
			);
			$this->db->where('MstGRPSalesID',$id);
			$this->db->update('mstgrpsales',$data);
		}
		function hapus_grpsales($id){
			$this->db->where('MstGRPSalesID',$id);
			$this->db->delete('mstgrpsales');
		}
		//ini koding mstpayment
		function get_crud_all_pay() {
			$query=$this->db->query("select * from  mstpay");
			return $query->result();
		
		}
		function tambah_pay() {
			$data = array(
				'MstPayID' => $this->input->post('MstPayID'),
				'MstPaySyarat' => $this->input->post('MstPaySyarat'),
				'MstEmpID' => $this->input->post('MstEmpID')
			);
			return $this->db->insert('mstpay', $data);
		}
		function get_crud_edit_pay($id) {
				$this->db->where('MstPayID',$id);
				$query = $this->db->get('mstpay');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_pay() {
			$id = $this->input->post('MstPayID');
			$data = array (
				'MstPayID' => $this->input->post('MstPayID'),
				'MstPaySyarat' => $this->input->post('MstPaySyarat'),
				'MstEmpID' => $this->input->post('MstEmpID')
			);
			$this->db->where('MstPayID',$id);
			$this->db->update('mstpay',$data);
		}
		function hapus_pay($id){
			$this->db->where('MstPayID',$id);
			$this->db->delete('mstpay');
		}
		//ini koding buying price
		function get_crud_all_price() {
			$query=$this->db->query("SELECT
  `mstprice`.*,
  `mstproduct`.`MstProductType`
FROM
  `mstproduct`
  INNER JOIN `mstprice` ON `mstprice`.`MstProductID` =
    `mstproduct`.`MstProductID`");
			return $query->result();
		
		}
		function tambah_price() {
			$data = array(
				'MstPriceID' => $this->input->post('MstPriceID'),
				'MstPriceUnitPrice' => $this->input->post('MstPriceUnitPrice'),
				'MstPriceExpiredDate' => $this->input->post('MstPriceExpiredDate'),
				'MstPriceStatus' => $this->input->post('MstPriceStatus'),
				'MstProductID' => $this->input->post('MstProductID')
			);
			return $this->db->insert('mstprice', $data);
		}
		function get_crud_edit_price($id) {
				$this->db->where('MstPriceID',$id);
				$query = $this->db->get('mstprice');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_price() {
			$id = $this->input->post('mstprice');
			$data = array (
				'MstPriceID' => $this->input->post('MstPriceID'),
				'MstPriceUnitPrice' => $this->input->post('MstPriceUnitPrice'),
				'MstPriceExpiredDate' => $this->input->post('MstPriceExpiredDate'),
				'MstPriceStatus' => $this->input->post('MstPriceStatus')
			);
			$this->db->where('MstPriceID',$id);
			$this->db->update('mstsellingprice',$data);
		}
		function hapus_price($id){
			$this->db->where('MstPriceID',$id);
			$this->db->delete('mstsprice');
		}
		
		//****ini koding Selling price
		function get_crud_all_sellprice() {
			$query=$this->db->query("SELECT `mstproduct`.`MstProductType`,`mstsellingprice`.* FROM `mstsellingprice`INNER JOIN `mstproduct` ON `mstsellingprice`.`MstProductID` =`mstproduct`.`MstProductID`");
			return $query->result();
		
		}
		
		public function get_product($type)
	{
		$query = $this->db->select('MstProductID as productid,MstProductType as producttype,MstProductVariant as productvariant,MstProductGroupingSize as productsize')
						  ->from('mstproduct')
						  ->where('MstProductTypeProduct',$type)
						  ->get();

		 if ($query->num_rows() > 0) { 
            foreach ($query->result() as $data) { 
                $hasil[] = $data; 
            } 
            return $hasil; 
        } 
	}
		

		function tambah_sellprice() {
			$data = array(
				'MstSellingPriceID' => $this->input->post('MstSellingPriceID'),
				'MstSellingPriceUnitPrice' => $this->input->post('MstSellingPriceUnitPrice'),
				'MstSellingPriceExpiredDate' => $this->input->post('MstSellingPriceExpiredDate'),
				'MstSellingPriceStatus' => $this->input->post('MstSellingPriceStatus'),
				'MstProductID' => $this->input->post('MstProductID'),
				'MstEmpID' => $this->input->post('MstEmpID')
				
			);
			return $this->db->insert('mstsellingprice', $data);
		}
		function get_crud_edit_sellprice($id) {
				$this->db->where('MstSellingPriceID',$id);
				$query = $this->db->get('mstsellingprice');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_sellprice() {
			$id = $this->input->post('MstSellingPriceID');
			$data = array (
				'MstSellingPriceID' => $this->input->post('MstSellingPriceID'),
				'MstSellingPriceUnitPrice' => $this->input->post('MstSellingPriceUnitPrice'),
				'MstSellingPriceExpiredDate' => $this->input->post('MstSellingPriceExpiredDate'),
				'MstSellingPriceStatus' => $this->input->post('MstSellingPriceStatus'),
				'MstProductID' => $this->input->post('MstProductID'),
				'MstEmpID' => $this->input->post('MstEmpID')
			);
			$this->db->where('MstSellingPriceID',$id);
			$this->db->update('mstsellingprice',$data);
		}
		function hapus_sellprice($id){
			$this->db->where('MstSellingPriceID',$id);
			$this->db->delete('mstsellingprice');
		}
		
		
		// ini koding produk
		function get_crud_all_produk() {
			$query=$this->db->query("SELECT * FROM `mstproduct`");
			return $query->result();
		
				}
				
				
		function last_id_prod()
		{
		
		$result = $this->db->select_max('MstProductID')->get('mstproduct')->row();

		return $result;
		}
		function tambah_produk() {
			$data = array(
				'MstProductID' =>$this->input->post('MstProductID'),
				'MstProductType' => $this->input->post('MstProductType'),
				'MstProductGroupingSize' => $this->input->post('MstProductGroupingSize'),
				'MstProductCategory' => $this->input->post('MstProductCategory'),
				'MstproductTypeProduct' => $this->input->post('MstproductTypeProduct'),
				'MstProductName' => $this->input->post('MstProductName'),
				'MstProductVariant' => $this->input->post('MstProductVariant'),
				'MstProductUOM' => $this->input->post('MstProductUOM'),
				'MstProductStatus' => $this->input->post('MstProductStatus'),
				'MstSpecID' => $this->input->post('MstSpecID'),
				'MstGrpReportID' => $this->input->post('MstGrpReportID'),
				'MstEmpID' => $this->input->post('MstEmpID'),
				'MstProductLastUpDate' => $this->input->post('MstProductLastUpDate')
				
			);
			return $this->db->insert('mstproduct', $data);
		}
		function get_crud_edit_produk($id) {
				$this->db->where('MstProductID',$id);
				$query = $this->db->get('mstproduct');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_produk() {
			$id = $this->input->post('MstProductID');
			$data = array (
				'MstProductID' =>$this->input->post('MstProductID'),
				'MstProductType' => $this->input->post('MstProductType'),
				'MstProductGroupingSize' => $this->input->post('MstProductGroupingSize'),
				'MstProductCategory' => $this->input->post('MstProductCategory'),
				'MstProductName' => $this->input->post('MstProductName'),
				'MstProductVariant' => $this->input->post('MstProductVariant'),
				'MstProductUOM' => $this->input->post('MstProductUOM'),
				'MstProductStatus' => $this->input->post('MstProductStatus'),
				'MstProductLastUpDate' => $this->input->post('MstProductLastUpDate'),
				'MstSpecID' => $this->input->post('MstSpecID'),
				'MstGrpReportID' => $this->input->post('MstGrpReportID'),
				'MstEmpID' => $this->input->post('MstEmpID'),
				'MstProductTypeProduct' => $this->input->post('MstProductTypeProduct')
			);
			
			$this->db->where('MstProductID',$id);
			$this->db->update('mstproduct',$data);
		}
		function hapus_produk($id){
			$this->db->where('MstProductID',$id);
			$this->db->delete('mstproduct');
		}
		//ini koding sales PIC
		function get_crud_all_salespic() {
			$query=$this->db->query("select * from mstsalespic");
			return $query->result();
		
		}
		function tambah_salespic() {
			$data = array(
				'MstSalesPICID' => $this->input->post('MstSalesPICID'),
				'MstSalesPICName' => $this->input->post('MstSalesPICName'),
				'MstSalesPICPICEmail1' => $this->input->post('MstSalesPICPICEmail1')
				//'MstSalesPICPICEmail2' => $this->input->post('MstSalesPICPICEmail2'),
				//'MstSalesPICPICEmail3' => $this->input->post('MstSalesPICPICEmail3')
			);
			return $this->db->insert('mstsalespic', $data);
		}
		function get_crud_edit_salespic($id) {
				$this->db->where('MstSalesPICID',$id);
				$query = $this->db->get('mstsalespic');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_salespic() {
			$id = $this->input->post('MstSalesPICID');
			$data = array (
				'MstSalesPICID' => $this->input->post('MstSalesPICID'),
				'MstSalesPICName' => $this->input->post('MstSalesPICName'),
				'MstSalesPICPICEmail1' => $this->input->post('MstSalesPICPICEmail1')
				//'MstSalesPICPICEmail2' => $this->input->post('MstSalesPICPICEmail2'),
				//'MstSalesPICPICEmail3' => $this->input->post('MstSalesPICPICEmail3')
			);
			$this->db->where('MstSalesPICID',$id);
			$this->db->update('mstsalespic',$data);
		}
		function hapus_salespic($id){
			$this->db->where('MstSalesPICID',$id);
			$this->db->delete('mstsalespic');
		}
		
		function hapus_stn($id){
			$this->db->where('MstSatID',$id);
			$this->db->delete('mstsatuan');
		}
		// ini koding spec
		function get_crud_all_spec() {
			$query=$this->db->query("select * from mstspec");
			return $query->result();
		
		}
		function tambah_spec() {
			$data = array(
				'MstSpecID' => $this->input->post('MstSpecID'),
				'MstSpecDesc' => $this->input->post('MstSpecDesc'),
				'MstSpecPenggerak' => $this->input->post('MstSpecPenggerak'),
				'MstSpecBase' => $this->input->post('MstSpecBase'),
				'MstSpecCrossMember' => $this->input->post('MstSpecCrossMember'),
				'MstSpecWing' => $this->input->post('MstSpecWall'),
				'MstSpecSideDoor' => $this->input->post('MstSpecSideDoor'),
				'MstSpecWall' => $this->input->post('MstSpecWing'),
				'MstSpecInnerRoof' => $this->input->post('MstSpecInnerRoof'),
				'MstSpecSideGuard' => $this->input->post('MstSpecSideGuard'),
				'MstSpecBackBumper' => $this->input->post('MstSpecBackBumper'),
				'MstSpecLamp' => $this->input->post('MstSpecLamp'),
				'MstSpecPainting' => $this->input->post('MstSpecPainting'),
				'MstSpecBackDoor' => $this->input->post('MstSpecBackDoor'),
				'MstSpecRearDoor' => $this->input->post('MstSpecRearDoor'),
				'MstSpecTangga' => $this->input->post('MstSpecTangga'),
				'MstSpecLastUpDate' => $this->input->post('MstSpecLastUpDate'),
				'MstEmpID' => $this->input->post('MstEmpID')
				
			);
			return $this->db->insert('mstspec', $data);
		}
		function get_crud_edit_spec($id) {
				$this->db->where('MstSpecID',$id);
				$query = $this->db->get('mstspec');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_spec() {
			$id = $this->input->post('MstSpecID');
			$data = array (
				'MstSpecID' => $this->input->post('MstSpecID'),
				'MstSpecDesc' => $this->input->post('MstSpecDesc'),
				'MstSpecPenggerak' => $this->input->post('MstSpecPenggerak'),
				'MstSpecBase' => $this->input->post('MstSpecBase'),
				'MstSpecCrossMember' => $this->input->post('MstSpecCrossMember'),
				'MstSpecWing' => $this->input->post('MstSpecWall'),
				'MstSpecSideDoor' => $this->input->post('MstSpecSideDoor'),
				'MstSpecWall' => $this->input->post('MstSpecWing'),
				'MstSpecInnerRoof' => $this->input->post('MstSpecInnerRoof'),
				'MstSpecSideGuard' => $this->input->post('MstSpecSideGuard'),
				'MstSpecBackBumper' => $this->input->post('MstSpecBackBumper'),
				'MstSpecLamp' => $this->input->post('MstSpecLamp'),
				'MstSpecPainting' => $this->input->post('MstSpecPainting'),
				'MstSpecBackDoor' => $this->input->post('MstSpecBackDoor'),
				'MstSpecRearDoor' => $this->input->post('MstSpecRearDoor'),
				'MstSpecTangga' => $this->input->post('MstSpecTangga'),
				'MstSpecLastUpDate' => $this->input->post('MstSpecLastUpDate'),
				'MstEmpID' => $this->input->post('MstEmpID')
			);
			$this->db->where('MstSpecID',$id);
			$this->db->update('mstspec',$data);
		}
		function hapus_spec($id){
			$this->db->where('MstSpecID',$id);
			$this->db->delete('mstspec');
		}
		// ini koding status produksi
		
		function get_crud_all_sts() {
			$query=$this->db->query("select * from mststatusprod");
			return $query->result();
		
		}
		function tambah_sts() {
			$data = array(
				'MstStatusProdID' => $this->input->post('MstStatusProdID'),
				'MstStatusProdGroup' => $this->input->post('MstStatusProdGroup'),
				'MstStatusProdSubGroup' => $this->input->post('MstStatusProdSubGroup'),
				'MstStatusProdJob' => $this->input->post('MstStatusProdJob')
	
			);
			return $this->db->insert('mststatusprod', $data);
		}
		function get_crud_edit_sts($id) {
				$this->db->where('MstStatusProdID',$id);
				$query = $this->db->get('mststatusprod');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_sts() {
			$id = $this->input->post('MstStatusProdID');
			$data = array (
				'MstStatusProdID' => $this->input->post('MstStatusProdID'),
				'MstStatusProdGroup' => $this->input->post('MstStatusProdGroup'),
				'MstStatusProdSubGroup' => $this->input->post('MstStatusProdSubGroup'),
				'MstStatusProdJob' => $this->input->post('MstStatusProdJob')
			);
			$this->db->where('MstStatusProdID',$id);
			$this->db->update('mststatusprod',$data);
		}
		function hapus_sts($id){
			$this->db->where('MstStatusProdID',$id);
			$this->db->delete('mststatusprod');
		}
		
		
		
		//Koding Emplyee
		function get_crud_all_employee() {
			$query=$this->db->query("select * from mstemp");
			return $query->result();
		
		}
		
		
		
		function tambah_employee() {
			$data = array(
				'MstEmpID' => $this->input->post('MstEmpID'),
				'MstEmpNIK' => $this->input->post('MstEmpNIK'),
				'MstEmpName' => $this->input->post('MstEmpName'),
				'MstEmpDiv' => $this->input->post('MstEmpDiv'),
				'MstEmpGender' => $this->input->post('MstEmpGender'),
				'MstEmpEdu' => $this->input->post('MstEmpEdu'),
				'MstEmpReligi' => $this->input->post('MstEmpReligi'),
				'MstEmpBirdthDate' => $this->input->post('MstEmpBirdthDate'),
				'MstEmpJoinDate' => $this->input->post('MstEmpJoinDate'),
				'MstEmpNoRek' => $this->input->post('MstEmpNoRek'),
				'MstEmpNoKtp' => $this->input->post('MstEmpNoKtp'),
				'MstEmpNoNpwp' => $this->input->post('MstEmpNoNpwp'),
				'MstEmpNoJamsos' => $this->input->post('MstEmpNoJamsos'),
				'MstEmpAddress' => $this->input->post('MstEmpAddress'),
				'MstEmpPassword' => $this->input->post('MstEmpPassword'),
				'MstEmpLevel' => $this->input->post('MstEmpLevel')
			);
			return $this->db->insert('mstemp', $data);
		}
		function get_crud_edit_employee($id) {
				$this->db->where('MstEmpID',$id);
				$query = $this->db->get('mstemp');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		function edit_employee() {
			$id = $this->input->post('MstEmpID');
			$data = array (
				'MstEmpID' => $this->input->post('MstEmpID'),
				'MstEmpNIK' => $this->input->post('MstEmpNIK'),
				'MstEmpName' => $this->input->post('MstEmpName'),
				'MstEmpDiv' => $this->input->post('MstEmpDiv'),
				'MstEmpGender' => $this->input->post('MstEmpGender'),
				'MstEmpEdu' => $this->input->post('MstEmpEdu'),
				'MstEmpReligi' => $this->input->post('MstEmpReligi'),
				'MstEmpBirdthDate' => $this->input->post('MstEmpBirdthDate'),
				'MstEmpJoinDate' => $this->input->post('MstEmpJoinDate'),
				'MstEmpNoRek' => $this->input->post('MstEmpNoRek'),
				'MstEmpNoKtp' => $this->input->post('MstEmpNoKtp'),
				'MstEmpNoNpwp' => $this->input->post('MstEmpNoNpwp'),
				'MstEmpNoJamsos' => $this->input->post('MstEmpNoJamsos'),
				'MstEmpAddress' => $this->input->post('MstEmpAddress'),
				'MstEmpPassword' => $this->input->post('MstEmpPassword'),
				'MstEmpLevel' => $this->input->post('MstEmpLevel')
			);
			$this->db->where('MstEmpID',$id);
			$this->db->update('mstemp',$data);
		}
		function hapus_employee($id){
			$this->db->where('MstEmpID',$id);
			$this->db->delete('mstemp');
		}
		
		// Drawing
		
		function get_crud_all_drawing() {
			$query=$this->db->query("select * from txndraw");
			return $query->result();
		
		}
		
		function tambah_draw(){
			$data = array(
					'TxnDrawID' => $this->input->post('TxnDrawID'),
					'TxnDrawNo' => $this->input->post('TxnDrawNo'),
					'TxnDrawDate'  => $this->input->post('TxnDrawDate'),
					'TxnDrawTitle' =>$this->input->post('TxnDrawTitle'),
					'TxnDrawStatus' =>$this->input->post('TxnDrawStatus'),
					'MstEmpID' =>$this->input->post('MstEmpID')			
			);
					return $this->db->insert('txndraw',$data);

		}
		
		public function save_form()
		{	$no_array	 	= $this->input->post('no-draw',TRUE);
			$no 			= $no_array[0].'/'.$no_array[1].'/'.$no_array[2].'/'.$no_array[3].'/'.$no_array[4];
						
			
			}
		
		function get_crud_edit_draw($id) {
				$this->db->where('TxnDrawID',$id);
				$query = $this->db->get('txndraw');
				if($query ->num_rows > 0)
			return $query;
			else
			return null;
		}
		
		function edit_draw() {
			$id = $this->input->post('TxnDrawID');
			$data = array (
				'TxnDrawID' => $this->input->post('TxnDrawID'),
					'TxnDrawNo' => $this->input->post('TxnDrawNo'),
					'TxnDrawDate'  => $this->input->post('TxnDrawDate'),
					'TxnDrawTitle' =>$this->input->post('TxnDrawTitle'),
					'TxnDrawStatus' =>$this->input->post('TxnDrawStatus'),
					'MstEmpID' =>$this->input->post('MstEmpID')
				);
			$this->db->where('TxnDrawID',$id);
			$this->db->update('txndraw',$data);
		}
		
		function hapus_draw($id){
			$this->db->where('TxnDrawID',$id);
			$this->db->delete('txndraw');
		}
		

		//quotation
		
		function get_crud_all_quot() {
			$query=$this->db->query("select * from txnquothdr");
			return $query->result();
		
		}
		
		
		function get_all_detailquo() {
			$query=$this->db->query("SELECT
							`txnquothdr`.*,
							`mstcust`.`MstCustIDName`
						FROM
							`txnquothdr`
							INNER JOIN `mstcust` ON `txnquothdr`.`MstCustID` = `mstcust`.`MstCustID`
			");
			return $query->result();
		
		}
		
			function get_all_detailquos($id) {
			$query=$this->db->query("SELECT
  					`mstcust`.`MstCustIDName`,
  					`mstcust`.`MstCustIDAddress1`,
  					`mstcust`.`MstCustIDPIC1`,
  					`mstcust`.`MstCustIDPIC2`,
  					`mstcust`.`MstCustIDPICEmail1`,
  					`txnquothdr`.`TxnQuotHdrNo`,
  					`mstchas`.`MstChasNo`,
  					`mstchas`.`MStChasMaker`,
  					`mstchas`.`MStChasModel`,
  					`mstchas`.`MStChasType`,
  					`mstproduct`.`MstProductType`,
 					`mstproduct`.`MstProductSize`,
  					`mstproduct`.`MstProductVariant`,
  					`mstcust`.`MstCustIDNoTlp`,
  					`txnquotdtl`.*,
  					`txnquothdr`.`TxnQuotHdrTermsTxt`
					FROM
  					`txnquothdr`
  					INNER JOIN `mstcust` ON `mstcust`.`MstCustID` = `txnquothdr`.`MstCustID`,
  					`mstchas`,
  					`mstproduct`,
  					`txnquotdtl`where txnquothdr.TxnQuotHdrID = '$id' ;
					");
					return $query->result();
		
					}
				
			function get_crud_edit_qutation($id) {
				$this->db->where('SELECT * FROM
  								`txnquothdr`
  								INNER JOIN `txnquotdtl` ON `txnquothdr`.`TxnQuotHdrID` =
    							`txnquotdtl`.`TxnQuotHdrID`;',$id);
				$query = $this->db->get('qutation');
				if($query ->num_rows > 0)
				return $query;
				else
				return null;
		}
		
		function edit_qutation() {
			$id = $this->input->post('TxnQuotHdrID');
			$data = array (
					'TxnQuotHdrID' => $this->input->post('TxnQuotHdrID'),
					'TxnQuotHdrNo' => $this->input->post('TxnQuotHdrNo'),
					'TxnQuotHdrDate'  => $this->input->post('TxnQuotHdrDate'),
					'TxnQuotHdrTermsTxt' =>$this->input->post('TxnQuotHdrTermsTxt'),
					'TxnQuotHdrDiscount' =>$this->input->post('TxnQuotHdrDiscount'),
					'MstCustID' =>$this->input->post('MstCustID'),
					'MstSalesPICID' =>$this->input->post('MstSalesPICID'),
					'MstApprID'=>$this->input->post('MstApprID'),
					'MstEmp'=>$this->input->post('MstEmp'),
					'MstGRPSalesID'=>$this->input->post('MstGRPSalesID'),
					'TxnQuotDtlID'=>$this->input->post('TxnQuotDtlID'),
					'TxnQuotDtlQty'=>$this->input->post('TxnQuotDtlQty'),
					'TxnQuotDtlUnitPrice'=>$this->input->post('TxnQuotDtlUnitPrice'),
					'TxnQuotDtlDiscPrs'=>$this->input->post('TxnQuotDtlDiscPrs'),
					'TxnQuotDtlDiscAm'=>$this->input->post('TxnQuotDtlDiscAm'),
					'TxnQuotDtlRemarks'=>$this->input->post('TxnQuotDtlRemarks'),
					'MstChasID'=>$this->input->post('MstChasID'),
					'MstProductID'=>$this->input->post('MstProductID'),
					'TxnDrawID'=>$this->input->post('TxnDrawID')
			);
			$this->db->where('TxnQuotHdrID',$id);
			$this->db->update('txnquothdr',$data);
		
		}
		
	
	}
	
?>
