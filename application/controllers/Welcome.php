<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function header(){
		$data['profile'] = $this->modal_admin->profile();
		$data['category']=$this->modal_admin->gets_category();
		$data['subcategory']=$this->modal_admin->gets_products();
		$this->load->view('web/header', $data);
	}

	public function footer(){
		$data['profile'] = $this->modal_admin->profile();
		$data['category']=$this->modal_admin->gets_category();
		$this->load->view('web/footer', $data);
	}


	public function index()
	{
		$data['profile']=$this->modal_admin->profile();
		$data['blog']=$this->modal_admin->blog();
		// $data['casestudy']=$this->modal_admin->casestudy();
		$data['service']=$this->modal_admin->service();

		// echo '<pre>';
		// print_r($data['profile']);
		// exit;
		
		$this->header(); // path to your header view file
		$this->load->view('home', $data);
		$this->footer(); // path to your footer view file

	}


	public function about()
	{	
		$data['profile']=$this->modal_admin->profile();

		$this->header(); // path to your header view file
		$this->load->view('about',$data);
		$this->footer();
	}


	public function service()
	{	
		$data['profile']=$this->modal_admin->profile();
		$data['service']=$this->modal_admin->service();

		$this->header();
		$this->load->view('service',$data);
		$this->footer();
	}

	public function services_detail($id){
		$data['profile']=$this->modal_admin->profile();
		$data['service']=$this->modal_admin->serviceid($id);
		$data['all_services']=$this->modal_admin->service();

		$this->header();
		$this->load->view('services_detail',$data);
		$this->footer();
	}

	public function event()
	{	
		$data['profile']=$this->modal_admin->profile();
		$data['event']=$this->modal_admin->event();

		$this->header();
		$this->load->view('event',$data);
		$this->footer();
	}

	public function c_detail($id='')
	{	
		$data['profile']=$this->modal_admin->profile();
		$data['case']=$this->modal_admin->casestudyid($id);

		$this->header();
		$this->load->view('casestudy_detail',$data);
		$this->footer();
	}
	
	public function blog()
	{	
		$data['profile']=$this->modal_admin->profile();
		$data['blog']=$this->modal_admin->blog();

		$this->header(); // path to your header view file
		$this->load->view('blog',$data);
		$this->footer();
	}

	public function b_detail($id)
{	
    
    $data['profile'] = $this->modal_admin->profile();
    $data['single_blog'] = $this->modal_admin->blogid($id);

    $this->header();
    $this->load->view('b_detail', $data);
    $this->footer();
}


	public function career ()
	{	
		$data['profile']=$this->modal_admin->profile();
		$data['career']=$this->modal_admin->career();

		$this->header();
		$this->load->view('career',$data);
		$this->footer();
	}
	
	public function contact()
	{	
		$data['profile']=$this->modal_admin->profile();

		$this->header();
		$this->load->view('contact',$data);
		$this->footer();
	}

	public function p2($name,$id='')
	{	
		 $data['product'] = $this->modal_admin->get_product_by_id($id);
		$data['all_products'] = $this->modal_admin->gets_products(str_replace('_',' ',$name));

		$this->header();
		$this->load->view('p2',$data);
		$this->footer();
	}

	public function reset_password()
	{	
		$data['profile']=$this->modal_admin->profile();

		
		$this->load->view('reset_password',$data);
	}

	public function forgot_password()
	{	
		$data['profile']=$this->modal_admin->profile();

		
		$this->load->view('forgot_password',$data);
	}

	public function email_verification()
	{	
		$data['profile']=$this->modal_admin->profile();

		
		$this->load->view('email_verification',$data);
	}

	public function two_step_verification()
	{	
		$data['profile']=$this->modal_admin->profile();

		
		$this->load->view('two_step_verification',$data);
	}

	public function success()
	{	
		$data['profile']=$this->modal_admin->profile();

		$this->load->view('success',$data);
	}
	
		public function terms()
	{	
		$data['profile']=$this->modal_admin->profile();

		
		$this->load->view('terms',$data);
		
	}

		public function privacyp()
	{	
		$data['profile']=$this->modal_admin->profile();

		
		$this->load->view('privacyp',$data);
	
	}


	
}
