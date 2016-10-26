<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>PDAM Way Rilau :: Kota Bandarlampung</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url();?>assets/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="<?php echo base_url();?>assets/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url();?>assets/assets/css/style.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/assets/img/logo.png">

    <link href="<?php echo base_url();?>assets/assets/css/content.css" rel="stylesheet" />

    <link href="<?php echo base_url();?>assets/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />

    <script src="<?php echo base_url();?>assets/assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url();?>assets/assets/js/bootstrap.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/fileinput.js" type="text/javascript"></script>


    <link href="<?=base_url()?>assets/js/jquery-ui.css" rel="stylesheet">

    <script src="<?=base_url()?>assets/js/jquery-ui.js" type="text/javascript"></script>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.css"/>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css"/>
   

     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <!-- HEADER END-->
	<br>
        <div class="container">
            <div class="row">
				<div class="col-md-1">
                    <img src="<?php echo base_url();?>assets/assets/img/logo.png" width="100">
                </div>
                <div class="col-md-11">
                    <h4 class="page-head-lineHe" color="#000000">Perusahaan Daerah Air Minum (PDAM) Kota Bandar Lampung</h4>
                    <p><b>Aplikasi Pendaftaran Penyambungan Baru PDAM Wayrilau</b><br>
                    </p>
                </div>
            </div>
		</div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url()?>index.php/administrator">Home</a></li>
                            <li><a href="<?php echo base_url()?>index.php/administrator/user">User</a></li>
                            <li><a href="<?php echo base_url()?>index.php/con_user/logout">Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <?php echo $contents ?>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
	<div class="navbar navbar-invers navbar-fixed-bottom">
    <footer>
	
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2016 PDAM WayRilau :: Bandarlampung :: Kontak : (0721) 483855
                </div>

            </div>
        </div>
	
    </footer>
	</div>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.js"></script>
    
        <script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#tabeldata1").dataTable({         
                    "language": {"sProcessing":   "Sedang memproses...",
                    "sLengthMenu":   "Tampilkan _MENU_ entri",
                    "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                    "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                    "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                    "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                    "sInfoPostFix":  "",
                    "sSearch":       "Cari Data: ",
                    "sUrl":          "",
                    "oPaginate": {
                        "sFirst":    "Pertama",
                        "sPrevious": "Sebelumnya",
                        "sNext":     "Selanjutnya",
                    "sLast":     "Terakhir"
                    }
        }
        });
            });
    </script>


    <script>
        $(function(){
            $('#pbinfo-Alur').click(function(){$('#content-acc-Alur').slideToggle(500);});
            $('#pbinfo-syarat').click(function(){$('#content-acc-syarat').slideToggle(500);});
            $('#pbinfo-bank').click(function(){$('#content-acc-bank').slideToggle(500);});
            $('#pbinfo-biaya').click(function(){$('#content-acc-biaya').slideToggle(500);});
            $('#pbinfo-cara').click(function(){$('#content-acc-cara').slideToggle(500);});
        });
    </script>
     <script>
     $(function () {
        $("#kode").autocomplete({   
            minLength:0,
            delay:0,
            source:'<?php echo site_url('incKelurahan/get_all');?>', 
            select:function(event, ui){
                $('#idKelu').val(ui.item.idKota);
                $('#radius').val(ui.item.Radius);
                }
            });
        });
    </script>
    <script>
       $(document).ready(function() {
     
         $("#tombol_fade_out").click(function() {
           $("#box").fadeOut("slow");
         })
     
       });
   </script>
</body>
</html>
