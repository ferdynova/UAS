<?php
/**
 *
 */
class M_Warga extends CI_Model
{
  function tampil()
  {
    //SELECT * FROM keluarga a, rt b, anggota_keluarga c WHERE a.id_rt = b.id AND a.id = c.id_kk
    $this->db->select('a.nomor_kk, b.nama_rt, c.*');
    $this->db->from('keluarga a, rt b, anggota_keluarga c');
    $this->db->where('a.id_rt = b.id')->where('a.id = c.id_kk');
    return $this->db->get();
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
}
