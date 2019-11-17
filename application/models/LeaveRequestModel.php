<?php 
/**
 * Class : LeaveRequestModel (LeaveRequestModel Model)
 * Leave Request Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class LeaveRequestModel extends CI_Model {
		public $id;
        //public $field1;
		
public $employeeId;
public $leaveTypeId;
public $fromDate;
public $thruDate;
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
           return $this->db->count_all("leave_request");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('leave_request',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('leave_request',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('leave_request');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('leave_request');
            $this->db->close();
            $leaveRequests = $query->result();
            $leaveRequest = null;
            if (sizeOf($leaveRequests)) {
                $leaveRequest = $leaveRequests[0];
            }
            return $leaveRequest;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('leave_request');
            $this->db->close();
            $leaveRequests = $query->result();
            $leaveRequest = null;
            if (sizeOf($leaveRequests)) {
                $leaveRequest = $leaveRequests[0];
            }
            return $leaveRequest;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('leave_request');
            $this->db->close();
            return $query->result();
        }

        public function create($leaveRequest) {
			$this->load->database();
			//$this->id    = $leaveRequest['id']; 
			//$this->field1    = $leaveRequest['field1']; 
			$this->employeeId    = $leaveRequest['employeeId']; 
$this->leaveTypeId    = $leaveRequest['leaveTypeId']; 
$this->fromDate    = $leaveRequest['fromDate']; 
$this->thruDate    = $leaveRequest['thruDate']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $leaveRequest['createdBy'];
			$this->updatedBy  = $leaveRequest['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('leave_request', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($leaveRequest){
			$this->load->database();
			$this->id    = $leaveRequest['id'];
			
			//$this->field1    = $entity['field1'];
			$this->employeeId    = $leaveRequest['employeeId']; 
$this->leaveTypeId    = $leaveRequest['leaveTypeId']; 
$this->fromDate    = $leaveRequest['fromDate']; 
$this->thruDate    = $leaveRequest['thruDate']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $leaveRequest['createdBy'];
            $this->updatedBy  = $leaveRequest['updatedBy'];
            
			$this->db->update('leave_request', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($leaveRequest){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('leave_request', $leaveRequest, array('id' => $leaveRequest->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM leave_request WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM leave_request WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}