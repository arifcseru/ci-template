<?php 
/**
 * Class : ProjectsModel (ProjectsModel Model)
 * Projects Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class ProjectsModel extends CI_Model {
		public $id;
        //public $field1;
		
public $name;
public $shortDetails;
public $features;
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
           return $this->db->count_all("projects");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('projects',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('projects',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('projects');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('projects');
            $this->db->close();
            $projectss = $query->result();
            $projects = null;
            if (sizeOf($projectss)) {
                $projects = $projectss[0];
            }
            return $projects;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('projects');
            $this->db->close();
            $projectss = $query->result();
            $projects = null;
            if (sizeOf($projectss)) {
                $projects = $projectss[0];
            }
            return $projects;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('projects');
            $this->db->close();
            return $query->result();
        }

        public function create($projects) {
			$this->load->database();
			//$this->id    = $projects['id']; 
			//$this->field1    = $projects['field1']; 
			$this->name    = $projects['name']; 
$this->shortDetails    = $projects['shortDetails']; 
$this->features    = $projects['features']; 
$this->frontPageId    = $projects['frontPageId']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $projects['createdBy'];
			$this->updatedBy  = $projects['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('projects', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($projects){
			$this->load->database();
			$this->id    = $projects['id'];
			
			//$this->field1    = $entity['field1'];
			$this->name    = $projects['name']; 
$this->shortDetails    = $projects['shortDetails']; 
$this->features    = $projects['features']; 
$this->frontPageId    = $projects['frontPageId']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $projects['createdBy'];
            $this->updatedBy  = $projects['updatedBy'];
            
			$this->db->update('projects', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($projects){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('projects', $projects, array('id' => $projects->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM projects WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM projects WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}