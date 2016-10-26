<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Transaksi</h4>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                 <?php echo form_open('admin/transaksi')?>
                  <table>
                    <span>
                    <tr>
                      <td><input name="tgl1" class="form-control" type="date" style = "width:250px" value="<?php echo $tgl1; ?>" ></td>
                      <td width="10px"></td>
                      <td> - Sampai - </td>
                      <td width="10px"></td>
                      <td><input name="tgl2" class="form-control" type="date" style = "width:250px" value="<?php echo $tgl2; ?>"> </td>
                      <td width="20px"></td>
                      <td><button type="submit" name="tampil" class="btn btn-success">Tampilkan !!</button></td>
                    </tr>
                    </span>
                  </table>
                </form>
                <br>
                        <table width="100%" class="table table-striped table-bordered responsive" id="tabeldata1">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>No Transaksi</th>
                              <th>No Pendaftaran</th>
                              <th>No Pelanggan</th>
                              <th>Atas Nama</th>
                              <th>Bank / Rekening</th>
                              <th>Total Pembayaran</th>
                              <th>Bukti Pembayaran</th>
                              <th>Tanggal Pembayaran</th>
                              <th width="100px">Aksi</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                          $no = 1;
                          foreach ($isi->result() as $i) {
                            echo "
                            <tr>
                              <td>$no</td>
                              <td>$i->idtransaksi</td>
                              <td>$i->noPendaftaran</td>
                              <td>$i->idPelanggan</td>
                              <td>$i->atasNama</td>
                              <td>$i->TempatPembayaran</td>
                              <td>$i->JumlahTransaksi</td>";
                              ?>
                              <td><img width="90" height="50" src="<?php echo base_url()?>assets/Upload/<?php echo $i->bukti; ?>"></td>
                              <td><?php echo ubhSQL($i->tanggalPembayaran);?></td>
                              <td class="text-center" style="vertical-align:middle;">
                              <a href="<?php echo base_url()?>index.php/admin/Dtransaksi/<?php echo $i->idtransaksi ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                              <a href="<?php echo base_url()?>index.php/admin/cetakTransaski/<?php echo $i->idtransaksi ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
                              </td>
                            </tr>
                            <?php
                            $no++;
                          }
                          ?>
                           
                          </tbody>
                        </table>
                        <br>
            </div>
        </div>