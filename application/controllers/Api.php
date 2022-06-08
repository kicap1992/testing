<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, DELETE, PUT');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization , X-Authorization , X-Auth-Token');
header("Access-Control-Expose-Headers: Content-Length, X-JSON");
header('Access-Control-Allow-Credentials: true');
header('Content-Type: application/json');

defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
  var $server_url;
  function __construct()
  {
    parent::__construct();
    $this->load->model('model');;
    // $this->db->query("SET sql_mode = '' ");
    date_default_timezone_set("Asia/Kuala_Lumpur");
    // $this->server_url = 'https://penjualan-ilham.kicap-karan.com/server2/api/';
    $this->server_url = 'http://localhost/ilham/server2/api/';
  }

  public function index_get()
  {
    $this->response(['message' => 'Halo Bosku'], 200);
    // redirect(base_url());

  }

  // --------------------------------dibawah khusus untuk admin -----------------------------//

  public function pegawai_get()
  {
   

    $cek_data = $this->model->custom_query("SELECT * from tb_pegawai a join tb_kontrak b on a.nik=b.nik join tb_jabatan c on a.nik=c.nik")->result();

    // if count $cek_data > 0, then  response success , else response error
    $this->response(['status' => 'success', 'data' => $cek_data], 200);

    // $this->response(['status' => true, 'message' =>$username], 200);
  }


  public function pegawai_post(){
    $nik = $this->post('nik');
    $nama = $this->post('nama');
    $jabatan = $this->post('jabatan');
    $kontrak = $this->post('kontrak');

    $cek_data = $this->model->tampil_data_where("tb_pegawai",["nik" => $nik])->result();
    if (count($cek_data) > 0) {
      $this->response(['status' => false, 'message' => 'NIK sudah ada'], 403);
    }else{
      $data = array(
        'nik' => $nik,
        'nama' => $nama,
      );
      $this->model->insert("tb_pegawai",$data);
      $this->model->insert("tb_jabatan",["nik" => $nik, "nama_jabatan" => $jabatan]);
      $this->model->insert("tb_kontrak",["nik" => $nik, "kontrak" => $kontrak]);
      $this->response(['status' => true, 'message' => 'Data berhasil ditambahkan'], 200);
    }

    // $this->response(['status' => 'success'], 200);
  }

  public function pegawai_put(){
    $nik = $this->put('nik');
    $nama = $this->put('nama');
    $jabatan = $this->put('jabatan');
    $kontrak = $this->put('kontrak');

    $cek_data = $this->model->tampil_data_where("tb_pegawai",["nik" => $nik])->result();
    if (count($cek_data) > 0) {
      $data = array(
        'nik' => $nik,
        'nama' => $nama,
      );
      $this->model->update("tb_pegawai",["nik" => $nik],$data);
      $this->model->update("tb_jabatan",["nik" => $nik],["nama_jabatan" => $jabatan]);
      $this->model->update("tb_kontrak",["nik" => $nik],["kontrak" => $kontrak]);
      $this->response(['status' => true, 'message' => 'Data berhasil diubah'], 200);
    }else{
      $this->response(['status' => false, 'message' => 'NIK tidak ditemukan'], 403);
    }

    // $this->response(['status' => 'success',$nik], 200);
  }

  public function pegawai_delete(){
    $nik = $this->delete('nik');

    $cek_data = $this->model->tampil_data_where("tb_pegawai",["nik" => $nik])->result();
    if (count($cek_data) > 0) {
      $this->model->delete("tb_pegawai",["nik" => $nik]);
      // $this->model->delete("tb_jabatan",["nik" => $nik]);
      // $this->model->delete("tb_kontrak",["nik" => $nik]);
      $this->response(['status' => true, 'message' => 'Data berhasil dihapus'], 200);
    }else{
      $this->response(['status' => false, 'message' => 'NIK tidak ditemukan'], 403);
    }

    $this->response(['status' => 'success',$nik], 200);
  }
}
