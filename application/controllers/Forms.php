<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load all models and helpers required
        $this->load->model('Modal_admin', 'modal_admin');
        $this->load->model('User_model');
        $this->load->library(['email', 'upload', 'session']);
        $this->load->helper(['string', 'url', 'form']);
    }

    // ====================== PROFILE ====================== //
    public function profile() {
        $id = $this->input->post('profileid');
        $data = [
            'name'      => $this->input->post('name'),
            'email'     => $this->input->post('email'),
            'number'    => $this->input->post('number'),
            'number2'   => $this->input->post('number2'),
            'address'   => $this->input->post('address'),
            'facebook'  => $this->input->post('facebook'),
            'instagram' => $this->input->post('instagram'),
            'linkedin'  => $this->input->post('linkedin'),
            'twitter'   => $this->input->post('twitter')
        ];

        $upload_fields = ['logo', 'darklogo', 'favicon'];
        foreach ($upload_fields as $field) {
            if (!empty($_FILES[$field]['name'])) {
                $config['upload_path'] = 'uploads/logo/';
                $config['allowed_types'] = '*';
                $this->upload->initialize($config);
                if ($this->upload->do_upload($field)) {
                    $upload_data = $this->upload->data();
                    $data[$field] = $upload_data['file_name'];
                } else {
                    echo $this->upload->display_errors();
                }
            }
        }

        $this->modal_admin->profileinput($data, $id);
        redirect('admin/index');
    }

    // ====================== BLOG ====================== //
    public function blog() {
        $this->load->library('form_validation');

        $id = $this->input->post('bid');

        // Set validation rules
        $this->form_validation->set_rules('bname', 'Blog Title', 'required|trim');
        $this->form_validation->set_rules('bdesc', 'Blog Content', 'required|trim');

        // Image is required only for new blogs (when id is empty)
        if (empty($id)) {
            $this->form_validation->set_rules('image', 'Blog Image', 'callback_image_required');
        }

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, redirect back with errors
            $this->session->set_flashdata('validation_errors', validation_errors());
            $this->session->set_flashdata('form_data', $this->input->post());
            redirect('admin/blogadd/' . $id);
        } else {
            // Validation passed, process the form
            $data['bname'] = $this->input->post('bname');
            $data['bdesc'] = $this->input->post('bdesc');

            if (!empty($_FILES['image']['name'])) {
                $config['upload_path'] = 'uploads/blog/';
                $config['allowed_types'] = '*';
                $this->upload->initialize($config);

                if (!$this->upload->do_upload('image')) {
                    $this->session->set_flashdata('upload_error', $this->upload->display_errors());
                    redirect('admin/blogadd/' . $id);
                } else {
                    $logo = $this->upload->data();
                    $data['image'] = $logo['file_name'];
                }
            }

            $this->modal_admin->blog($data, $id);
            redirect('admin/bloglist');
        }
    }

    // Custom callback for image validation
    public function image_required() {
        if (empty($_FILES['image']['name'])) {
            $this->form_validation->set_message('image_required', 'The Blog Image field is required.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function blogid() {
        $id = $this->input->post('id');
        if (empty($id)) {
            echo json_encode(['error' => 'ID is required']);
            return;
        }
        $data = $this->modal_admin->blogid($id);
        echo json_encode($data ?: ['error' => 'No data found for this ID']);
    }

    public function removeblog($id) {
        $this->modal_admin->removeblog($id);
        redirect('admin/bloglist');
    }

    // ====================== event ====================== //
    public function event() {
        $id = $this->input->post('id');
        

        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = 'uploads/event/';
            $config['allowed_types'] = '*';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $logo = $this->upload->data();
                $data['eimage'] = $logo['file_name'];
            }
        }

        $this->modal_admin->event($data, $id);
        redirect('admin/eventlist');
    }

    public function eventid() {
        $id = $this->input->post('id');
        if (empty($id)) {
            echo json_encode(['error' => 'ID is required']);
            return;
        }
        $data = $this->modal_admin->eventid($id);
        echo json_encode($data ?: ['error' => 'No data found for this ID']);
    }

    public function eventdelete()
{
    $id = $this->input->post('id');

    $event = $this->db->get_where('event', ['id' => $id])->row_array();

    if($event)
    {
        @unlink(FCPATH.'uploads/event/'.$event['eimage']);
        $this->db->where('id', $id)->delete('event');
        echo 'success';
    }
}


 // ====================== PRODUCT ====================== //
public function product()
{
    $this->load->library('upload');

    // 🔑 ID (for edit)
    $id = $this->input->post('id'); // MUST be hidden field name="pid"
    // $this->modal_admin->save_product($data, $id);

    $data = [];

    /* ---------- IMAGE UPLOAD ---------- */
    if (!empty($_FILES['image']['name'])) {
        $config['upload_path']   = './uploads/product/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['encrypt_name']  = true;

        $this->upload->initialize($config);

        if ($this->upload->do_upload('image')) {
            $uploadData     = $this->upload->data();
            $data['pimage'] = $uploadData['file_name'];
        }
    }

    /* ---------- FORM DATA ---------- */
    $data['ptitle']   = $this->input->post('ptitle', true);
    $data['pdec']     = $this->input->post('pdec', true);
    $data['category'] = $this->input->post('category_id', true);

    /* ---------- SAVE LOGIC ---------- */
    
    if (!empty($id)) {
        $this->modal_admin->save_product($data, $id);
        $this->session->set_flashdata('success', 'Product updated successfully');
    } else {
        $this->modal_admin->save_product($data);
        $this->session->set_flashdata('success', 'Product added successfully');
    }

    redirect('admin/productlist');
}


public function productid() {
    $id = $this->input->post('id');
    $data = $this->modal_admin->productid($id);
    echo json_encode($data);
}

public function removeproduct($id) {
        $this->modal_admin->delete_product($id);
    redirect('admin/productlist');
}



    // ====================== LOGIN / LOGOUT ====================== //
    public function login() {
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $user = $this->modal_admin->login($username);
       
        if ($user && $password===$user->password) {
            $this->session->set_userdata('admin_logged_in', true);
            $this->session->set_userdata('admin_username', $username);
            redirect('admin/index');
        } else {
            $this->session->set_flashdata('error', 'Invalid Username or Password');
            redirect('admin/login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('admin/login');
    }

    // ====================== FORGOT PASSWORD ====================== //
    public function forgot_password() {
        $this->load->view('admin/forgot_password');
    }

    public function send_otp() {
        $email = $this->input->post('email');   

        $otp = random_string('numeric', 4);
        $this->session->set_userdata('otp', $otp);
            $this->session->set_userdata('reset_email', $email);
            // Email Configuration
            $config['protocol']    = 'smtp';
            $config['smtp_host']   = 'smtp.gmail.com';
            $config['smtp_port']   = 465;
            $config['smtp_user']   = 'nexmoves.abhay@gmail.com';  // Replace with your email
            $config['smtp_pass']   = 'ocrbusrtqftuomuh';          // Replace with Gmail App Password
            $config['mailtype']    = 'html';
            $config['charset']     = 'utf-8';
            $config['newline']     = "\r\n";
            $config['smtp_crypto'] = 'ssl';
            $config['wordwrap']    = TRUE;
    
            $this->email->initialize($config);
            $this->email->from('consoleops07@gmail.com', 'Consoleops');
            $this->email->to($email);
            $this->email->subject('OTP Verification');
            // Email Message with OTP Card
            $message = '
            <html>
            <head>
                <style>
                    .email-container {
                        font-family: Arial, sans-serif;
                        padding: 20px;
                        background-color: #f4f4f4;
                    }
                    .card {
                        max-width: 400px;
                        margin: 0 auto;
                        padding: 20px;
                        background: #ffffff;
                        border-radius: 10px;
                        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
                        text-align: center;
                    }
                    .card h2 {
                        color: #28a745;
                    }
                    .otp {
                        font-size: 24px;
                        font-weight: bold;
                        color: #333;
                        margin: 15px 0;
                        padding: 10px;
                        background: #e3fceb;
                        display: inline-block;
                        border-radius: 5px;
                    }
                    .footer {
                        margin-top: 20px;
                        font-size: 12px;
                        color: #777;
                    }
                </style>
            </head>
            <body class="email-container">
                <div class="card">
                    <h2>OTP Verification</h2>
                    <p>Your One Time Password (OTP) is:</p>
                    <div class="otp">' . $otp . '</div>
                    <p>Please use this OTP to verify your account. Do not share it with anyone.</p>
                </div>
            </body>
            </html>';
    
            $this->email->message($message);
    
            if($this->email->send()){
                echo json_encode(['status' => 'success', 'message' => 'OTP sent to your email']);
        redirect('Forms/verify_otp');

            }else{
                echo json_encode(['status' => 'Fail', 'message' => 'OTP sent to your email']);
        redirect('Forms/forgot_password');


            }
       
    }

    public function verify_otp() {
        $data['email'] = $this->input->get('email');
        $this->load->view('admin/two_step_verification', $data);
    }

    public function check_otp() {
        $otp = $this->input->post('digit-1').$this->input->post('digit-2').$this->input->post('digit-3').$this->input->post('digit-4');
        
        if ($this->session->userdata('otp') == $otp) {
            echo json_encode(['status' => 'success', 'message' => 'OTP Verified']);
             redirect('forms/reset_password');
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid OTP']);
            redirect('forms/verify_otp');
        }
    }

    public function reset_password() {
        $data['email'] = $this->input->get('email');
        $this->load->view('admin/reset_password', $data);
    }

    public function update_password() {
        $email = $this->input->post('email');
        if ($this->input->post('confirm_password')==$this->input->post('password')) {
            $new_pass = ($this->input->post('password'));

            $this->User_model->update_password($email, $new_pass);
            $this->session->set_flashdata('success', 'Password updated successfully! Please login.');
            redirect('admin/login');
        }else{
            redirect('forms/reset_password');
        }
        
    }

    public function service(){
        $id=$this->input->post('bid');
        $data['sname']=$this->input->post('sname');
        $data['sdescription']=$this->input->post('sdescription');
        
        if (!empty($_FILES['image']['name'])) {
            $config['upload_path'] = 'uploads/service/';
            $config['allowed_types'] = '*';
            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $logo = $this->upload->data();
                $data['simage'] = $logo['file_name'];
            }
        }

        $this->modal_admin->service($data,$id);
        redirect('admin/servicelist');
    }

     public function removeservice($id){
        $this->modal_admin->removeservice($id);
        redirect('admin/servicelist');
    }

    public function category(){
        $id=$this->input->post('c_id');
        $data['cname']=$this->input->post('ctitle');

        $this->modal_admin->aucategory($data,$id);

        redirect('admin/category');
    }

    public function subcategory(){
        $id=$this->input->post('c_id');
        $data['cat_id']=$this->input->post('cat_id');
        $data['sub_cat']=$this->input->post('sub_cat');

        $this->modal_admin->ausub_cat($data,$id);

        redirect('admin/category');
    }

    public function get_category(){
        $id=$this->input->post('cid');
        $data=$this->modal_admin->get_cateory($id);

        echo json_encode($data);
    }

    public function delete_category($id){
        $this->modal_admin->delete_category($id);
        redirect('admin/category');
    }

    public function productadd($id = '')
{
    $data['category'] = $this->modal_admin->get_all_categories(); 
    $data['product'] = $this->modal_admin->productid($id); 

    $this->load->view('admin/web/header');
    $this->load->view('admin/product/productform', $data);       
    $this->load->view('admin/web/footer');
}

}
