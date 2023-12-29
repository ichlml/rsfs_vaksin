<section class="content-header">
    <h1>
        <?= $title ?>
        <!-- <small>Example 2.0</small> -->
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Fastabiq Sehat</a></li>
        <li class="active"><?= $title ?></li>
    </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
            <div class="panel">
                <div class="panel-body">
                        <div class="col-md-7">
                            <img src="<?=base_url()?>img/vv.webp" alt="Vaksin" width="800">
                        </div>
                        <div class="col-md-5">
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Perhatian!</strong> Silakan isi data dengan data yang sebenarnya.
                            </div>
                            <form action="<?= base_url('welcome/addVaksin')?>" method="post">
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
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function () {
            
            $('#asalLain').hide();
            $('#pekerjaanLain').hide();
            $('#profesiLain').hide();
            $('#vaksin1_tgl').hide();
            $('#vaksin1_jns').hide();

            $('#asal').change(function () {
                // console.log($(this).val());
                if($('#asal').val() == 'other')
                {
                    $('#asalLain').show();
                }else{
                    $('#asalLain').hide();
                }
            });
            $('#pekerjaan').change(function () {
                // console.log($(this).val());
                if($('#pekerjaan').val() == 'other')
                {
                    $('#pekerjaanLain').show();
                }else{
                    $('#pekerjaanLain').hide();
                }
            });
            $('#profesi').change(function () {
                // console.log($(this).val());
                if($('#profesi').val() == 'other')
                {
                    $('#profesiLain').show();
                }else{
                    $('#profesiLain').hide();
                }
            });
            $('#vaksin1').change(function () {
                // console.log($(this).val());
                if($('#vaksin1').val() == 'Pernah')
                {
                    $('#vaksin1_tgl').show();
                    $('#vaksin1_jns').show();
                }else{
                    $('#vaksin1_tgl').hide();
                    $('#vaksin1_jns').hide();
                }
            });
        });
    </script>