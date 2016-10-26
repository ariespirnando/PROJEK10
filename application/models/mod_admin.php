<?php

class mod_admin extends CI_Model{
	function login($data){
		return $this->db->get_where('tbuser',$data);
	}
	function tLogin(){
		return $this->db->get('tbuser');
	}
	function hPelanggan($id){
		$param = array('idPelanggan'=>$id);
		$this->db->delete('tbpelanggan',$param);
	}
	function inLogin($data){
		$this->db->insert('tbuser',$data);
	}
	function dLogin($id){
		$param = array('iduser'=>$id);
		$this->db->delete('tbuser',$param);
	}
	function oLogin($id){
		$param = array('iduser'=>$id);
		return $this->db->get_where('tbuser',$param);
	}
	function uLogin($id,$data){
		$this->db->where('iduser',$id);
		$this->db->update('tbuser',$data);
	}
	
	function dpelanggan($id){
		$sql = "SELECT * FROM tbpelanggan WHERE idPelanggan ='$id'";
		return $this->db->query($sql);
	}
	function dpendaftaran($id){
		$sql = "SELECT * FROM `v_pendaftar` WHERE noPendaftaran ='$id'";
		return $this->db->query($sql);
	}
	function dtransaksi($id){
		$sql = "SELECT * FROM `v_transaksi` WHERE idtransaksi ='$id'";
		return $this->db->query($sql);

	}
	function pelanggan(){
		return $this->db->get('tbpelanggan');
	}
	function tampilpelanggan($id){
		$sql = "SELECT * FROM tbpelanggan WHERE Status = '$id'";
		return $this->db->query($sql);
	}
	function pendaftar(){
		return $this->db->get('v_pendaftar');
	}
	function transaksi(){
		return $this->db->get('v_transaksi');
	}
	function tampilpendaftar($tgl1,$tgl2){
		$sql = "SELECT * FROM `v_pendaftar` WHERE DATE_FORMAT(`tanggalDaftar`, '%Y-%m-%d') BETWEEN '$tgl1' AND '$tgl2'";
		return $this->db->query($sql);
	}
	function tampilTransaksi($tgl1,$tgl2){
		$sql = "SELECT * FROM `v_transaksi` WHERE DATE_FORMAT(`tanggalPembayaran`, '%Y-%m-%d') BETWEEN '$tgl1' AND '$tgl2'";
		return $this->db->query($sql);
	}

	function grafik1($tgl){
		$sql = "SELECT * FROM `v_pendaftar` WHERE DATE_FORMAT(`tanggalDaftar`, '%Y-%m') = '$tgl'";
		return $this->db->query($sql)->num_rows();
	}
	function grafik2($tgl){
		$sql = "SELECT * FROM `v_pendaftar` WHERE DATE_FORMAT(`tanggalDaftar`, '%Y-%m') = '$tgl'";
		return $this->db->query($sql)->num_rows();
	}
	function grafik3($tgl){
		$sql = "SELECT * FROM `v_pendaftar` WHERE DATE_FORMAT(`tanggalDaftar`, '%Y-%m') = '$tgl'";
		return $this->db->query($sql)->num_rows();
	}
	function grafik4($tgl){
		$sql = "SELECT * FROM `v_pendaftar` WHERE DATE_FORMAT(`tanggalDaftar`, '%Y-%m') = '$tgl'";
		return $this->db->query($sql)->num_rows();
	}
	function grafik5($tgl){
		$sql = "SELECT * FROM `v_pendaftar` WHERE DATE_FORMAT(`tanggalDaftar`, '%Y-%m') = '$tgl'";
		return $this->db->query($sql)->num_rows();
	}
	function grafik6($tgl){
		$sql = "SELECT * FROM `v_pendaftar` WHERE DATE_FORMAT(`tanggalDaftar`, '%Y-%m') = '$tgl'";
		return $this->db->query($sql)->num_rows();
	}
	function grafik7($tgl){
		$sql = "SELECT * FROM `v_pendaftar` WHERE DATE_FORMAT(`tanggalDaftar`, '%Y-%m') = '$tgl'";
		return $this->db->query($sql)->num_rows();
	}
	function grafik8($tgl){
		$sql = "SELECT * FROM `v_pendaftar` WHERE DATE_FORMAT(`tanggalDaftar`, '%Y-%m') = '$tgl'";
		return $this->db->query($sql)->num_rows();
	}
	function grafik9($tgl){
		$sql = "SELECT * FROM `v_pendaftar` WHERE DATE_FORMAT(`tanggalDaftar`, '%Y-%m') = '$tgl'";
		return $this->db->query($sql)->num_rows();
	}
	function grafik10($tgl){
		$sql = "SELECT * FROM `v_pendaftar` WHERE DATE_FORMAT(`tanggalDaftar`, '%Y-%m') = '$tgl'";
		return $this->db->query($sql)->num_rows();
	}
	function grafik11($tgl){
		$sql = "SELECT * FROM `v_pendaftar` WHERE DATE_FORMAT(`tanggalDaftar`, '%Y-%m') = '$tgl'";
		return $this->db->query($sql)->num_rows();
	}
	function grafik12($tgl){
		$sql = "SELECT * FROM `v_pendaftar` WHERE DATE_FORMAT(`tanggalDaftar`, '%Y-%m') = '$tgl'";
		return $this->db->query($sql)->num_rows();
	}
	function Delete($id,$tgl,$a1,$a2,$a3,$a4){
		$sql1 = "DELETE FROM `tbpelanggan` WHERE idPelanggan ='$id' AND DATE_FORMAT(`createdOn`, '%Y-%m-%d') =  '$tgl'";
		$this->db->query($sql1);
		unlink("./assets/Upload/$a1");
		unlink("./assets/Upload/$a2");
		unlink("./assets/Upload/$a3");
		unlink("./assets/Upload/$a4");
	}
	function sttpel(){
		$id = "Belum Membayar";
		$param = array('Status'=>$id);
		return $this->db->get_where('v_pendaftar',$param);
	}
	
}
?>