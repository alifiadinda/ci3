<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
		parent::__construct();		
		
		$this->load->model('category_model');
	}

	public function index()
	{
		$this->load->model('artikel');
		$data['artikel'] = $this->artikel->get_artikels();
		$this->load->view('home_view', $data);
	}

	public function detail($id)
	{
		$this->load->model('artikel');
		$data['detail'] = $this->artikel->get_single($id);
		$this->load->view('home_detail', $data);
	}

		public function tambah()
	{
		$this->load->model('artikel');
		$data['categories'] = $this->category_model->generate_cat_dropdown();

		$this->load->library('form_validation');
		$this->form_validation->set_rules('input_judul','judul_blog','required',array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_tanggal','tanggal_blog','required',array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_content','content','required',array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_content','content','required',array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_penulis','penulis','required',array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_sumber','sumber','required',array('required' => 'isi %s, '));
		$this->form_validation->set_rules('input_lokasi_penulisan','lokasi_penulisan','required',array('required' => 'isi %s, '));

		if($this->form_validation->run()==FALSE){
			$this->load->view('form_tambah',$data);
		}
		else{
			if ($this->input->post('simpan')) {
			$upload = $this->artikel->upload();

			if ($upload['result'] == 'success') {
				$this->artikel->insert($upload);
				redirect('blog');
			}else{
				$data['message'] = $upload['error'];
			}
		}

	

	$this->load->view('form_tambah', $data);
	}
}

		public function delete($id_blog){
		$this->load->model('artikel');
		$this->artikel->delete($id_blog);
		redirect('blog');
	}



//Gunakan fungsi dari model untuk mengisi data dalam dropdown
		public function edit($id = NULL)
	{
		$this->load->model('artikel');
		$this->load->model('category_model');
		$data['artikel'] = $this->artikel->get_artikel_by_id($id);
		// Jika id kosong atau tidak ada id yg dimaksud, lempar user ke halaman blog
		if ( empty($id) || !$data['artikel'] ) redirect('blog');
		$data['categories'] = $this->category_model->generate_cat_dropdown();
		// Kita simpan dulu nama file yang lama
		$old_image = $data['artikel']->image;
		// Kita butuh helper dan library berikut
	    $this->load->helper('form');
	    $this->load->library('form_validation');
	    // Kita validasi input sederhana, sila cek http://localhost/ci3/user_guide/libraries/form_validation.html
		$this->form_validation->set_rules('judul_blog', 'judul_blog', 'required',
			array(
				'required' 		=> 'Isi %s donk, males amat.'
			));
	    // Cek apakah input valid atau tidak
	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('home_view_form', $data);
	    } else {
    		// Apakah user upload gambar?
    		if ( isset($_FILES['thumbnail']) && $_FILES['thumbnail']['size'] > 0 )
    		{
    			// Konfigurasi folder upload & file yang diijinkan
    			// Jangan lupa buat folder uploads di dalam ci3-course
    			$config['upload_path']          = './img/';
    	        $config['allowed_types']        = 'gif|jpg|png';
    	        $config['max_size']             = 2048;
    	        $config['max_width']            = 1000;
    	        $config['max_height']           = 2000;
    	        // Load library upload
    	        $this->load->library('upload', $config);
    	        // Apakah file berhasil diupload?
    	        if ( ! $this->upload->do_upload('thumbnail'))
    	        {
    	        	$data['upload_error'] = $this->upload->display_errors();
    	        	$post_image = '';
    	        	// Kita passing pesan error upload ke view supaya user mencoba upload ulang
    	            $this->load->view('home_view_form', $data); 
    	        } else {
    	        	// Hapus file image yang lama jika ada
    	        	if( !empty($old_image) ) {
    	        		if ( file_exists( './img/'.$old_image ) ){
    	        		    unlink( './img/'.$old_image );
    	        		} else {
    	        		    echo 'File tidak ditemukan.';
    	        		}
    	        	}
    	        	// Simpan nama file-nya jika berhasil diupload
    	            $img_data = $this->upload->data();
    	            $post_image = $img_data['file_name'];
    	        	
    	        }
    		} else {
    			// User tidak upload gambar, jadi kita kosongkan field ini, atau jika sudah ada, gunakan image sebelumnya
    			$post_image = ( !empty($old_image) ) ? $old_image : '';
    		}
    		$slug = url_title($this->input->post('judul_blog'), 'dash', TRUE);
	    	$post_data = array(
	   			'id_cat' => $this->input->post('id'),
	    	    'judul_blog' => $this->input->post('judul_blog'),
	    	    'tanggal_blog' => $this->input->post('tanggal_blog'),
	    	    'content' => $this->input->post('content'),
	    	    'penulis' => $this->input->post('penulis'),
	    	    'sumber' => $this->input->post('sumber'),
	    	    'lokasi_penulisan' => $this->input->post('lokasi_penulisan'),
	    	    'image' => $post_image,
	    	);
	    	// Jika tidak ada error upload gambar, maka kita update datanya 
	    	if( empty($data['upload_error']) ) {
	    		// Update artikel sesuai post_data dan id-nya
		        $this->artikel->update($post_data, $id);
		        $this->load->view('artikel_success', $data);
	    	}
	    }
}
}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */