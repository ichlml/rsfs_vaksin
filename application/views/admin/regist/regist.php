<section class="content-header">
    <h1>
        Daftar Registrasi Vaksin
        <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard </a></li>
        <li class="active">Daftar Registrasi Vaksin</li>
    </ol>
</section>

    <!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-4">
            <div class="panel">
                <div class="panel-heading"><center><b>Registrasi Vaksin</b></center></div>
                <div class="panel-body">
                    <form action="<?= base_url('admin/addVaksin')?>" method="post">
                        <div class="form-group">
                            <label for="">NIK / NOMOR KTP <span style="color:red;">*</span></label>
                            <input type="text" name="nik" class="form-control" autocomplete="off" require>
                        </div>
                        <div class="form-group">
                            <label for="">NAMA LENGKAP <span style="color:red;">*</span></label> <br>
                            <small><i>Tulis dengan huruf kapital</i></small>
                            <input type="text" name="nama_peserta" class="form-control" autocomplete="off" require>
                        </div>
                        <div class="form-group">
                            <label for="">TANGGAL LAHIR <span style="color:red;">*</span></label>
                            <input type="date" name="tgl_lahir" class="form-control" autocomplete="off" require>
                        </div>
                        <div class="form-group">
                            <label for="">JENIS KELAMIN <span style="color:red;">*</span></label>
                            <select name="jkel" id="jkel" class="form-control" autocomplete="off" require>
                                <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">ALAMAT <span style="color:red;">*</span></label><br>
                            <small><i>sesuai ktp</i></small>
                            <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">NO HP <span style="color:red;">*</span></label><br>
                            <small><i>Pastikan nomor aktif dan bisa menerima sms, Contoh : 085156456123</i></small>
                            <input type="text" name="hp" class="form-control" autocomplete="off" require>
                        </div>
                        <div class="form-group">
                            <label for="">NO WA (opsional)</label><br>
                            <small><i>Pastikan nomor bisa menerima whatsapp, Contoh : 085156456123</i></small>
                            <input type="text" name="wa" class="form-control" autocomplete="off" >
                        </div>
                        <div class="form-group">
                            <label for="">ASAL <span style="color:red;">*</span></label>
                            <select name="asal"  id="asal" class="form-control" require>
                                <option value="" selected disabled> Asal Peserta Vaksin</option>
                                <option value="Masyarakat Umum">Masyarakat Umum</option>
                                <option value="Lansia">Lansia</option>
                                <option value="PDM PATI">PDM PATI</option>
                                <option value="Karyawan">Karyawan RSU Fastabiq Sehat PKU Muhammadiyah</option>
                                <option value="other">Yang Lain ...</option>
                            </select>
                        </div>
                        <div class="form-group" id="asalLain">
                            <label for="">ASAL LAIN <span style="color:red;">*</span></label>
                            <input type="text" name="other_asal" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="">JENIS PEKERJAAN <span style="color:red;">*</span></label>
                            <select name="pekerjaan"  id="pekerjaan" class="form-control" require>
                                <option value="" selected disabled> Pilih Jenis Pekerjaan </option>
                                <option value="Masyarakat Umum">Masyarakat Umum</option>
                                <option value="Petugas Medis dan Non Medis di Fasilitas Pelayanan Kesehatan">Petugas Medis dan Non Medis di Fasilitas Pelayanan Kesehatan</option>
                                <option value="Petugas Pelayanan Publik yang Berhadapan Langsung dengan Masyarakat">Petugas Pelayanan Publik yang Berhadapan Langsung dengan Masyarakat</option>
                                <option value="Administrator Pemerintah">Administrator Pemerintah</option>
                                <option value="Tidak Bekerja">Tidak Bekerja</option>
                                <option value="other">Yang Lain ...</option>
                            </select>
                        </div>
                        <div class="form-group" id="pekerjaanLain">
                            <label for="">PEKERJAAN LAIN <span style="color:red;">*</span></label>
                            <input type="text" name="other_pekerjaan" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="">PROFESI <span style="color:red;">*</span></label><br>
                            <small><i>Jika bukan Dokter, Perawat, Bidan. Pilih Yang Lain ...</i></small>
                            <select name="profesi"  id="profesi" class="form-control" require>
                                <option value="" selected disabled> Pilih Profesi </option>
                                <option value="Dokter">Dokter</option>
                                <option value="Perawat">Perawat</option>
                                <option value="Bidan">Bidan</option>
                                <option value="other">Yang Lain ...</option>
                            </select>
                        </div>
                        <div class="form-group" id="profesiLain">
                            <label for="">PROFESI LAIN <span style="color:red;">*</span></label>
                            <input type="text" name="other_profesi" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="">Apakah anda pernah vaksin COVID-19 dosis ke 1 ? <span style="color:red;">*</span></label>
                            <select name="vaksin1"  id="vaksin1" class="form-control" require>
                                <option value="" selected disabled> Pilih Jawaban </option>
                                <option value="Pernah">Pernah</option>
                                <option value="Belum Pernah">Belum Pernah</option>
                            </select>
                        </div>
                        <div class="form-group" id="vaksin1_tgl">
                            <label for="">Tanggal Vaksin COVID-19 Dosis ke 1 <span style="color:red;">*</span></label>
                            <input type="date" name="tgl_vaksin1" class="form-control" autocomplete="off">
                        </div>
                        <div class="form-group" id="vaksin1_jns">
                            <label for="">Jenis Vaksin COVID-19 Dosis ke 1<span style="color:red;">*</span></label>
                            <select name="jns_vaksin1"  id="jns_vaksin1" class="form-control">
                                <option value="-" selected disabled> Pilih Jenis Vaksin </option>
                                <option value="Sinovac/Coronavac">Sinovac/Coronavac</option>
                                <option value="AstraZeneca">AstraZeneca</option>
                                <option value="Moderna">Moderna</option>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary btn-md" value="Daftar Vaksin">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel">
                <div class="panel-heading"><center><b>Daftar Registrasi Vaksin</b></center></div>
                <div class="panel-body">
                    <form class="form-inline" action="<?= base_url('admin/importCSV')?>" id="import_csv" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="file" method="post" name="csv" class="form-control" required accept=".csv">
                        </div>
                        <input type="submit" value="Upload CSV" class="btn btn-sm btn-success">
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>NIK</th>
                                    <th>NAMA</th>
                                    <th>ALAMAT</th>
                                    <th>TGL DAFTAR</th>
                                    <th>*</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach($data as $d){
                                ?>
                                <tr>
                                    <td><?= $no++?></td>
                                    <td><?= $d->nik?></td>
                                    <td><?= $d->nama_peserta?></td>
                                    <td><?= $d->alamat?></td>
                                    <td><?= $d->tgl_daftar?></td>
                                    <td>
                                        <a href="<?= base_url('admin/kartukendali/'.$d->id_peserta)?>" class="btn btn-sm btn-danger">Kartu Kendali</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <!-- right col -->
    </div>
    <!-- /.row (main row) -->

</section>