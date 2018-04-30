<?php
class Category_model extends CI_Model{

	public function get_category(){
		$query = $this->db->get('categories');
		return $query->result();
	}

	public function get_single($id)
	{
		$query = $this->db->query('select * from categories where id_cat='.$id);
		return $query->result();
	}

	public function create_category()
   	{
       $data = array(
           'cat_name'          => $this->input->post('cat_name'),
           'cat_description'   => $this->input->post('cat_description')
       );
       return $this->db->insert('categories', $data);
   }

   public function update($id){
			$data = array(
				'cat_name' => $this->input->post('cat_name'),
				'cat_description' => $this->input->post('deskripsi')
			);
		$this->db->where('id_cat',$id);
		$this->db->update('categories', $data);
	}

	public function Hapus($id){
		$query = $this->db->query('DELETE from categories where id_cat = '.$id);
	}

	
	public function generate_cat_dropdown()
   {
       $this->db->select ('
           categories.id_cat,
           categories.cat_name
       ');
       $result = $this->db->get('categories');

       // Membuat array dropdown
       // Baris pertama select (default)
       $dropdown[''] = 'Please Select';
       if ($result->num_rows() > 0) {
         
           foreach ($result->result_array() as $row) {
               // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
               $dropdown[$row['id_cat']] = $row['cat_name'];
           }
       }
       return $dropdown;
   }


}