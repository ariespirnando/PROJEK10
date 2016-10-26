<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Laporan Transaksi</h4>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <?php echo form_open('admin/laporanTransaski')?>
                  <table>
                    <span>
                    <tr>
                      <td><input name="tgl1" class="form-control" type="date" style = "width:250px" ></td>
                      <td width="10px"></td>
                      <td> - Sampai - </td>
                      <td width="10px"></td>
                      <td><input name="tgl2" class="form-control" type="date" style = "width:250px" > </td>
                      <td width="20px"></td>
                      <td><button type="submit" name="tampil" class="btn btn-success">Tampilkan !!</button></td>
                      <td width="10px"></td>
                      <td><button type="submit" name="cetak" class="btn btn-success">Cetak !!</button></td>
                    </tr>
                    </span>
                  </table>
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
                              <th>Tanggal Pembayaran</th>
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
                              <td><?php echo ubhSQL($i->tanggalPembayaran);?></td>
                            </tr>
                            <?php
                            $no++;
                          }
                          ?>
                           
                          </tbody>
                        </table>
            </div>
        </div>
        <br>
        <br>