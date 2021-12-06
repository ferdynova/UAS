<?php
/**
 *
 */
class Warga extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_Warga');
	}

	public function index()
	{
		$data = array('title' => 'Sistem Informasi Warga',
					  'page' => 'Data Warga',
					  'tabel_title' => 'Tabel Data Warga',
					  'data_warga' => $this->M_Warga->tampil()->result_array());
		$this->template->load_admin('dashboard','dash_data_warga',$data);
	}
	public function tambah_anggota_keluarga()
	{
		$id = $this->uri->segment(3);
		$data = array('title' => 'Sistem Informasi Warga',
					  'page' => 'Data Keluarga',
					  'tabel_title' => 'Input Anggota Keluarga');
		$this->template->load_admin('dashboard','dash_input_anggota',$data);	}

	public function simpan_anggota_keluarga()
	{
		//tambahkan skrip disini untuk menyimpan data anggota Keluarga

		redirect('keluarga/anggota_keluarga/'.$this->input->post('id_kk'));
	}

	public function edit_anggota_keluarga()
	{
		$id = $this->uri->segment(3);
		$data = array('title' => 'Sistem Informasi Warga',
					  'page' => 'Data Keluarga',
					  'tabel_title' => 'Input Anggota Keluarga',
						'data_anggota' => 'kerjakan disini..... ');
		$this->template->load_admin('dashboard','dash_edit_anggota',$data);
	}

	public function update_anggota_keluarga()
	{
		//tambahkan skrip disini untuk update data anggota Keluarga

		redirect('keluarga/anggota_keluarga/'.$this->input->post('id_kk'));
	}

	public function hapus_anggota_keluarga()
	{
}
