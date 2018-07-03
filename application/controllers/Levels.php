<?php 
class Levels extends CI_Controller {

	public function index()
	{
		$this->load->model('level_model');
		$data['levels'] = $this->level_model->get_level();
		$this->load->view('header');
		$this->load->view('level_view', $data);
		$this->load->view('footer');
	}

	public function create()    
 	{
 		$this->load->model('level_model');
 		$data = array();
 		$this->load->library('form_validation');
    	// Form validasi untuk Nama Kategori        
    	$this->form_validation->set_rules('level_id','ID Level','required|is_unique[levels.level_id]',      
 		array('required' => 'Isi %s donk, jangan kosong.'));
 		$this->form_validation->set_rules('nama_level','Nama Level','required|is_unique[levels.nama_level]',      
 		array('required' => 'Isi %s donk, jangan kosong.'));

	 	 if($this->form_validation->run() === FALSE){  
	 	 		$this->load->view('header');          
		 	 	$this->load->view('level_create', $data);
		 	 	$this->load->view('footer');
		 } else {            
		 	 	$this->level_model->create_level();            
		 	 	redirect('levels');        
		}     
	}

	public function Delete($id){
		$this->load->model('level_model');
		$this->level_model->hapus($id);
		redirect('levels');
	}

	public function Edit($id){
		$this->load->model('level_model');
		// $data['tipe'] = "Edit";
		$data['single'] = $this->level_model->get_single($id);

		if($this->input->post('simpan')){
			$this->level_model->update($id);
			redirect('levels');
		}
		$this->load->view('header');
		$this->load->view('update_level', $data);
		$this->load->view('footer');
	}


}