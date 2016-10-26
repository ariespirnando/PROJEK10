<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Laporan Pendaftaran</h4>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <?php echo form_open('admin/laporanPendaftarn')?>
                  <table>
                    <span>
                    <tr>
                      <td><input name="tgl1" class="form-control" type="date" style = "width:250px" ></td>
                      <td width="10px"></td>
                      <td> - Sampai - </td>
                      <td width="10px"></td>
                      <td><input name="tgl2" class="form-control" type="date" style = "width:250px"> </td>
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
                              <th>No Pendaftaran</th>
                              <th>No Pelanggan</th>
                              <th>Nama Pelanggan</th>
                              <th>Alamat</th>
                              <th>RT / RW / Kodepos</th>
                              <th>HP</th>
                              <th>Fungsi Bangunan</th>
                              <th>Tanggal Pendaftaran</th>
                            </tr>
                          </thead>
                          <tbody>
                           <?php 
                          $no = 1;
                          foreach ($isi->result() as $i) {
                            echo "
                            <tr>
                              <td>$no</td>
                              <td>$i->noPendaftaran</td>
                              <td>$i->idPelanggan</td>
                              <td>$i->Nama</td>
                              <td>$i->Alamat, $i->NamaKelurahan</td>                             
                              <td>$i->RT / $i->RW / $i->KodePos</td>
                              <td>$i->noHP</td>
                              <td>$i->fungsiBangunan</td>";
                              ?>
                              <td><?php echo ubhSQL($i->tanggalDaftar); ?></td>
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