<?php

class mod_User extends CI_Model
{
    function pendaftartampil($id){
        $sql ="SELECT * FROM `tbpelanggan` AS pel, `tbpendaftar` AS pend, `tbradius` AS rad 
        WHERE pel.`idPelanggan` = pend.`idPelanggan` AND pend.`idKelurahan` = rad.`idKelurahan` AND 
        pend.`noPendaftaran` = '$id'";
        return $this->db->query($sql);
    }
	function insertPelanggan($data){
		$this->db->insert('tbpelanggan',$data);
	}	
	function insertPendaftaran($data){
		$this->db->insert('tbpendaftar',$data);
	}
	function insertLampiran($data){
		$this->db->insert('tblampiran',$data);
	}
    function insertTransaksi($data){
        $this->db->insert('tbtransaksi',$data);
    }
    function cek($id){ 
        $sql = "SELECT * FROM tbtransaksi WHERE noPendaftaran='$id'";
        $hsl = $this->db->query($sql);
        if($hsl->num_rows()>0){
            return 1;
        }else{
            return 0;
        }
    }
    function updateStatus($id){
        $sql ="UPDATE tbpelanggan set Status ='Sudah Membayar' WHERE idPelanggan = '$id'";
        $this->db->query($sql);
    }
    function pelangganrow($id){
        $sql ="SELECT * FROM `tbpelanggan` AS pel, `tbpendaftar` AS pend, `tbradius` AS rad 
        WHERE pel.`idPelanggan` = pend.`idPelanggan` AND pend.`idKelurahan` = rad.`idKelurahan` AND 
        pend.`noPendaftaran` = '$id'";
        return $this->db->query($sql);
    }
    function cekpendaftaran($id1,$id2){
        $sql ="SELECT * FROM `tbpelanggan` AS pel, `tbpendaftar` AS pend, `tbradius` AS rad 
        WHERE pel.`idPelanggan` = pend.`idPelanggan` AND pend.`idKelurahan` = rad.`idKelurahan` AND 
        pend.`noPendaftaran` = '$id1' AND pend.`idPelanggan` ='$id2'";
        $hsl = $this->db->query($sql);
        if($hsl->num_rows()>0){
            return 1;
        }else{
            return 0;
        }
    }
	function KodePelanggan(){
        $th = date("Y");
        $mt = date("m");
        $kode = 'PLGN';
        $sql="SELECT idPelanggan FROM tbpelanggan ORDER BY idPelanggan DESC";
        $data = $this->db->query($sql);
        $row = $data->row_array();
        $nk = $row['idPelanggan'];
        $nk1 = (int) substr($nk,11,15);
        $no = $nk1+1;
        if($no<10){
        	/*PLGN10201600001*/
            $adm = $kode.''.$mt.''.$th.'0000'.$no;
        }else if($no<100){
            $adm = $kode.''.$mt.''.$th.'000'.$no;
        }else if($no<1000){
            $adm = $kode.''.$mt.''.$th.'00'.$no;
        }else if($no<10000){
            $adm = $kode.''.$mt.''.$th.'0'.$no;
        }else if($no<100000){
            $adm = $kode.''.$mt.''.$th.''.$no;
        }else{
        	 $adm = $kode.''.$mt.''.$th.'00001';
        }
        return $adm;
    }
    function KodeTransaksi(){
        $th = date("Y");
        $mt = date("m");
        $kode = 'TRKS';
        $sql="SELECT idtransaksi FROM tbtransaksi ORDER BY idtransaksi DESC";
        $data = $this->db->query($sql);
        $row = $data->row_array();
        $nk = $row['idtransaksi'];
        $nk1 = (int) substr($nk,11,15);
        $no = $nk1+1;
        if($no<10){
            /*PLGN10201600001*/
            $adm = $kode.''.$mt.''.$th.'0000'.$no;
        }else if($no<100){
            $adm = $kode.''.$mt.''.$th.'000'.$no;
        }else if($no<1000){
            $adm = $kode.''.$mt.''.$th.'00'.$no;
        }else if($no<10000){
            $adm = $kode.''.$mt.''.$th.'0'.$no;
        }else if($no<100000){
            $adm = $kode.''.$mt.''.$th.''.$no;
        }else{
             $adm = $kode.''.$mt.''.$th.'00001';
        }
        return $adm;
    }
    function KodePendaftaran(){
        $th = date("Y");
        $mt = date("m");
        $kode = 'PDFT';
        $sql="SELECT noPendaftaran FROM tbpendaftar ORDER BY noPendaftaran DESC";
        $data = $this->db->query($sql);
        $row = $data->row_array();
        $nk = $row['noPendaftaran'];
        $nk1 = (int) substr($nk,11,15);
        $no = $nk1+1;
        if($no<10){
        	/*PDFT10201600001*/
            $adm = $kode.''.$mt.''.$th.'0000'.$no;
        }else if($no<100){
            $adm = $kode.''.$mt.''.$th.'000'.$no;
        }else if($no<1000){
            $adm = $kode.''.$mt.''.$th.'00'.$no;
        }else if($no<10000){
            $adm = $kode.''.$mt.''.$th.'0'.$no;
        }else if($no<100000){
            $adm = $kode.''.$mt.''.$th.''.$no;
        }else{
        	 $adm = $kode.''.$mt.''.$th.'00001';
        }
        return $adm;
    }
    function tampilKelurahan($id){
     $this->db->like('NamaKelurahan', $id);  
     $res = $this->db->get('tbradius');  
     if ($res->num_rows() > 0) {   
       return $res->result();  
     }  
    }
}

?>