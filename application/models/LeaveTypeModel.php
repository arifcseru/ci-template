<?php 
/**
 * Class : LeaveTypeModel (LeaveTypeModel Model)
 * Leave Type Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class LeaveTypeModel extends CI_Model {
		public $id;
        //public $field1;
		
public $name;
public $description;
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
           return $this->db->count_all("leave_type");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('leave_type',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('leave_type',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('leave_type');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('leave_type');
            $this->db->close();
            $leaveTypes = $query->result();
            $leaveType = null;
            if (sizeOf($leaveTypes)) {
                $leaveType = $leaveTypes[0];
            }
            return $leaveType;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('leave_type');
            $this->db->close();
            $leaveTypes = $query->result();
            $leaveType = null;
            if (sizeOf($leaveTypes)) {
                $leaveType = $leaveTypes[0];
            }
            return $leaveType;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('leave_type');
            $this->db->close();
            return $query->result();
        }

        public function create($leaveType) {
			$this->load->database();
			//$this->id    = $leaveType['id']; 
			//$this->field1    = $leaveType['field1']; 
			$this->name    = $leaveType['name']; 
$this->description    = $leaveType['description']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $leaveType['createdBy'];
			$this->updatedBy  = $leaveType['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('leave_type', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($leaveType){
			$this->load->database();
			$this->id    = $leaveType['id'];
			
			//$this->field1    = $entity['field1'];
			$this->name    = $leaveType['name']; 
$this->description    = $leaveType['description']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $leaveType['createdBy'];
            $this->updatedBy  = $leaveType['updatedBy'];
            
			$this->db->update('leave_type', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($leaveType){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('leave_type', $leaveType, array('id' => $leaveType->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM leave_type WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM leave_type WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}