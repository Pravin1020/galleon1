<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modal_admin extends CI_Model {

    public function profileinput($data, $id){
        if ($id == '') {
            $this->db->insert('profile', $data);
            // return $this->db->insert_id();
        } else {
            $this->db->where('id', $id);
            $this->db->update('profile', $data);
            // return $id;
        }
    }

    public function profile(){
        $this->db->order_by('id', 'DESC');
        return $this->db->get('profile')->row();
    }

    public function profileid()
	{
        $this->db->select('*');
        $this->db->from('profile');
        $this->db->where('id',1);
        $query=$this->db->get();
        return $query->row();        
	}
    
    public function service($data = null, $id = null)
	{
        if ($data !== null && $id !== null) {
            // Insert or update  post
            if ($id == '') {
                $this->db->insert('service', $data);
                return $this->db->insert_id();
            } else {
                $this->db->where('id', $id);
                $this->db->update('service', $data);
                return $id;
            }
        } else {
            
            $this->db->select('*');
            $this->db->from('service');
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get();
            return $query->result_array();
        }
	}

    public function get_service_filename($id){
        $this->db->select('simage');
        $this->db->from('service');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();
    }

    public function serviceid($id){
        $this->db->select('*');
        $this->db->from('service');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();
    }

    public function removeservice($id){
        $this->db->where('id',$id);
        $this->db->delete('service');
    }

    public function deleteService($id)
{
    return $this->db->where('id', $id)->delete('service');
}
    
     public function blog($data = null, $id = null)
	{
        if ($data !== null && $id !== null) {
            // Insert or update blog post
            if ($id == '') {
                $this->db->insert('blog', $data);
                return $this->db->insert_id();
            } else {
                $this->db->where('id', $id);
                $this->db->update('blog', $data);
                return $id;
            }
        } else {
            // Retrieve all blog posts
            $this->db->select('*');
            $this->db->from('blog');
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get();
            return $query->result_array();
        }
	}

    public function get_blogo_filename($id){
        $this->db->select('image');
        $this->db->from('blog');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();
    }

    public function blogid($id){
        $this->db->select('*');
        $this->db->from('blog');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row_array();
    }

    public function removeblog($id){
        $this->db->where('id',$id);
        $this->db->delete('blog');
    }

    public function get_single_blog($id)
{
    return $this->db->get_where('blog', ['id' => $id])->row_array();
}

    public function event($data = null, $id = null)
{
    if ($data !== null && !empty($id)) {
        // update
        $this->db->where('id', $id);
        $this->db->update('event', $data);
        return $id;
    } elseif ($data !== null) {
        
        $this->db->insert('event', $data);
        return $this->db->insert_id();
    } else {
        
        $this->db->select('*');
        $this->db->from('event');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
}

public function get_event_filename($id)
{
    $this->db->select('image');
    $this->db->from('event');
    $this->db->where('id', $id);
    $q = $this->db->get();
    return ($q->num_rows() > 0) ? $q->row() : null;
}

    public function eventid($id){
        $this->db->select('*');
        $this->db->from('event');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();
    }

    public function removeevent($id){
        $this->db->where('id',$id);
        $this->db->delete('event');
    }

    public function all_event(){
        $this->db->select('*');
        $this->db->from('event');
        $query=$this->db->get();
        return $query->result_array();
    }

    public function all_blog(){
        $this->db->select('*');
        $this->db->from('blog');
        $query=$this->db->get();
        return $query->result_array();
    }

        public function career($data = null, $id = null)
	{
        if ($data !== null && $id !== null) {
            // Insert or update career post
            if ($id == '') {
                $this->db->insert('career', $data);
                return $this->db->insert_id();
            } else {
                $this->db->where('id', $id);
                $this->db->update('career', $data);
                return $id;
            }
        } else {
            // Retrieve all career posts
            $this->db->select('*');
            $this->db->from('career');
            $this->db->order_by('id', 'DESC');
            $query = $this->db->get();
            return $query->result_array();
        }
	}

    public function get_careero_filename($id){
        $this->db->select('image');
        $this->db->from('career');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();
    }

    public function careerid($id){
        $this->db->select('*');
        $this->db->from('career');
        $this->db->where('id',$id);
        $query=$this->db->get();
        return $query->row();
    }

    public function removecareer($id){
        $this->db->where('id',$id);
        $this->db->delete('career');
    }


     public function all_career(){
        $this->db->select('*');
        $this->db->from('career');
        $query=$this->db->get();
        return $query->result_array();
    }

    public function login($username){
        $this->db->where('username', $username);
        return $this->db->get('login')->row();
    }

    public function check_login($username, $password)
{
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $query = $this->db->get('login'); // Change to your table name if different
    return $query->row();
}

  // ====================== PRODUCT ====================== //
public function save_product($data, $id = null){
    if ($id) {
        return $this->db->where('id', $id)->update('product', $data);
    } else {
        return $this->db->insert('product', $data);
    }
}

public function get_product_by_id($id){
    return $this->db->where('id', $id)->get('product')->row();
}

public function gets_products($name=''){
    $this->db->select('*');
    $this->db->from('product');
    if($name!=''){
    $this->db->where('category', $name);
    }
    $query=$this->db->get();
    return $query->result_array();
}

public function get_all_products(){
    return $this->db->order_by('id', 'DESC')->get('product')->result_array();
}


public function delete_product($id){
    return $this->db->where('id', $id)->delete('product');
}

public function aucategory($data, $id){
    if ($id=='') {
        return $this->db->insert('category', $data);
    } else {
        $this->db->where('id', $id);
        return $this->db->update('category', $data);
    }
    
}

public function ausub_cat($data, $id){
    if ($id=='') {
        return $this->db->insert('sub_category', $data);
    } else {
        $this->db->where('id', $id);
        return $this->db->update('sub_category', $data);
    }
    
}

public function all_category(){
    return $this->db->order_by('id', 'DESC')->get('category')->result_array();
}

public function get_cateory($id){
    return $this->db->where('id', $id)->get('category')->row();
}

public function gets_category(){
    return  $this->db->select('*')
                ->get('category')
                ->result_array();;
}

public function gets_subcategory(){
    return  $this->db->select('*')
                ->get('sub_category')
                ->result_array();;
}

public function delete_category($id){
    return $this->db->where('id', $id)->delete('category');
}

public function get_all_categories(){
    return $this->db->order_by('id', 'ASC')->get('category')->result_array();
}

    public function count_products() {
        return $this->db->count_all('product');
    }

    public function count_services() {
        return $this->db->count_all('service');
    }

    public function count_blogs() {
        return $this->db->count_all('blog');
    }

    public function count_events() {
        return $this->db->count_all('event');
    }
}
