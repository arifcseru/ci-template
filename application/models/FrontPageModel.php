<?php

/**
 * Class : FrontPageModel (FrontPageModel Model)
 * Front Page Actions
 * @author : Arifur Rahman, http://github.com/arifcseru
 * @version : 1.1
 * @since : October 2019
 */
class FrontPageModel extends CI_Model
{
    public $id;
    //public $field1;

    public $title;
    public $heading;
    public $headline;
    public $description;
    public $specialLink;
    public $linkType;
    public $detailsLink;
    public $detailsLinkText;
    public $contactUsHeadline;
    public $footerMessage;
    public $footerLink;
    public $facebookLink;
    public $githubLink;
    public $twitterLink;
    public $linkedInLink;
    public $isApproved;
    public $isDeleted;
    public $createdBy;
    public $updatedBy;
    public $createdDate;
    public $updatedDate;

    public function __construct()
    {
        parent::__construct();
    }
    public function record_count()
    {
        return $this->db->count_all("front_page");
    }

    public function getPaginated($start, $limit)
    {
        $this->load->database();
        $query = $this->db->order_by('id', 'DESC');
        $query = $this->db->get('front_page', $limit, $start);
        $this->db->close();
        return $query->result();
    }
    public function get($limit)
    {
        $this->load->database();
        $query = $this->db->order_by('id', 'DESC');
        $query = $this->db->get('front_page', $limit);
        $this->db->close();
        return $query->result();
    }
    public function getAll()
    {
        $this->load->database();
        $query = $this->db->get('front_page');
        $this->db->close();
        return $query->result();
    }
    public function findOne($id)
    {
        $this->load->database();
        $this->db->where('id', $id);
        $query = $this->db->get('front_page');
        $this->db->close();
        $frontPages = $query->result();
        $frontPage = null;
        if (sizeOf($frontPages)) {
            $frontPage = $frontPages[0];
        }
        return $frontPage;
    }
    public function findOneBy($key, $value)
    {
        $this->load->database();
        $this->db->where($key, $value);
        $query = $this->db->get('front_page');
        $this->db->close();
        $frontPages = $query->result();
        $frontPage = null;
        if (sizeOf($frontPages)) {
            $frontPage = $frontPages[0];
        }
        return $frontPage;
    }
    public function findBy($key, $value)
    {
        $this->load->database();
        $this->db->where($key, $value);
        $query = $this->db->get('front_page');
        $this->db->close();
        return $query->result();
    }

    public function create($frontPage)
    {
        $this->load->database();
        //$this->id    = $frontPage['id']; 
        //$this->field1    = $frontPage['field1']; 
        $this->title    = $frontPage['title'];
        $this->heading    = $frontPage['heading'];
        $this->headline    = $frontPage['headline'];
        $this->description    = $frontPage['description'];
        $this->specialLink    = $frontPage['specialLink'];
        $this->linkType    = $frontPage['linkType'];
        $this->detailsLink    = $frontPage['detailsLink'];
        $this->detailsLinkText    = $frontPage['detailsLinkText'];
        $this->contactUsHeadline    = $frontPage['contactUsHeadline'];
        $this->footerMessage    = $frontPage['footerMessage'];
        $this->footerLink    = $frontPage['footerLink'];
        $this->facebookLink    = $frontPage['facebookLink'];
        $this->githubLink    = $frontPage['githubLink'];
        $this->twitterLink    = $frontPage['twitterLink'];
        $this->linkedInLink    = $frontPage['linkedInLink'];


        $this->isDeleted    = 0;
        $this->isApproved    = 0;

        $this->createdBy  = $frontPage['createdBy'];
        $this->updatedBy  = $frontPage['updatedBy'];

        $this->createdDate     = date('Y-m-d H:i:s');
        $this->updatedDate  = date('Y-m-d H:i:s');

        $id = $this->db->insert('front_page', $this);
        $insert_id = $this->db->insert_id();
        $this->db->close();

        return  $insert_id;
    }

    public function update($frontPage)
    {
        $this->load->database();
        $this->id    = $frontPage['id'];

        //$this->field1    = $entity['field1'];
        $this->title    = $frontPage['title'];
        $this->heading    = $frontPage['heading'];
        $this->headline    = $frontPage['headline'];
        $this->description    = $frontPage['description'];
        $this->specialLink    = $frontPage['specialLink'];
        $this->linkType    = $frontPage['linkType'];
        $this->detailsLink    = $frontPage['detailsLink'];
        $this->detailsLinkText    = $frontPage['detailsLinkText'];
        $this->contactUsHeadline    = $frontPage['contactUsHeadline'];
        $this->footerMessage    = $frontPage['footerMessage'];
        $this->footerLink    = $frontPage['footerLink'];
        $this->facebookLink    = $frontPage['facebookLink'];
        $this->githubLink    = $frontPage['githubLink'];
        $this->twitterLink    = $frontPage['twitterLink'];
        $this->linkedInLink    = $frontPage['linkedInLink'];


        //$this->updatedDate  = time();
        $this->updatedDate  = date('Y-m-d H:i:s');
        $this->createdBy  = $frontPage['createdBy'];
        $this->updatedBy  = $frontPage['updatedBy'];

        $this->db->update('front_page', $this, array('id' => $this->id));
        $this->db->close();
        return $this->id;
    }
    public function approve($frontPage)
    {
        $this->load->database();
        $this->updatedDate  = time();
        $this->db->update('front_page', $frontPage, array('id' => $frontPage->id));
        $this->db->close();
    }
    public function delete($id)
    {
        $this->load->database();
        $sql = "DELETE FROM front_page WHERE id=" . $id;
        $this->db->simple_query($sql);
        $this->db->close();
    }
    public function deleteBy($key, $value)
    {
        $this->load->database();
        $sql = "DELETE FROM front_page WHERE " . $key . "=" . $value;
        $this->db->simple_query($sql);
        $this->db->close();
    }
}
