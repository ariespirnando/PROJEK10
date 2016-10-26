<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">*Pengaturan User</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-8">
                    <table width="100%" class="table table-striped table-bordered responsive" id="tabeldata1">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Level</th>
                              <th>Created on</th>
                              <th width="100px">Aksi</th>
                            </tr>
                          </thead>
                           <?php 
                          $no = 1;
                          foreach ($isi->result() as $i) {
                            if($i->level == "1"){
                                $l = "User";
                            }else{
                                $l = "Admin";
                            }
                            echo "
                            <tr>
                              <td>$no</td>
                              <td>$i->username</td>
                              <td>$i->password</td>
                              <td>$l</td>"
                              ?>
                              <td><?php echo tgl_indo_timestamp($i->time);?></td>
                              <td class="text-center" style="vertical-align:middle;">
                              <a href="<?php echo base_url()?>index.php/administrator/edit/<?php echo $i->iduser ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                              <a href="<?php echo base_url()?>index.php/administrator/delete/<?php echo $i->iduser ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan dihapus')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>                            

                              </td>
                            </tr>
                            <?php
                            $no++;
                          }
                          ?>
                           
                          </tbody>
                    </table>


                </div>
				<div class="col-md-4">
                    <div class="alert alert-warning">
						Klik untuk melihat Menambah User dan Password Sistem<br>
						<a href="<?php echo base_url()?>index.php/administrator/insert" class="btn btn-success"><span class="glyphicon glyphicon-plus"> Tambah</span> </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>