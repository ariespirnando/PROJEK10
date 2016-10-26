<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Pendaftaran</h4>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <?php echo form_open('admin/Pendaftaran')?>
                  <table>
                    <span>
                    <tr>
                      <td><input name="tgl1" class="form-control" type="date" style = "width:250px" placeholder="..Masukan Tanggal...."></td>
                      <td width="10px"></td>
                      <td> - Sampai - </td>
                      <td width="10px"></td>
                      <td><input name="tgl2" class="form-control" type="date" style = "width:250px" placeholder="..Masukan Tanggal...."> </td>
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
                              <th>No Pendaftaran</th>
                              <th>No Pelanggan</th>
                              <th>Nama Pelanggan</th>
                              <th>Alamat</th>
                              <th>RT / RW / Kodepos</th>
                              <th>HP</th>
                              <th>Fungsi Bangunan</th>
                              <th>Tanggal Pendaftaran</th>
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
                              <td>$i->noPendaftaran</td>
                              <td>$i->idPelanggan</td>
                              <td>$i->Nama</td>
                              <td>$i->Alamat, $i->NamaKelurahan</td>                             
                              <td>$i->RT / $i->RW / $i->KodePos</td>
                              <td>$i->noHP</td>
                              <td>$i->fungsiBangunan</td>";
                              ?>
                              <td><?php echo ubhSQL($i->tanggalDaftar); ?></td>
                              <td class="text-center" style="vertical-align:middle;">
                              <a href="<?php echo base_url()?>index.php/admin/Dpendaftaran/<?php echo $i->noPendaftaran?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                              <a href="<?php echo base_url()?>index.php/admin/cetakPendaftaran/<?php echo $i->noPendaftaran?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-print" aria-hidden="true"></span></a>
                              </td>
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