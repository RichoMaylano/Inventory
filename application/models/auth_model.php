<?php

class auth_model extends CI_Model
{
     public function get_single_row_admin_by_email($email)
     {
          $query = $this->db->get_where('admin', array('email' => $email));
          return $query->row();
     }

     public function get_single_row_user_by_email($email)
     {
          $query = $this->db->get_where('users', array('email' => $email));
          return $query->row();
     }

     public function register($enc_password)
     {
          // User data array
          $data = array(
               'id' => $this->input->post('id_user'),
               'username' => $this->input->post('username'),
               'divisi' => $this->input->post('divisi'),
               'email' => $this->input->post('email'),
               'phone' => $this->input->post('phone'),
               'password' => $enc_password
          );

          // Insert user
          return $this->db->insert('users', $data);
     }

     // Check email exists
     public function check_email_exists($email)
     {
          $query = $this->db->get_where('user', array('email' => $email));
          if (empty($query->row_array())) {
               return true;
          } else {
               return false;
          }
     }

     // Check id_user exists
     public function check_id_user_exists($id_user)
     {
          $query = $this->db->get_where('users', array('id' => $id_user));
          if (empty($query->row_array())) {
               return true;
          } else {
               return false;
          }
     }

     // Check username exists
     public function check_username_exists($username)
     {
          $query = $this->db->get_where('users', array('username' => $username));
          if (empty($query->row_array())) {
               return true;
          } else {
               return false;
          }
     }

     public function get_single_row_detail_user($id)
     {
          $query = $this->db->get_where('users', array('id' => $id));
          return $query->row();
     }

     public function get_single_row_detail_admin($id)
     {
          $query = $this->db->get_where('admin', array('id' => $id));
          return $query->row();
     }

     public function get_single_row_inventory_by_id($id)
     {
          $query = $this->db->get_where('inventory', array('id_barang' => $id));
          return $query->row();
     }

     public function get_single_row_inventory($id)
     {
          $query = $this->db->get_where('inventory', array('id' => $id));
          return $query->row();
     }

     public function get_single_row_user_by_id($id)
     {
          $query = $this->db->get_where('users', array('id' => $id));
          return $query->row();
     }

     public function get_single_row_user($id)
     {
          $query = $this->db->get_where('users', array('id' => $id));
          return $query->row();
     }

     public function delete_user($id)
     {
          $this->db->delete('users', array('id' => $id));
          return ($this->db->affected_rows() > 0);
     }

     public function get_single_row_item($id)
     {
          $query = $this->db->get_where('inventory', array('id' => $id));
          return $query->row();
     }

     public function delete_item($id)
     {
          $this->db->delete('inventory', array('id' => $id));
          return ($this->db->affected_rows() > 0);
     }


     public function get_all_inventory()
     {
          $query = $this->db->query("select * from inventory");
          return $query->result();
     }

     public function get_all_request(){
          $query = $this->db->query("select * from request");
          return $query->result();
     }

     public function get_all_user()
     {
          $query = $this->db->query("select * from users");
          return $query->result();
     }

     public function get_all_admin()
     {
          $query = $this->db->query("select * from admin");
          return $query->result();
     }

     public function add_inventory($data)
     {
          $insert = $this->db->insert("inventory", $data);
          return $insert;
     }

     public function add_user($data)
     {
          $insert = $this->db->insert("users", $data);
          return $insert;
     }

     public function update_inventory($data, $id)
     {
          $this->db->where('id', $id);
          $this->db->update('inventory', $data);
          return ($this->db->affected_rows() > 0);
     }

     public function set_admin($data, $id)
     {
          $this->db->insert("admin", $data);
          $this->db->delete('users', array('id' => $id));
          return ($this->db->affected_rows() > 0);
     }

     public function get_log_by_id_barang($id)
     {
          $query = $this->db->get_where('log', array('id_barang' => $id));
          return $query->result();
     }

     public function pakai_inventory($tersedia_now, $id){
          $this->db->set('tersedia', $tersedia_now, FALSE);
          $this->db->where('id', $id);
          $this->db->update('inventory');

          return ($this->db->affected_rows() > 0);
     }

     public function update_log($data){
          $this->db->insert("log", $data);
          return ($this->db->affected_rows() > 0);
     }

     public function add_request($data){
          $this->db->insert("request", $data);
          return ($this->db->affected_rows() > 0);
     }
}
