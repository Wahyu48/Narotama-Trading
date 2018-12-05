<!DOCTYPE html>
<html>
<head>
    <title>Formulir Nasabah Baru</title>
</head>

<body>
    <header>
        <h3>Formulir Nasabah Baru</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>
        <p>
            <label for="no_account">No Account: </label>
            <input type="number" name="no_account" placeholder="1234" />
        </p>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="jenis_kelamin">Jenis kelamin: </label>
            <select name="jenis_kelamin">
                <option>Laki-Laki</option>
                <option>Perempuan</option>
                <option>lainnya</option>
            </select>
        </p>
        <p>
            <label for="tempat_lahir">Tempat lahir: </label>
            <input type="text" name="tempat_lahir" placeholder="tempat lahir" />
        </p>
        <p>
            <label for="tanggal_lahir">Tanggal lahir: </label>
            <input type="date" name="tanggal_lahir" placeholder="yyyymmdd" />
        </p>
        <p>
            <label for="kebangsaan">Kebangsaan: </label>
            <input type="text" name="kebangsaan" placeholder="kebangsaan" />
        </p>
        <p>
            <label for="no_ktp_passport">No KTP/Passport: </label>
            <input type="number" name="no_ktp_passport" placeholder="1234" />
        </p>
        <p>
            <label for="masa_berlaku">Masa berlaku: </label>
            <input type="date" name="masa_berlaku" placeholder="yyyymmdd" />
        </p>
        <p>
            <label for="no_npwp">No NPWP: </label>
            <input type="number" name="no_npwp" placeholder="1234" />
        </p>
        <p>
            <label for="no_kitas">No Kitas: </label>
            <input type="text" name="no_kitas" placeholder="No Kitas" />
        </p>
        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>lainnya</option>
            </select>
        </p>
        <p>
            <label for="status_perkawinan">Status perkawinan: </label>
            <select name="status_perkawinan">
                <option>Sendiri</option>
                <option>Menikah</option>
                <option>lainnya</option>
            </select>
        </p>
        <p>
            <label for="nama_suami_istri">Nama Suami/Istri: </label>
            <input type="text" name="nama_suami_istri" placeholder="Nama Suami/Istri" />
        </p>
        <p>
            <label for="nama_gadis_ibu">Nama gadis ibu kandung: </label>
            <input type="text" name="nama_gadis_ibu" placeholder="Nama Gadis Ibu Kandung" />
        </p>
        <p>
            <label for="nama_saudara_tidak_serumah">Nama saudara tidak serumah: </label>
            <input type="text" name="nama_saudara_tidak_serumah" placeholder="Nama Saudara Tidak Serumah" />
        </p>
        <p>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="email" />
        </p>
        <p>
             <label for="alamat_surat_menyurat">Alamat surat menyurat: </label>
            <input type="text" name="alamat_surat_menyurat" placeholder="alamat surat menyurat" />
        </p>
        <p>
            <label for="kode_pos1">Kode Pos: </label>
            <input type="number" name="kode_pos1" placeholder="1234" />
        </p>
        <p>
            <label for="alamat_rumah">Alamat rumah: </label>
            <input type="text" name="alamat_rumah" placeholder="alamat rumah" />
        </p>
        <p>
            <label for="kode_pos2">Kode Pos: </label>
            <input type="number" name="kode_pos2" placeholder="1234" />
        </p>
        <p>
            <label for="no_telp_rumah">No Telp Rumah: </label>
            <input type="number" name="no_telp_rumah" placeholder="1234" />
        </p>
        <p>
            <label for="no_telp_hp">No HP: </label>
            <input type="number" name="no_telp_hp" placeholder="1234" />
        </p>
        <p>
            <label for="no_fax">No fax: </label>
            <input type="number" name="no_fax" placeholder="1234" />
        </p>
        <p>
            <label for="nama_ahli_waris1">Nama Ahli Waris: </label>
            <input type="text" name="nama_ahli_waris1" placeholder="nama ahli waris" />
        </p>
        <p>
            <label for="hubungan_waris1">Hubungan: </label>
            <input type="text" name="hubungan_waris1" placeholder="Hubungan" />
        </p>
        <label for="nama_ahli_waris2">Nama Ahli Waris: </label>
            <input type="text" name="nama_ahli_waris2" placeholder="nama ahli waris" />
        </p>
        <p>
            <label for="hubungan_waris2">Hubungan: </label>
            <input type="text" name="hubungan_waris2" placeholder="Hubungan" />
        </p>
        <p>
            <label for="latar_belakang_pend">Latar belakang pendidikan: </label>
            <label><input type="radio" name="latar_belakang_pend" value="SD"> SD</label>
            <label><input type="radio" name="latar_belakang_pend" value="SMP"> SMP</label>
            <label><input type="radio" name="latar_belakang_pend" value="SMU"> SMU</label>
            <label><input type="radio" name="latar_belakang_pend" value="Akademi-D3"> Akedemi-D3</label>
            <label><input type="radio" name="latar_belakang_pend" value="Sarjana-S1"> Sarjana-S1</label>
            <label><input type="radio" name="latar_belakang_pend" value="Sarjana-S2"> Sarjana-S2</label>
            <label><input type="radio" name="latar_belakang_pend" value="Sarjana-S3"> Sarjana-S3</label>
            <label><input type="radio" name="latar_belakang_pend" value="Lainnya"> Lainnya</label>
        </p>
        <p>
            <label for="status_rumah">Status Rumah: </label>
            <label><input type="radio" name="status_rumah" value="Milik Sendiri"> Milik sendiri</label>
            <label><input type="radio" name="status_rumah" value="Milik Keluarga"> Milik Keluarga</label>
            <label><input type="radio" name="status_rumah" value="Milik Kantor"> Milik Kantor</label>
             <label><input type="radio" name="status_rumah" value="Sewa"> Sewa</label>
        </p>
        <p>
            <label for="pekerjaan">Pekerjaan: </label>
            <label><input type="radio" name="pekerjaan" value="Peg.Negeri"> Pegawai negeri</label>
            <label><input type="radio" name="pekerjaan" value="Karyawan/ti"> Karyawan/ti</label>
            <label><input type="radio" name="pekerjaan" value="Pengusaha"> Pengusaha</label>
            <label><input type="radio" name="pekerjaan" value="Mahasiswa">Mahasiswa</label>
            <label><input type="radio" name="pekerjaan" value="Ibu Rumah Tangga"> Ibu Rumah Tangga</label>
            <label><input type="radio" name="pekerjaan" value="Wiraswasta"> wiraswasta</label>
            <label><input type="radio" name="pekerjaan" value="Profesional"> Profesional</label>
            <label><input type="radio" name="pekerjaan" value="Pensiunan"> Pensiunan</label>
             <label><input type="radio" name="pekerjaan" value="TNI/Polri">TNI/Polri</label>
            <label><input type="radio" name="pekerjaan" value="BUMN"> BUMN</label>
            <label><input type="radio" name="pekerjaan" value="GURU"> Guru</label>
            <label><input type="radio" name="pekerjaan" value="Lainnya"> Lainnya</label>
        </p>
        <p>
            <label for="nama_perusahaan">Nama perusahaan: </label>
            <input type="text" name="nama_perusahaan" placeholder="nama_perusahaan" />
        </p>
         <p>
            <label for="bidang_industri">Bidang industri: </label>
            <input type="text" name="bidang_industri" placeholder="bidang industri" />
        </p>
        <p>
            <label for="lama_bekerja">Lama bekerja: </label>
            <input type="text" name="lama_bekerja" placeholder="lama bekerja" />
        </p>
         <p>
            <label for="posisi">posisi: </label>
            <input type="text" name="posisi" placeholder="posisi" />
        </p>
        <p>
            <label for="alamat_perusahaan">Alamat perusahaan: </label>
            <input type="text" name="alamat_perusahaan" placeholder="alamat perusahaan" />
        </p>
        <p>
            <label for="kode_pos">Kode pos: </label>
            <input type="number" name="kode_pos" placeholder="1234" />
        </p>
        <p>
            <label for="no_telp_kantor">No Telp Kantor: </label>
            <input type="number" name="no_telp_kantor" placeholder="1234" />
        </p>
        <p>
            <label for="no_fax_kantor">No Fax Kantor: </label>
            <input type="number" name="no_fax_kantor" placeholder="1234" />
        </p>
             <p>
            <label for="email_kantor">Email Kantor: </label>
            <input type="text" name="email_kantor" placeholder="email kantor" />
        </p>
        <p>
            <label for="penghasilan_pertahun">Penghasilan pertahun: </label>
            <label><input type="radio" name="penghasilan_pertahun" value="dibawah Rp 10 Juta">dibawah Rp 10 Juta</label>
            <label><input type="radio" name="penghasilan_pertahun" value="Rp 11- Rp 50 Juta"> Rp 11- Rp 50 Juta</label>
            <label><input type="radio" name="penghasilan_pertahun" value="Rp 51 - Rp 100 Juta">Rp 51 - Rp 100 Juta</label>
            <label><input type="radio" name="penghasilan_pertahun" value="Rp 101 - Rp 500 Juta">Rp 101 - Rp 500 Juta</label>
            <label><input type="radio" name="penghasilan_pertahun" value="Rp 501 - 1 Milyard">Rp 501 - 1 Milyard</label>
            <label><input type="radio" name="penghasilan_pertahun" value="Diatas Rp 1 Milyard">Diatas Rp 1 Milyard</label>
        </p>
        <p>
            <label for="sumber_dana">Sumber dana: </label>
            <label><input type="radio" name="sumber_dana" value="Gaji">Gaji</label>
            <label><input type="radio" name="sumber_dana" value="Keuntungan Bisnis">Keuntungan Bisnis</label>
            <label><input type="radio" name="sumber_dana" value="Bunga">Bunga</label>
            <label><input type="radio" name="sumber_dana" value="Dana Pensiun">Dana Pensiun</label>
            <label><input type="radio" name="sumber_dana" value="Tabungan">Tabungan</label>
            <label><input type="radio" name="sumber_dana" value="Tunjangan">Tunjangan</label>
            <label><input type="radio" name="sumber_dana" value="Warisan">Warisan</label>
            <label><input type="radio" name="sumber_dana" value="Lotere">Lotere</label>
            <label><input type="radio" name="sumber_dana" value="Bunga">Bunga</label>
            <label><input type="radio" name="sumber_dana" value="Deposito">Deposito</label>
            <label><input type="radio" name="sumber_dana" value="Hibah dari orang tuan atau anak ">Hibah dari orang tua atau anak</label>
            <label><input type="radio" name="sumber_dana" value="Hibah dari suami/istri">Hibah dari suami/istri</label>
            <label><input type="radio" name="sumber_dana" value="Investasi">Investasi</label>
            <label><input type="radio" name="sumber_dana" value="Lainnya">Lainnya</label>
        </p>
        <p>
            <label for="nama_bank">Nama bank: </label>
            <input type="text" name="nama_bank" placeholder="nama bank" />
        </p>
        <p>
            <label for="cabang">cabang: </label>
            <input type="text" name="cabang" placeholder="cabang" />
        </p>
        <p>
            <label for="nama_pemilik_rek">Nama pemilik rekening: </label>
            <input type="text" name="nama_pemilik_rek" placeholder="nama pemilik rekening" />
        </p>
        <p>
            <label for="no_rek">no_rekening: </label>
            <input type="number" name="no_rek" placeholder="1234" />
        </p>





        <p>
            <input type="submit" value="daftar" name="daftar" />
        </p>


        </fieldset>

    </form>

    </body>
</html>