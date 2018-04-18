<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

	public function get_artikels(){
		$query = $this->db->get('blog');
		return $query->result();
	}	

	public function get_single($id)
	{
		$query = $this->db->query('select * from blog where id_blog='.$id);
		return $query->result();
	}

	public function get_default($id)
	{
		$data = array();
  		$options = array('id_blog' => $id);
  		$Q = $this->db->get_where('blog',$options,1);
    		if ($Q->num_rows() > 0){
      			$data = $Q->row_array();
   			}
  		$Q->free_result();
 		return $data;
	}

	public function upload()
	{
		$config['upload_path'] = './img/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size']  = '2048';
		$config['remove_space']  = TRUE;
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('input_gambar')){
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	public function insert($upload)
	{
		$data = array(
			'id_blog' => '',
			'judul_blog' => $this->input->post('input_judul'),
			'tanggal_blog' => $this->input->post('input_tanggal'),
			'content' => $this->input->post('input_content'),
			'image' => $upload['file']['file_name'],
			'penulis' => $this->input->post('penulis'),
			'sumber' => $this->input->post('sumber'),
			'lokasi_penulisan' => $this->input->post('lokasi_penulisan'),
		);

		$this->db->insert('blog', $data);
	}

	public function delete($id_blog){
		$query = $this->db->query('DELETE from blog where id_blog= '.$id_blog);
		}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$judul_blog = $this->db->escape($post['judul_blog']);
		$content = $this->db->escape($post['content']);
		$tanggal_blog= $this->db->escape($post['tanggal_blog']);
		$penulis = $this->db->escape($post['penulis']);
		$sumber = $this->db->escape($post['sumber']);
		$lokasi_penulisan = $this->db->escape($post['lokasi_penulisan']);
		$sql = $this->db->query("UPDATE blog SET judul_blog = $judul_blog, tanggal_blog = $tanggal_blog,  content = $content, penulis = $penulis, sumber = $sumber, lokasi_penulisan = $lokasi_penulisan WHERE id_blog = ".intval($id));

		return true;
	}
}