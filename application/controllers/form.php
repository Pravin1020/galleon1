<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

    private function email_config()
    {
        return [
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.hostinger.com',
            'smtp_port' => 587,
            'smtp_user' => 'email@nexmoves.in',
            'smtp_pass' => 'Nexmove@24',
            'charset'   => 'utf-8',
            'newline'   => "\r\n",
            'mailtype'  => 'html'
        ];
    }

    public function index(){
        echo 123;
    }

public function contact()
{
    $this->load->library(['email', 'form_validation', 'session']);
    $this->email->initialize($this->email_config());

    /* Validation */
    $this->form_validation->set_rules('name', 'Organisation Name', 'required|min_length[3]');
    $this->form_validation->set_rules('onname', 'Owner Name', 'required|min_length[3]');
    $this->form_validation->set_rules(
        'mobile',
        'Mobile Number',
        'required|regex_match[/^[6-9]{1}[0-9]{9}$/]',
        ['regex_match' => 'Enter valid 10 digit mobile number']
    );
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('location', 'Location', 'required|min_length[2]');
    $this->form_validation->set_rules('subject', 'Subject', 'required|min_length[3]');
    $this->form_validation->set_rules('message', 'Message', 'required|min_length[10]');

    /* Validation Failed */
    if ($this->form_validation->run() == FALSE) {
        $this->session->set_flashdata('error', validation_errors());
        redirect($_SERVER['HTTP_REFERER']);
        return;
    }

    /* Input */
    $data = [
        'name'     => $this->input->post('name', true),
        'onname'   => $this->input->post('onname', true),
        'mobile'   => $this->input->post('mobile', true),
        'email'    => $this->input->post('email', true),
        'location' => $this->input->post('location', true),
        'subject'  => $this->input->post('subject', true),
        'message'  => $this->input->post('message', true),
    ];

    /* Email */
    $this->email->from('email@nexmoves.in', 'Galleon');
    $this->email->to('pravin@nexmoves.in');
    $this->email->subject('New Contact Form Submission');
    $this->email->set_mailtype('html');

    $body = "
        <p><strong>Organisation:</strong> {$data['name']}</p>
        <p><strong>Owner Name:</strong> {$data['onname']}</p>
        <p><strong>Mobile:</strong> {$data['mobile']}</p>
        <p><strong>Email:</strong> {$data['email']}</p>
        <p><strong>Location:</strong> {$data['location']}</p>
        <p><strong>Subject:</strong> {$data['subject']}</p>
        <p><strong>Message:</strong> {$data['message']}</p>
    ";

    $this->email->message($body);

    if ($this->email->send()) {
        $this->session->set_flashdata('success', 'Message sent successfully');
    } else {
        $this->session->set_flashdata('error', 'Message sending failed');
    }

    redirect('contact');
}

    /* ================= CAREER FORM ================= */
    public function career()
    {
        $this->load->library(['email', 'form_validation', 'upload']);
        $this->email->initialize($this->email_config());

        /* Validation */
        $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]');
        $this->form_validation->set_rules('number', 'Mobile', 'required|regex_match[/^[6-9]{1}[0-9]{9}$/]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('position', 'Position', 'required');

        if ($this->form_validation->run() == FALSE) {
            echo strip_tags(validation_errors());
            return;
        }

        /* Upload Config */
        $upload_config = [
            'upload_path'   => './upload/resume/',
            'allowed_types' => 'pdf|doc|docx',
            'max_size'      => 2048,
            'encrypt_name'  => true
        ];
        $this->upload->initialize($upload_config);

        $resume_path = '';

        if (!empty($_FILES['resume']['name'])) {
            if ($this->upload->do_upload('resume')) {
                $resume_path = $this->upload->data('full_path');
            } else {
                echo strip_tags($this->upload->display_errors());
                return;
            }
        }

        /* Input */
        $name     = $this->input->post('name', true);
        $number   = $this->input->post('number', true);
        $email    = $this->input->post('email', true);
        $position = $this->input->post('position', true);

        /* Email */
        $this->email->from('email@nexmoves.in', 'Valorem');
        $this->email->to('pravin@nexmoves.in');
        $this->email->subject('Career Application');

        $body = "
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Phone:</strong> {$number}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Position:</strong> {$position}</p>
        ";

        $this->email->message($body);

        if (!empty($resume_path)) {
            $this->email->attach($resume_path);
        }

        echo $this->email->send()
            ? 'Message sent successfully'
            : 'Message sending failed';
    }

    /* ================= ADMIN ================= */
    public function removeService($id)
    {
        if ($id) {
            $delete = $this->modal_admin->deleteService($id);
            $this->session->set_flashdata(
                $delete ? 'success' : 'error',
                $delete ? 'Service deleted successfully' : 'Failed to delete service'
            );
        } else {
            $this->session->set_flashdata('error', 'Invalid Service ID');
        }
        redirect('admin/servicelist');
    }
}
