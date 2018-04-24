<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	public function create()
    {
        // Judul Halaman
        $data['page_title'] = 'Buat Kategori';

        // Form validasi untuk Nama Kategori
        $this->form_validation->set_rules(
            'cat_name',
            'Nama Kategori',
            'required|is_unique[categories.cat_name]',
            array(
                'required' => 'Isi %s . Tidak Boleh Kosong',
                'is_unique' => 'Judul ' . $this->input->post('title') . ' sudah ada'
            )
        );

          if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('categories/cat_create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->category_model->create_category();
            redirect('category');
        }
    }

      public function index()
   {

        // Judul Halaman
        $data['page_title'] = 'List Kategori';

        // Dapatkan semua kategori
        $data['categories'] = $this->category_model->get_all_categories();


        $this->load->view('templates/header');
        $this->load->view('categories/cat_view', $data);
        $this->load->view('templates/footer');
    }

   public function artikel($id)
    {

        // Menampilkan judul berdasar nama kategorinya
        $data['page_title'] = $this->category_model->get_category_by_id($id)->cat_name;

        // Dapatkan semua artikel dalam kategori ini
        $data['all_artikel'] = $this->blog_model->get_artikel_by_category($id);

        // Kita gunakan view yang sama pada controller Blog
        $this->load->view('templates/header');
        $this->load->view('blogs/blog_view', $data);
        $this->load->view('templates/footer');
    }
}