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

		public function edit($id){
		$this->load->model("artikel");
		$data['tipe'] = "Edit";
		$data['default'] = $this->artikel->get_default($id);

		if(isset($_POST['simpan'])){
			$this->artikel->update($_POST, $id);
			redirect("blog");
		}

		$this->load->view("home_view_form",$data);
	}

//Gunakan fungsi dari model untuk mengisi data dalam dropdown

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */