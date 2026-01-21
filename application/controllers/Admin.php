<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	// public function __construct() {
    //     parent::__construct();
    //     $this->load->library('session');
    //     $this->user = $this->session->userdata('is_login');
    // }
	
	public function index(){

		// if($this->user==true){

 		$data['profile'] = $this->modal_admin->profile();

		$this->load->view('admin/web/header');
		$this->load->view('admin/profile/profile', $data);

		// }else{
        //     redirect('admin/login');
        // }
	}

	public function eventlist(){
		$data['event'] = $this->modal_admin->all_event();
		$this->load->view('admin/web/header');
		$this->load->view('admin/event/eventlist',$data);
	}

public function eventadd($id = '')
{
    // ===== EDIT MODE =====
    if (!empty($id)) {

        $data['event'] = $this->modal_admin->eventid($id);

        if (!$data['event']) {
            show_error('Event not found.');
        }

        // UPDATE IMAGE
        if ($this->input->post()) {

            if (!empty($_FILES['eimage']['name'])) {

                // delete old image
                @unlink('./uploads/event/' . $data['event']->eimage);

                $config['upload_path']   = './uploads/event/';
                $config['allowed_types'] = 'jpg|jpeg|png|webp';
                $config['encrypt_name']  = true;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('eimage')) {
                    $update['eimage'] = $this->upload->data('file_name');
                    $this->db->where('id', $id)->update('event', $update);
                }
            }

            redirect('admin/event');
        }

    } 
    // ===== ADD MODE (BULK UPLOAD) =====
    else {

        $data['event'] = null;

        if ($this->input->post() && !empty($_FILES['eimage']['name'][0])) {

            $files = $_FILES['eimage'];
            $count = count($files['name']);

            for ($i = 0; $i < $count; $i++) {

                $_FILES['file']['name']     = $files['name'][$i];
                $_FILES['file']['type']     = $files['type'][$i];
                $_FILES['file']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['file']['error']    = $files['error'][$i];
                $_FILES['file']['size']     = $files['size'][$i];

                $config['upload_path']   = './uploads/event/';
                $config['allowed_types'] = 'jpg|jpeg|png|webp';
                $config['encrypt_name']  = true;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file')) {
                    $insert['eimage'] = $this->upload->data('file_name');
                    $this->db->insert('event', $insert);
                }
            }

            redirect('admin/event');
        }
    }

    // LOAD VIEW
    $this->load->view('admin/web/header');
    $this->load->view('admin/event/eventadd', $data);
}



	public function servicelist(){
 		$data['service'] = $this->modal_admin->service();

		$this->load->view('admin/web/header');
		$this->load->view('admin/service/servicelist',$data);
	}

	public function serviceadd($id=''){
		$data['service']=$this->modal_admin->serviceid($id);
		$this->load->view('admin/web/header');
		$this->load->view('admin/service/serviceadd',$data);
	}

	public function category(){
		$data['category']=$this->modal_admin->all_category();
		$data['category'] = $this->modal_admin->get_all_categories();
		$this->load->view('admin/web/header');
		$this->load->view('admin/products/category',$data);
	}

	public function productlist(){
 		$data['products'] = $this->modal_admin->get_all_products();

		$this->load->view('admin/web/header');
		$this->load->view('admin/products/list',$data);
	}

	public function productadd($id=''){
    $data['product']=$this->modal_admin->get_product_by_id($id); 
		$data['category']=$this->modal_admin->all_category();

    $this->load->view('admin/web/header');
    $this->load->view('admin/products/add',$data);
}
	
	public function bloglist(){
 		$data['blog'] = $this->modal_admin->all_blog();

		$this->load->view('admin/web/header');
		$this->load->view('admin/blogs/bloglist',$data);
	}

	public function blogadd($id=''){
		$data['blog']=$this->modal_admin->blogid($id);
		$this->load->view('admin/web/header');
		$this->load->view('admin/blogs/blogadd',$data);
	}

	 public function careerlist(){
		$data['career'] = $this->modal_admin->all_career();
		$this->load->view('admin/web/header');
		$this->load->view('admin/career/careerlist',$data);
	}

	public function careeradd($id = '')
{
    if (!empty($id)) {
        $data['career'] = $this->modal_admin->careerid($id);
        if (!$data['career']) {
            show_error('Case study not found.');
        }
    } else {
        $data['career'] = null; // For add mode
    }

    $this->load->view('admin/web/header');
    $this->load->view('admin/career/careeradd', $data);
}

	public function login(){
		$this->load->view('admin/login');
	}
	
	public function admin_dashboard()
{	
    $data['profile'] = $this->modal_admin->profile();

    // Count records from DB
    $data['product_count'] = $this->modal_admin->count_products();
    $data['service_count'] = $this->modal_admin->count_services();
    $data['blog_count']    = $this->modal_admin->count_blogs();
    $data['event_count']   = $this->modal_admin->count_events();

    $this->load->view('admin/web/header');
    $this->load->view('admin/admin_dashboard', $data);
}
}
?>
