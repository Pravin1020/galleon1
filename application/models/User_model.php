<?php
class User_model extends CI_Model {

    public function get_user_by_email($email){
        return $this->db->get_where('login', ['email' => $email])->row();
    }

    public function set_otp($email, $otp){
        $data = [
            'otp' => $otp,
            'otp_expire' => date('Y-m-d H:i:s', strtotime('+10 minutes'))
        ];
        $this->db->where('email', $email)->update('users', $data);
    }

    public function verify_otp($email, $otp){
        $user = $this->db->get_where('users', [
            'email' => $email,
            'otp' => $otp
        ])->row();

        if($user && strtotime($user->otp_expire) > time()){
            return true;
        }
        return false;
    }

    public function update_password($email, $password){
        $data = [
            'password' => $password
        ];
        $this->db->update('login', $data);
    }
}
