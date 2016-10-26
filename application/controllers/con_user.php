<?php 

class con_user extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('mod_User','mod_admin'));
		/*$tgl1= date('Y-m-d');
		$pel = $this->mod_admin->sttpel();
		foreach ($pel->result() as $p) {
			$tgl = date('Y-m-d', strtotime('+6 days', strtotime(ubhSQL($p->tanggalDaftar))));
			if($tgl == $tgl1){
				unlink("./assets/Upload/$p->KTP");
				unlink("./assets/Upload/$p->KK");
				unlink("./assets/Upload/$p->PBB");
				unlink("./assets/Upload/$p->RekeningPelanggan");
				$this->mod_admin->Delete($p->idPelanggan,$p->tanggalDaftar,$p->KTP,$p->KK,$p->PBB,$p->RekeningPelanggan);
			}
		}*/

	}
	function ketentuan(){
		$data = file_get_contents(base_url()."/assets/Upload/KETENTUAN.pdf");
		$path = "KETENTUAN.pdf";
		force_download($path,$data);
	}
	function login(){
		if(isset($_POST['post'])){
			$user = $this->input->post('nama');
			$pw = $this->input->post('pw');
			$data = array('username'=>$user,'password'=>md5($pw));
			$log = $this->mod_admin->login($data);
			if($log->num_rows()>0){
				foreach ($log->result() as $sess) {
					$sess_data['logged_in'] = 'Sudah Loggin';
                    $sess_data['iduser'] = $sess->iduser;
                    $sess_data['username'] =$sess->username;
                    $sess_data['Idtype'] = $sess->level;
                    $this->session->set_userdata($sess_data);
                }
                if ($this->session->userdata('Idtype')==1) {
                    echo "<script>alert('Welcome In Admin ')
                    location.href='.././admin'</script>";
                }
                else if($this->session->userdata('Idtype')==2){
                    echo "<script>alert('Welcome In Administrator')
                    location.href='.././administrator'</script>";
                } 
			}else{
				echo "<script>alert('Username dan Password Tidak ditemukan')
					location.href=''</script>";
			}

		}else{
			$this->template->load('Template','Website/login');
		}
	}
	function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('Idtype');
        session_destroy();
         echo "<script>alert('Terimakasih sudah menggunakan aplikasi Ini :)')
                    location.href='../con_user'</script>";
    }	
	function index(){
		$this->template->load('Template','website/home');
	}
	function alur(){
		$this->template->load('Template','website/alur');	
	}
	function daftar(){
		if(isset($_POST['enter'])){
			if(isset($_POST['check1'])){
				redirect('con_user/pdaftar');
			}else{
				echo "<script>alert('Anda belum menceklis persetujuan')
					location.href='alur'</script>";
			}
		}
	}
	function back(){
		echo "<script>alert('Terimakasih')
				location.href='../'</script>";
	}
	function preview(){
		$id = $this->uri->segment(3);
		$data['isiPreview'] = $this->mod_User->pendaftartampil($id)->row_array();
		$this->template->load('Template','website/preview',$data);
	}
	function cetak(){
		$id = $this->uri->segment(3);
		$data['isiPreview'] = $this->mod_User->pendaftartampil($id)->row_array();
		$html = $this->load->view('website/cetak',$data,true);
		$pdfFilePath = "BuktiPendaftaran.pdf";
		$pdf = $this->m_pdf->load();
		$pdf->WriteHTML($html);
		$pdf->Output($pdfFilePath, "D");
		
	}
	function pdaftar(){
		if(isset($_POST['post'])){
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$Pekerjaan = $this->input->post('pekerjaan');
			$noRumah = $this->input->post('noRumah');
			$rt = $this->input->post('rt');
			$rw = $this->input->post('rw');
			$kodepos = $this->input->post('kodepos');
			$kelurahan = $this->input->post('idkelurahan');
			$hp = $this->input->post('nHP');
			$telp = $this->input->post('nTelphone');
			$fbangunn = $this->input->post('fbangunan');
			$norekttga = $this->input->post('nRekening');
			$Status = "Belum Membayar";

			$idPel = $this->input->post('idPel');
			$noPend = $this->input->post('noPend');

			if ($nama == "" || $alamat == "" || $noRumah == "" || $rt == "" || $rw == "" || $kodepos == "" ||
				$hp == "" || $fbangunn == "" || $norekttga == "") {
				echo "<script>alert('Terdapat data kosong, Silahkan isi Form Kembali')
					location.href='pdaftar'</script>";
			}else{
				if($kelurahan ==""){
					echo "<script>alert('Kelurahan Tidak terdaftar di Wilayah Bandarlampung, Silahkan isi Form Kembali ')
						location.href='pdaftar'</script>";	
				}else{
					$dataPelanggan = array('idPelanggan'=>$idPel,'Nama'=>$nama,'Alamat'=>$alamat,
					'Pekerjaan'=>$Pekerjaan,'noHP'=>$hp,'noTelepon'=>$telp,'Status'=>$Status);

					$dataPendaftar = array('noPendaftaran'=>$noPend,'idPelanggan'=>$idPel,'NoRumah'=>$noRumah,
					'RT'=>$rt,'RW'=>$rw,'KodePos'=>$kodepos,'idKelurahan'=>$kelurahan,
					'fungsiBangunan'=>$fbangunn,'NoRekTetangga'=>$norekttga);	

					$nm = "file_".time();
			   		$config['upload_path'] = './assets/Upload/'; 
			    	$config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
			    	$config['max_size'] = '2888'; //MB
					$config['max_width']  = '2000'; //pixels
					$config['max_height']  = '2000'; //pixels 
					$config['file_name']  = $nm;
			    	$this->upload->initialize($config);

				    $img  = array('','','','');
				    $no = 0;
				    foreach ($_FILES as $nmfile => $file){
				    	/*$this->upload->initialize($config);*/
				    	/*echo $nmfile;*/
				    	if ( ! $this->upload->do_upload($nmfile)){
							echo "<script>alert('Lampiran Gagal Diupload (MelebiHI batas Maksimum 2 MB),  Silahkan isi Form Kembali')
							location.href='pdaftar'</script>";
						} else {
							$imgUpload = $this->upload->data();
							$img[$no] = $imgUpload['file_name'];
							$dataGambar = array('noPendaftaran'=>$noPend,'KTP'=>$img[0],'KK'=>$img[1],
								'RekeningPelanggan'=>$img[2],'PBB'=>$img[3]);
				    	}
				    	$no++;
				    }
				    if($img[0]==""||$img[1]==""||$img[2]==""||$img[3]==""){
				    	echo "<script>alert('Lampiran Tidak Disi,  Silahkan isi Form Kembali')
						location.href='pdaftar'</script>";
				    }else{
				    	$this->mod_User->insertPelanggan($dataPelanggan);
						$this->mod_User->insertPendaftaran($dataPendaftar);
						$this->mod_User->insertLampiran($dataGambar);
						echo "<script>alert('Pendaftaran Berhasil')
							location.href='preview/$noPend'</script>";
						}
				    }
				}
				
				
		}else{
			$data['idPel'] = $this->mod_User->KodePelanggan();
			$data['idpend'] = $this->mod_User->KodePendaftaran();
			$this->template->load('Template','website/daftar',$data);
		}
	}
	function tentang(){
		$this->template->load('Template','website/tentang');
	}
	function konfirmasi(){
		if(isset($_POST['post'])){
			$pendaftar = $this->input->post('pend');
			$pelangan = $this->input->post('pel');
			if($pendaftar =="" || $pelangan==""){
				echo "<script>alert('Terdapat data kosong')
				location.href=''</script>";
			}else{
				$cek = $this->mod_User->cekpendaftaran($pendaftar,$pelangan);
				if($cek > 0){
					$cek2 = $this->mod_User->cek($pendaftar);
					if($cek2 > 0){
						echo "<script>alert('No pendaftaran sudah melakukan konfirmasi')
						location.href=''</script>";
					}else{
						echo "<script>alert('Upload bukti pembayaran')
						location.href='previewKonftimasi/$pendaftar'</script>";
					}
				}else{
					echo "<script>alert('No pendaftaran tidak ditemukan')
					location.href=''</script>";
				}
			}
		}else{
			$this->template->load('Template','website/konfirmasi');
		}
	}
	function previewKonftimasi(){
		$id = $this->uri->segment(3);
		if(isset($_POST['post'])){
			$rek = $this->input->post('rek');
			$bank = $this->input->post('bank');
			$tot = $this->input->post('juml');
			$pend = $this->input->post('pend');
			$nama = $this->input->post('nama');
			$pell = $this->input->post('pell');
			$trans = $this->input->post('trx');

			//echo $rek."-".$bank."-".$tot."-".$pend."-".$nama."-".$pell;
			
			if($tot=="" ||$nama=="" || $bank==0){
				echo "<script>alert('Terdapat data yang kosong, Silahkan isi Form Kembali')
				location.href='./previewKonftimasi/$pend'</script>";
			}else{
				$nm = "file_".time();
	   			$config['upload_path'] = './assets/Upload/'; 
	    		$config['allowed_types'] = 'jpg|png|jpeg|bmp'; 
	    		$config['max_size'] = '2888'; //MB
				$config['max_width']  = '2000'; //pixels
				$config['max_height']  = '2000'; //pixels 
				$config['file_name']  = $nm;

	    		$this->upload->initialize($config);
	    		if ( ! $this->upload->do_upload('upload')){
					echo "<script>alert('Gambar Gagal Diupload (MelebiHI batas Maksimum 2 MB),  Silahkan isi Form Kembali')
					location.href='./previewKonftimasi/$pend'</script>";
				} else {

					if($bank>1){
						$n = 'Mandiri/ No Rek '+$rek;
					}else{
						$n = 'BNI 46/ No Rek '+$rek;
					}
					
					$cek2 = $this->mod_User->cek($pend);
					if($cek2 > 0){
						echo "<script>alert('No pendaftaran sudah melakukan konfirmasi')
						location.href='konfirmasi'</script>";
					}else{
						$imgUpload = $this->upload->data();
						$img= $imgUpload['file_name'];
						$data = array('idtransaksi'=>$trans,'atasNama'=>$nama,'noPendaftaran'=>$pend,'bukti'=>$img,'TempatPembayaran'=>$n,'JumlahTransaksi'=>$tot);
						
						$this->mod_User->insertTransaksi($data);
					
						$this->mod_User->updateStatus($pell);
						echo "<script>alert('Terimakasih, Data berhasil disimpan')
						location.href='../con_user'</script>";
					}
					
		    	}
			}

		}else{
			$data['pend'] = $id;
			$data['pel'] = $this->mod_User->pelangganrow($id)->row_array();
			$data['ktr'] = $this->mod_User->KodeTransaksi();
			$this->template->load('Template','website/previewKonftimasi',$data);
		}
	}
}
?>