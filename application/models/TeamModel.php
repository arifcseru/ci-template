<?php 
/**
 * Class : TeamModel (TeamModel Model)
 * Team Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class TeamModel extends CI_Model {
		public $id;
        //public $field1;
		
public $memberName;
public $designation;
public $about;
public $githubLink;
public $twitterLink;
public $facebookLink;
public $frontPageId;
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
           return $this->db->count_all("team");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('team',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('team',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('team');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('team');
            $this->db->close();
            $teams = $query->result();
            $team = null;
            if (sizeOf($teams)) {
                $team = $teams[0];
            }
            return $team;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('team');
            $this->db->close();
            $teams = $query->result();
            $team = null;
            if (sizeOf($teams)) {
                $team = $teams[0];
            }
            return $team;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('team');
            $this->db->close();
            return $query->result();
        }

        public function create($team) {
			$this->load->database();
			//$this->id    = $team['id']; 
			//$this->field1    = $team['field1']; 
			$this->memberName    = $team['memberName']; 
$this->designation    = $team['designation']; 
$this->about    = $team['about']; 
$this->githubLink    = $team['githubLink']; 
$this->twitterLink    = $team['twitterLink']; 
$this->facebookLink    = $team['facebookLink']; 
$this->frontPageId    = $team['frontPageId']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $team['createdBy'];
			$this->updatedBy  = $team['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('team', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($team){
			$this->load->database();
			$this->id    = $team['id'];
			
			//$this->field1    = $entity['field1'];
			$this->memberName    = $team['memberName']; 
$this->designation    = $team['designation']; 
$this->about    = $team['about']; 
$this->githubLink    = $team['githubLink']; 
$this->twitterLink    = $team['twitterLink']; 
$this->facebookLink    = $team['facebookLink']; 
$this->frontPageId    = $team['frontPageId']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $team['createdBy'];
            $this->updatedBy  = $team['updatedBy'];
            
			$this->db->update('team', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($team){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('team', $team, array('id' => $team->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM team WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM team WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}