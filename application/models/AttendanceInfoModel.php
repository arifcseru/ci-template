<?php 
/**
 * Class : AttendanceInfoModel (AttendanceInfoModel Model)
 * Attendance Info Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class AttendanceInfoModel extends CI_Model {
		public $id;
        //public $field1;
		
public $employeeId;
public $attendanceDate;
public $description;
public $supervisorId;
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
           return $this->db->count_all("attendance_info");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('attendance_info',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('attendance_info',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('attendance_info');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('attendance_info');
            $this->db->close();
            $attendanceInfos = $query->result();
            $attendanceInfo = null;
            if (sizeOf($attendanceInfos)) {
                $attendanceInfo = $attendanceInfos[0];
            }
            return $attendanceInfo;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('attendance_info');
            $this->db->close();
            $attendanceInfos = $query->result();
            $attendanceInfo = null;
            if (sizeOf($attendanceInfos)) {
                $attendanceInfo = $attendanceInfos[0];
            }
            return $attendanceInfo;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('attendance_info');
            $this->db->close();
            return $query->result();
        }

        public function create($attendanceInfo) {
			$this->load->database();
			//$this->id    = $attendanceInfo['id']; 
			//$this->field1    = $attendanceInfo['field1']; 
			$this->employeeId    = $attendanceInfo['employeeId']; 
$this->attendanceDate    = $attendanceInfo['attendanceDate']; 
$this->description    = $attendanceInfo['description']; 
$this->supervisorId    = $attendanceInfo['supervisorId']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $attendanceInfo['createdBy'];
			$this->updatedBy  = $attendanceInfo['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('attendance_info', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($attendanceInfo){
			$this->load->database();
			$this->id    = $attendanceInfo['id'];
			
			//$this->field1    = $entity['field1'];
			$this->employeeId    = $attendanceInfo['employeeId']; 
$this->attendanceDate    = $attendanceInfo['attendanceDate']; 
$this->description    = $attendanceInfo['description']; 
$this->supervisorId    = $attendanceInfo['supervisorId']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $attendanceInfo['createdBy'];
            $this->updatedBy  = $attendanceInfo['updatedBy'];
            
			$this->db->update('attendance_info', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($attendanceInfo){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('attendance_info', $attendanceInfo, array('id' => $attendanceInfo->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM attendance_info WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM attendance_info WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}