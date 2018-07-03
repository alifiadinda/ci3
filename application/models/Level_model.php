<?php
class Level_model extends CI_Model{

	public function get_level(){
		$query = $this->db->get('levels');
		return $query->result();
	}

	public function get_single($id)
	{
		$query = $this->db->query('select * from levels where level_id='.$id);
		return $query->result();
	}

	public function create_level()
   	{
       $data = array(
         'level_id'          => $this->input->post('level_id'),
           'nama_level'          => $this->input->post('nama_level'),
       );
       return $this->db->insert('levels', $data);
   }

   public function update($id){
			$data = array(
       // 'level_id' => $this->input->post('level_id'),
				'nama_level' => $this->input->post('nama_level'),
			);
		$this->db->where('level_id',$id);
		$this->db->update('levels', $data);
	}

	public function Hapus($id){
		$query = $this->db->query('DELETE from levels where level_id = '.$id);
	}

	
	public function generate_level_dropdown()
   {
       $this->db->select ('
           levels.level_id,
           levels.nama_level
       ');
       $result = $this->db->get('levels');

       // Membuat array dropdown
       // Baris pertama select (default)
       $dropdown[''] = 'Please Select';
       if ($result->num_rows() > 0) {
         
           foreach ($result->result_array() as $row) {
               // Buat array berisi 'value' (id kategori) dan 'nama' (nama kategori)
               $dropdown[$row['level_id']] = $row['nama_level'];
           }
       }
       return $dropdown;
   }


}