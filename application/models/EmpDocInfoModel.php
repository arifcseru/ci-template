<?php 
/**
 * Class : EmpDocInfoModel (EmpDocInfoModel Model)
 * Emp Doc Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class EmpDocInfoModel extends CI_Model {
		public $id;
        //public $field1;
		
public $employeeId;
public $documentName;
public $documentDetails;
public $tags;
public $document;
		public $isApproved;
		public $isDeleted;
		public $createdBy;
		public $updatedBy;
		public $createdDate;
		public $updatedDate;

        public function __construct(){
                parent::__construct();
        }
        public function record_count() {
           return $this->db->count_all("emp_doc_info");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('emp_doc_info',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('emp_doc_info',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('emp_doc_info');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('emp_doc_info');
            $this->db->close();
            $empDocInfos = $query->result();
            $empDocInfo = null;
            if (sizeOf($empDocInfos)) {
                $empDocInfo = $empDocInfos[0];
            }
            return $empDocInfo;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('emp_doc_info');
            $this->db->close();
            $empDocInfos = $query->result();
            $empDocInfo = null;
            if (sizeOf($empDocInfos)) {
                $empDocInfo = $empDocInfos[0];
            }
            return $empDocInfo;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('emp_doc_info');
            $this->db->close();
            return $query->result();
        }

        public function create($empDocInfo) {
			$this->load->database();
			//$this->id    = $empDocInfo['id']; 
			//$this->field1    = $empDocInfo['field1']; 
			$this->employeeId    = $empDocInfo['employeeId']; 
$this->documentName    = $empDocInfo['documentName']; 
$this->documentDetails    = $empDocInfo['documentDetails']; 
$this->tags    = $empDocInfo['tags']; 
$this->document    = $empDocInfo['document']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $empDocInfo['createdBy'];
			$this->updatedBy  = $empDocInfo['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('emp_doc_info', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($empDocInfo){
			$this->load->database();
			$this->id    = $empDocInfo['id'];
			
			//$this->field1    = $entity['field1'];
			$this->employeeId    = $empDocInfo['employeeId']; 
$this->documentName    = $empDocInfo['documentName']; 
$this->documentDetails    = $empDocInfo['documentDetails']; 
$this->tags    = $empDocInfo['tags']; 
$this->document    = $empDocInfo['document']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $empDocInfo['createdBy'];
            $this->updatedBy  = $empDocInfo['updatedBy'];
            
			$this->db->update('emp_doc_info', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($empDocInfo){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('emp_doc_info', $empDocInfo, array('id' => $empDocInfo->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM emp_doc_info WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM emp_doc_info WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}