<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function register($enc_password){
        // Array data user 
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'kodepos' => $this->input->post('kodepos'),
            'fk_level_id' => $this->input->post('membership')
        );

        // Insert user
         return $this->db->insert('users', $data);
     }

     
     // Mendapatkan level user
    function get_user_level($user_id)
    {
        // Dapatkan data user berdasar $user_id
        $this->db->select('fk_level_id');
        $this->db->where('user_id', $user_id);

        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row(0)->fk_level_id;
        } else {
            return false;
        }
    }

    function get_user_details($username)
    {
        $this->db->join('levels', 'levels.level_id = users.fk_level_id', 'left');
        $this->db->where('username', $username);

        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row();
        } else {
            return false;
        }
    }

    // Proses login user
    public function login($username, $password){
        // Validasi
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('users');


        if($result->num_rows() == 1){
            return $result->row(0)->user_id;
        } else {
            return false;
        }
}

public function get_user(){
        $query = $this->db->get('users');
        return $query->result();
    }

    public function get_single($id)
    {
        $query = $this->db->query('select * from users where user_id='.$id);
        return $query->result();
    }

   public function update($id){
             $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
            'kodepos' => $this->input->post('kodepos'),
            'fk_level_id' => $this->input->post('membership')
            );
        //$this->db->where('level_id',$id);
        $this->db->update('users', $data);
    }

    public function Hapus($id){
        $query = $this->db->query('DELETE from users where user_id = '.$id);
    }


    public function generate_cat_dropdown()
   {
       $this->db->select ('
           users.user_id,
           users.nama
       ');
       $result = $this->db->get('users');

       // Membuat array dropdown
       // Baris pertama select (default)
       $dropdown[''] = 'Please Select';
       if ($result->num_rows() > 0) {
         
           foreach ($result->result_array() as $row) {
               // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
               $dropdown[$row['user_id']] = $row['nama'];
           }
       }
       return $dropdown;
   }
}