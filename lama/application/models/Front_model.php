<?php
class Front_model extends CI_Model{
 
  	function lihat($tabel){
    $result = $this->db->get($tabel);
    return $result;
  	}

  	function lihat_where($tabel,$data){
  		$this->db->where($data);
    $result = $this->db->get($tabel);
    return $result;
  	}


	function simpan($tabel,$data){
    $result = $this->db->insert($tabel,$data);
    return $result;
  	}

  	function ubah($tabel,$data,$dimana){
  	$this->db->where($dimana);
    $this->db->set($data);
    $result = $this->db->update($tabel);
    return $result;
  	}

  	function hapus($tabel,$dimana){
  	$this->db->where($dimana);
    $result = $this->db->delete($tabel);
    return $result;
  	}

  	function queryku($q){
    $result = $this->db->query($q);
    return $result;
  	}

  	function get_mobil(){
  		$result = $this->db->query('select * from t_mobil a
		LEFT JOIN t_kategori b on a.id_kategori=b.id_kategori
		LEFT JOIN t_gambar c on a.id_mobil=c.id_mobil 
		LEFT JOIN t_tipe d on d.id_mobil=a.id_mobil
		GROUP BY a.nama_mobil');
  		return $result;
  	}
	
	function get_mobil_home(){
  		$result = $this->db->query('select * from t_mobil a
		LEFT JOIN t_kategori b on a.id_kategori=b.id_kategori
		LEFT JOIN t_gambar c on a.id_mobil=c.id_mobil 
		LEFT JOIN t_tipe d on d.id_mobil=a.id_mobil
		GROUP BY a.nama_mobil limit 6');
  		return $result;
  	}

  	function get_mobil_where($id){
  		$result = $this->db->query("select * from t_mobil a
		LEFT JOIN t_kategori b on a.id_kategori=b.id_kategori
		LEFT JOIN t_gambar c on a.id_mobil=c.id_mobil 
		LEFT JOIN t_tipe d on d.id_mobil=a.id_mobil
		where a.id_mobil='$id'
		GROUP BY a.nama_mobil");
  		return $result;
  	}

    function get_berita(){
      $result = $this->db->query('select * from t_berita a
    LEFT JOIN t_admin b on a.id_admin=b.id_admin
    order BY a.tgl_upload desc');
      return $result;
    }
	
	function get_berita_home(){
      $result = $this->db->query('select * from t_berita a
    LEFT JOIN t_admin b on a.id_admin=b.id_admin
    order BY a.tgl_upload desc limit 6');
      return $result;
    }

    function get_berita_where($id){
      $result = $this->db->query("select * from t_berita a
    LEFT JOIN t_admin b on a.id_admin=b.id_admin 
    where a.id_berita='$id'
    order BY a.tgl_upload desc ");
      return $result;
    }


    function lihat_detail($tabel,$dimana){
    $this->db->where($dimana);
    $result = $this->db->get($tabel);
    return $result;
  }
   
}