<?php

class About extends Controller {
	public function index($nama = 'Bella', $pekerjaan ='Fangirl', $umur = 19)
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = 'About Me';
		$this->view('templates/header');
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
	public function page()
	{
		$data['judu'] = 'Pages';
		$this->view('templates/header');
		$this->view('about/page');
		$this->view('templates/footer');
	}
}