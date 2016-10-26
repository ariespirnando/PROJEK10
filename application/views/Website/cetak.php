
<!DOCTYPE html>
<head>
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Bukti Pendaftaran</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <!-- HEADER END-->
	
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
            <div class="col-md-2">
                            </div>
                <div class="col-md-10">
                    Perusahaan Daerah Air Minum (PDAM) Kota Bandar Lampung<br>
                    Kontak : (0721) 483855 atau Alamat : Jl. P Emir M Noer No.11a, Sumur Putri, Tlk. Betung Utara, <br>Kota Bandar Lampung, Lampung 35211</p>
                    <hr>
                </div>
                <div class="col-md-12">
                    <div class="alert">
                    <br>
                        <?php echo tgl_indo_timestamp($isiPreview['tanggalDaftar']) ?><br>
                        <b>Bukti Pendaftaran,</b><br>Anda sudah melakukan pendaftaran pemasangan baru PDAM WayRilau Kota Bandar lampung<br>
						Berikut merupakan Rincian pendaftaran anda,
						<br><br> 

						<table>
							<tr>
								<td>No pendaftaran</td>
								<td>:</td>
								<td><b><?php echo $isiPreview['noPendaftaran'] ?></b></td>
							</tr>
							<tr>
								<td>No Pelanggan</td>
								<td>:</td>
								<td><b><?php echo $isiPreview['idPelanggan'] ?></b></td>
							</tr>
                            <tr>
                                <td>Nama Pelanggan</td>
                                <td>:</td>
                                <td><b><?php echo $isiPreview['Nama'] ?></b></td>
                            </tr>
                            <tr>
                                <td>Alamat Pelanggan</td>
                                <td>:</td>
                                <td><b><?php echo $isiPreview['Alamat'] ?></b></td>
                            </tr>
                            <tr>
                                <td>fungsi Bangunan</td>
                                <td>:</td>
                                <td><b><?php echo $isiPreview['fungsiBangunan'] ?></b></td>
                            </tr>
                            <?php 
                            if($isiPreview['fungsiBangunan']=='Sosial'){
                                $bayar ="Rp. 170.000,-";
                            }else{
                                $bayar ="Rp. 150.000,-";
                            }
                            ?>
                            <tr>
                                <td>Total Tagihan</td>
                                <td>:</td>
                                <td><b><?php echo $bayar; ?></b></td>
                            </tr>
						</table><br>
                        <?php 
                        $tgl1 = ubhSQL($isiPreview['tanggalDaftar']);
                        $tgl2 = date('Y-m-d', strtotime('+6 days', strtotime($tgl1)));
                        ?>
                        Silakan Lakukan Pembayaran, dan melakukan konfirmasi Sebelum tanggal <?php echo tgl_indo($tgl2); ?><br> <br>Terima Kasih,
                        <br><br><br>

                        <font size="10">PDAM Way Rilau</font>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
