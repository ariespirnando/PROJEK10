<?php
class admin extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('con_user/login');
		}
		$timeout = 10; // Set timeout menit
		$timeout = $timeout * 60; // Ubah menit ke detik
		if (isset($_SESSION['start_time'])) {
		    $elapsed_time = time() - $_SESSION['start_time'];
		    if ($elapsed_time >= $timeout) {
		        session_destroy();
		        echo "<script>alert('Sesion Habis')
				location.href='../con_user/login'</script>";
		    }
		}
		$_SESSION['start_time'] = time();
		$this->load->model(array('mod_User','mod_admin'));
	}
	function hPelanggan(){
		$id = $this->uri->segment(3);
		$this->mod_admin->hPelanggan($id);
		echo "<script>alert('Pelanggan berhasil dihapus')
				location.href=''</script>";
	}
	function cetakPendaftaran(){
		$id = $this->uri->segment(3);
		$data['isiPreview'] = $this->mod_admin->dpendaftaran($id)->row_array();
		$html = $this->load->view('Admin/Cpendaftaran',$data,true);
		$pdfFilePath = "Pendaftaran.pdf";
		$pdf = $this->m_pdf->load();
		$pdf->WriteHTML($html);
		$pdf->Output($pdfFilePath, "D");	
	}
	function cetakTransaski(){
		$id = $this->uri->segment(3);
		$data['isiPreview'] = $this->mod_admin->dtransaksi($id)->row_array();
		$html = $this->load->view('Admin/Ctransaksi',$data,true);
		$pdfFilePath = "Transaski.pdf";
		$pdf = $this->m_pdf->load();
		$pdf->WriteHTML($html);
		$pdf->Output($pdfFilePath, "D");	
	}
	function Dtransaksi(){
		$id = $this->uri->segment(3);
		$data['isi'] = $this->mod_admin->dtransaksi($id)->row_array();
		$this->template->load('Template_Admin','Admin/Dtransaksi',$data);
	}
	function Dpelanggan(){
		$id = $this->uri->segment(3);
		$data['isi'] = $this->mod_admin->dpelanggan($id)->row_array();
		$this->template->load('Template_Admin','Admin/Dpelanggan',$data);
	}
	function Dpendaftaran(){
		$id = $this->uri->segment(3);
		$data['isi'] = $this->mod_admin->dpendaftaran($id)->row_array();
		$this->template->load('Template_Admin','Admin/Dpendaftaran',$data);
	}
	function index(){
		$tgl = getdate();
		$tahun = $tgl['year'];

		$tgl1 = $tahun."-01";$tgl2 = $tahun."-02";$tgl3 = $tahun."-03";$tgl4 = $tahun."-04";
		$tgl5 = $tahun."-05";$tgl6 = $tahun."-06";$tgl7 = $tahun."-07";$tgl8 = $tahun."-08";
		$tgl9 = $tahun."-09";$tgl10 = $tahun."-10";$tgl11 = $tahun."-11";$tgl12 = $tahun."-12";
		$data['n1'] = $this->mod_admin->grafik1($tgl1);
		$data['n2'] = $this->mod_admin->grafik2($tgl2);
		$data['n3'] = $this->mod_admin->grafik3($tgl3);
		$data['n4'] = $this->mod_admin->grafik4($tgl4);
		$data['n5'] = $this->mod_admin->grafik5($tgl5);
		$data['n6'] = $this->mod_admin->grafik6($tgl6);
		$data['n7'] = $this->mod_admin->grafik7($tgl7);
		$data['n8'] = $this->mod_admin->grafik8($tgl8);
		$data['n9'] = $this->mod_admin->grafik9($tgl9);
		$data['n10'] = $this->mod_admin->grafik10($tgl10);
		$data['n11'] = $this->mod_admin->grafik11($tgl11);
		$data['n12'] = $this->mod_admin->grafik12($tgl12);
		$data['Tahun'] = $tahun;
		$this->template->load('Template_Admin','Admin/home',$data);
	}
	function pelanggan(){
		$data['isi'] = $this->mod_admin->pelanggan();
		$this->template->load('Template_Admin','Admin/pelanggan',$data);
	}
	function Pendaftaran(){
		if(isset($_POST['tampil'])){
			$tgl1 = $this->input->post('tgl1');
			$tgl2 = $this->input->post('tgl2');
			if($this->mod_admin->tampilpendaftar($tgl1,$tgl2)->num_rows()>0){
				$data['isi'] = $this->mod_admin->tampilpendaftar($tgl1,$tgl2);
				$data['tgl1'] = $tgl1;
				$data['tgl2'] = $tgl2;
				$this->template->load('Template_Admin','Admin/tpendaftaran',$data);
			}else{
				echo "<script>alert('Data Tidak ditemukan')
					location.href=''</script>";
			}
			
		}else{
			$data['isi'] = $this->mod_admin->pendaftar();
			$this->template->load('Template_Admin','Admin/pendaftaran',$data);
		}
	}
	function transaksi(){
		if(isset($_POST['tampil'])){
			$tgl1 = $this->input->post('tgl1');
			$tgl2 = $this->input->post('tgl2');
			if($this->mod_admin->tampilTransaksi($tgl1,$tgl2)->num_rows()>0){
				$data['isi'] = $this->mod_admin->tampilTransaksi($tgl1,$tgl2);
				$data['tgl1'] = $tgl1;
				$data['tgl2'] = $tgl2;
				$this->template->load('Template_Admin','Admin/ttransaksi',$data);
			}else{
				echo "<script>alert('Data Tidak ditemukan')
					location.href=''</script>";
			}
			
		}else{
			$data['isi'] = $this->mod_admin->transaksi();
			$this->template->load('Template_Admin','Admin/transaksi',$data);
		}
	}

	function laporanPendaftarn(){
		if(isset($_POST['tampil'])){
			$tgl1 = $this->input->post('tgl1');
			$tgl2 = $this->input->post('tgl2');
			if($this->mod_admin->tampilpendaftar($tgl1,$tgl2)->num_rows()>0){
				$data['isi'] = $this->mod_admin->tampilpendaftar($tgl1,$tgl2);
				$data['tgl1'] = $tgl1;
				$data['tgl2'] = $tgl2;
				$this->template->load('Template_Admin','Admin/tlaporanPendaftaran',$data);
			}else{
				echo "<script>alert('Data Tidak ditemukan')
					location.href=''</script>";
			}
			
		}else if(isset($_POST['cetak'])){
			echo "<script>alert(Berhasil Mencetak)</script>";
			$tgl1 = $this->input->post('tgl1');
			$tgl2 = $this->input->post('tgl2');
			if($tgl1 =="" || $tgl2==""){
				$data['isi'] = $this->mod_admin->pendaftar();
				$data['ket'] = "Keseluruhan";
				//$this->load->view('Admin/CtlaporanPendaftaran',$data);
				$html = $this->load->view('Admin/CtlaporanPendaftaran',$data,true);
				$pdfFilePath = "Laporan Pendaftaran Seluruh.pdf";
				$pdf = $this->pdf->load();
				$pdf->AddPage('L', // L - landscape, P - portrait
	            '', '', '', '',
	            30, // margin_left
	            30, // margin right
	            30, // margin top
	            30, // margin bottom
	            18, // margin header
	            12); // margin footer
				$pdf->WriteHTML($html);
				$pdf->Output($pdfFilePath, "D");

			}else{
				$data['isi'] = $this->mod_admin->tampilpendaftar($tgl1,$tgl2);
				$data['ket'] = tgl_indo($tgl1)." Sampai ".tgl_indo($tgl2);
				$html = $this->load->view('Admin/CtlaporanPendaftaran',$data,true);
				$pdfFilePath = "LaporanPendaftaran.pdf";
				$pdf = $this->pdf->load();
				$pdf->AddPage('L', // L - landscape, P - portrait
	            '', '', '', '',
	            30, // margin_left
	            30, // margin right
	            30, // margin top
	            30, // margin bottom
	            18, // margin header
	            12); // margin footer
				$pdf->WriteHTML($html);
	            //$this->mpdf->Output($file_name, 'I'); // view in the explorer
				$pdf->Output($pdfFilePath, "D");
			}
		}
		else{
			$data['isi'] = $this->mod_admin->pendaftar();
			$this->template->load('Template_Admin','Admin/laporanPendaftaran',$data);
		}
	}
	function laporanTransaski(){
		if(isset($_POST['tampil'])){
			$tgl1 = $this->input->post('tgl1');
			$tgl2 = $this->input->post('tgl2');
			if($this->mod_admin->tampilTransaksi($tgl1,$tgl2)->num_rows()>0){
				$data['isi'] = $this->mod_admin->tampilTransaksi($tgl1,$tgl2);
				$data['tgl1'] = $tgl1;
				$data['tgl2'] = $tgl2;
				$this->template->load('Template_Admin','Admin/tlaporanTransaksi',$data);
			}else{
				echo "<script>alert('Data Tidak ditemukan')
					location.href=''</script>";
			}
			
		}else if(isset($_POST['cetak'])){
			echo "<script>alert(Berhasil Mencetak)</script>";
			$tgl1 = $this->input->post('tgl1');
			$tgl2 = $this->input->post('tgl2');
			if($tgl1 =="" || $tgl2==""){
				$data['isi'] = $this->mod_admin->transaksi();
				$data['ket'] = "Keseluruhan";
				//$this->load->view('Admin/CtlaporanPendaftaran',$data);
				$html = $this->load->view('Admin/CtlaporanTransaksi',$data,true);
				$pdfFilePath = "Laporan Transassi Seluruh.pdf";
				$pdf = $this->pdf->load();
				$pdf->AddPage('L', // L - landscape, P - portrait
	            '', '', '', '',
	            30, // margin_left
	            30, // margin right
	            30, // margin top
	            30, // margin bottom
	            18, // margin header
	            12); // margin footer
				$pdf->WriteHTML($html);
				$pdf->Output($pdfFilePath, "D");
			}else{
				$data['isi'] = $this->mod_admin->tampilTransaksi($tgl1,$tgl2);
				$data['ket'] = tgl_indo($tgl1)." Sampai ".tgl_indo($tgl2);
				$html = $this->load->view('Admin/CtlaporanTransaksi',$data,true);
				$pdfFilePath = "Laporan Transasksi.pdf";
				$pdf = $this->pdf->load();
				$pdf->AddPage('L', // L - landscape, P - portrait
	            '', '', '', '',
	            30, // margin_left
	            30, // margin right
	            30, // margin top
	            30, // margin bottom
	            18, // margin header
	            12); // margin footer
				$pdf->WriteHTML($html);
	            //$this->mpdf->Output($file_name, 'I'); // view in the explorer
				$pdf->Output($pdfFilePath, "D");
			}
		}
		else{
			$data['isi'] = $this->mod_admin->transaksi();
			$this->template->load('Template_Admin','Admin/laporanTransaksi',$data);
		}
	}
	function laporanPelanggan(){
		if(isset($_POST['tampil'])){
			$status = $this->input->post('Status');
			if($this->mod_admin->tampilpelanggan($status)->num_rows()>0){
				$data['isi'] = $this->mod_admin->tampilpelanggan($status);
				$data['sts'] = $status;
				$this->template->load('Template_Admin','Admin/tlaporanPelanggan',$data);
			}else{
				echo "<script>alert('Data Tidak ditemukan')
					location.href=''</script>";
			}
			
		}else if(isset($_POST['cetak'])){
			echo "----------------------";
		}
		else{
			$data['isi'] = $this->mod_admin->pelanggan();
			$this->template->load('Template_Admin','Admin/laporanPelanggan',$data);
		}
	}
}

?>