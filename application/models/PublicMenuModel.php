<?php 
/**
 * Class : PublicMenuModel (PublicMenuModel Model)
 * Public Menu Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class PublicMenuModel extends CI_Model {
		public $id;
        //public $field1;
		
public $menuText;
public $linkType;
public $menuLinkUrl;
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
           return $this->db->count_all("public_menu");
        }

       public function getPaginated($start,$limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('public_menu',$limit, $start);
        	$this->db->close();
        	return $query->result();
        }
        public function get($limit){
        	$this->load->database();
        	$query = $this->db->order_by('id', 'DESC');
        	$query = $this->db->get('public_menu',$limit);
        	$this->db->close();
        	return $query->result();
        }
        public function getAll(){
			$this->load->database();
			$query = $this->db->get('public_menu');
			$this->db->close();
			return $query->result();
        }
        public function findOne($id){
            $this->load->database();
            $this->db->where('id', $id);
            $query = $this->db->get('public_menu');
            $this->db->close();
            $publicMenus = $query->result();
            $publicMenu = null;
            if (sizeOf($publicMenus)) {
                $publicMenu = $publicMenus[0];
            }
            return $publicMenu;
        }
        public function findOneBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('public_menu');
            $this->db->close();
            $publicMenus = $query->result();
            $publicMenu = null;
            if (sizeOf($publicMenus)) {
                $publicMenu = $publicMenus[0];
            }
            return $publicMenu;
        }
        public function findBy($key,$value){
            $this->load->database();
            $this->db->where($key, $value);
            $query = $this->db->get('public_menu');
            $this->db->close();
            return $query->result();
        }

        public function create($publicMenu) {
			$this->load->database();
			//$this->id    = $publicMenu['id']; 
			//$this->field1    = $publicMenu['field1']; 
			$this->menuText    = $publicMenu['menuText']; 
$this->linkType    = $publicMenu['linkType']; 
$this->menuLinkUrl    = $publicMenu['menuLinkUrl']; 

			
			$this->isDeleted    = 0;
			$this->isApproved    = 0;
			
			$this->createdBy  = $publicMenu['createdBy'];
			$this->updatedBy  = $publicMenu['updatedBy'];
			
			$this->createdDate     = date('Y-m-d H:i:s');
			$this->updatedDate  = date('Y-m-d H:i:s');

			$id = $this->db->insert('public_menu', $this);
			$insert_id = $this->db->insert_id();
			$this->db->close();
			
			return  $insert_id;
        }
        
        public function update($publicMenu){
			$this->load->database();
			$this->id    = $publicMenu['id'];
			
			//$this->field1    = $entity['field1'];
			$this->menuText    = $publicMenu['menuText']; 
$this->linkType    = $publicMenu['linkType']; 
$this->menuLinkUrl    = $publicMenu['menuLinkUrl']; 

			
			//$this->updatedDate  = time();
			$this->updatedDate  = date('Y-m-d H:i:s');
            $this->createdBy  = $publicMenu['createdBy'];
            $this->updatedBy  = $publicMenu['updatedBy'];
            
			$this->db->update('public_menu', $this, array('id' => $this->id));
			$this->db->close();
			return $this->id;
        }
        public function approve($publicMenu){
            $this->load->database();
            $this->updatedDate  = time();
            $this->db->update('public_menu', $publicMenu, array('id' => $publicMenu->id));
            $this->db->close();
        }
        public function delete($id) {
            $this->load->database();
            $sql = "DELETE FROM public_menu WHERE id=".$id;
            $this->db->simple_query($sql);
            $this->db->close();
        }
        public function deleteBy($key,$value) {
            $this->load->database();
            $sql = "DELETE FROM public_menu WHERE ".$key."=".$value;
            $this->db->simple_query($sql);
            $this->db->close();
        }


}