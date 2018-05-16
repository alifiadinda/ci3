<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

	public function get_artikels( $limit = FALSE, $offset = FALSE ){
		
       // Jika variable $limit ada pada parameter maka kita limit query-nya
       if ( $limit ) {
           $this->db->limit($limit, $offset);
       }
       // Urutkan berdasar tanggal
       $this->db->order_by('blog.tanggal_blog', 'DESC');

       // Inner Join dengan table Categories
       $this->db->join('categories', 'categories.id_cat = blog.id_cat');
      
       $query = $this->db->get('blog');

       // Return dalam bentuk object
       return $query->result();

	}	

	   public function get_total()
   {
       // Dapatkan jumlah total artikel
       return $this->db->count_all("blog");
   }

	public function get_single($id)
	{
		$query = $this->db->query('select * from blog where id_blog='.$id);
		return $query->result();
	}

	 public function get_artikel_by_id($id)
    {
        $query = $this->db->get_where('blog', array('id_blog' => $id));
        return $query->row();
    }

     public function get_artikel_by_slug($slug)
        {

             // Inner Join dengan table category
            $this->db->select ( '
                blog.*, 
                categories.id as as_category_id, 
                categories.cat_name,
                categories.cat_description,
            ' );
            $this->db->join('categories', 'categories.id = categories.id_cat');
            
            $query = $this->db->get_where('blog', array('post_slug' => $slug));

            // Karena datanya cuma 1, kita return cukup via row() saja
            return $query->row();
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
			'penulis' => $this->input->post('input_penulis'),
			'sumber' => $this->input->post('input_sumber'),
			'lokasi_penulisan' => $this->input->post('input_lokasi_penulisan'),
			'id_cat' => $this->input->post('id_cat')
		);

		$this->db->insert('blog', $data);
	}

	public function delete($id_blog){
		$query = $this->db->query('DELETE from blog where id_blog= '.$id_blog);
		}

	   public function update($data, $id) 
        {
            if ( !empty($data) && !empty($id) ){
                $update = $this->db->update( 'blog', $data, array('id_blog'=>$id) );
                return $update ? true : false;
            } else {
                return false;
            }
        }
	
}