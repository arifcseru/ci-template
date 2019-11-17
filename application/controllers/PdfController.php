<?php defined('BASEPATH') OR exit('No direct script access allowed');
class PdfController extends CI_Controller {
    public function index(){
        $data_user = array();
        $this->load->model('UserModel');
        
        $data['userList'] = $this->UserModel->getAll();
        $this->load->view('user_list',$data);
        $html = $this->output->get_output();
        $this->load->library('pdf');

        $this->dompdf->loadHtml($html);

        $this->dompdf->setPaper('A4', 'landscape');
        $this->dompdf->render();
        $this->dompdf->stream("welcome.pdf", array("Attachment"=>0));
    }
} 