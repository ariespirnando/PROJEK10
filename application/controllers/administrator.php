<?php
class administrator extends CI_Controller{
	
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
		$this->load->model(array('mod_Admin'));
	}
	function index(){
		$this->template->load('Template_Administrator','Administrator/home');
	}
	function user(){
		$data['isi'] = $this->mod_Admin->tLogin();
		$this->template->load('Template_Administrator','Administrator/user',$data);	
	}
	function delete(){
		$id = $this->uri->segment(3);
		$this->mod_Admin->dLogin($id);
		echo "<script>alert('User Berhasil dihapus')
				location.href='../user'</script>";
	}
	function edit(){
		
		if(isset($_POST['post'])){
		  	$user = $this->input->post('user');
			$pw = $this->input->post('pass');
			$cpw = $this->input->post('con');
			$lv = $this->input->post('level');
			$idp = $this->input->post('idp');

				if($user=="" || $pw=="" || $cpw=="" || $lv==""){
					echo "<script>alert('Terdapat data Kosong')
							location.href=''</script>";

				}else{
					if($pw!=$cpw){
						echo "<script>alert('Password tidak cocok')
							location.href=''</script>";
					}else{
						$data = array('username'=>$user,'password'=>md5($cpw),'level'=>$lv);
						$this->mod_Admin->uLogin($idp,$data);
						echo "<script>alert('User baru berhasil diUpdate')
							location.href='user'</script>";
					}
				}
	  }else{
	  	$id = $this->uri->segment(3);
	  	$data['isi'] = $this->mod_Admin->oLogin($id)->row_array();
	  	$this->template->load('Template_Administrator','Administrator/edituser',$data);
	  }

	}
	function insert(){
	  if(isset($_POST['post'])){
	  	$user = $this->input->post('user');
		$pw = $this->input->post('pass');
		$cpw = $this->input->post('con');
		$lv = $this->input->post('level');

		if($user=="" || $pw=="" || $cpw=="" || $lv==""){
			echo "<script>alert('Terdapat data Kosong')
					location.href=''</script>";

		}else{
			if($pw!=$cpw){
				echo "<script>alert('Password tidak cocok')
					location.href=''</script>";
			}else{
				$data = array('username'=>$user,'password'=>md5($cpw),'level'=>$lv);
				$this->mod_Admin->inLogin($data);
				echo "<script>alert('User baru berhasil ditambahkan')
					location.href=''</script>";
			}
		}
	  }else{
	  	$this->template->load('Template_Administrator','Administrator/tambahuser');
	  }
	}
}

?>