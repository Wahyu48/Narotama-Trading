<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $no_account = $_POST['no_account'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $kebangsaan = $_POST['kebangsaan'];
    $no_ktp_passport = $_POST['no_ktp_passport'];
    $masa_berlaku = $_POST['masa_berlaku'];
    $no_npwp = $_POST['no_npwp'];
    $no_kitas = $_POST['no_kitas'];
    $agama = $_POST['agama'];
    $status_perkawinan = $_POST['status_perkawinan'];
    $nama_suami_istri = $_POST['nama_suami_istri'];
    $nama_gadis_ibu = $_POST['nama_gadis_ibu'];
    $nama_saudara_tidak_serumah = $_POST['nama_saudara_tidak_serumah'];
    $email = $_POST['email'];
    $alamat_surat_menyurat = $_POST['alamat_surat_menyurat'];
    $kode_pos1 = $_POST['kode_pos1'];
    $alamat_rumah = $_POST['alamat_rumah'];
    $kode_pos2 = $_POST['kode_pos2'];
    $no_telp_rumah = $_POST['no_telp_rumah'];
    $no_telp_hp = $_POST['no_telp_hp'];
    $no_fax = $_POST['no_fax'];
    $no_npwp = $_POST['no_npwp'];
    $nama_ahli_waris1 = $_POST['nama_ahli_waris1'];
    $hubungan_waris1 = $_POST['hubungan_waris1'];
    $nama_ahli_waris2 = $_POST['nama_ahli_waris2'];
    $hubungan_waris2 = $_POST['hubungan_waris2'];
    $latar_belakang_pend = $_POST['latar_belakang_pend'];
    $status_rumah = $_POST['status_rumah'];
    $pekerjaan = $_POST['pekerjaan'];
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $kode_pos = $_POST['kode_pos'];
    $no_telp_kantor = $_POST['no_telp_kantor'];
    $no_fax_kantor = $_POST['no_fax_kantor'];
    $email_kantor = $_POST['email_kantor'];
    $penghasilan_pertahun = $_POST['penghasilan_pertahun'];
    $sumber_dana = $_POST['sumber_dana'];
    $nama_bank = $_POST['nama_bank'];
    $cabang = $_POST['cabang'];
    $nama_pemilik_rek = $_POST['nama_pemilik_rek'];
    $no_rek = $_POST['no_rek'];
    

    // buat query
    $sql = "INSERT INTO datanasabah_db (no_account,nama,jenis_kelamin,tempat_lahir,tanggal_lahir,kebangsaan,no_ktp_passport,masa_berlaku,no_npwp,no_kitas,agama,status_perkawinan,nama_suami_istri,nama_gadis_ibu,nama_saudara_tidak_serumah,email,alamat_surat_menyurat,kode_pos1,alamat_rumah,kode_pos2,no_telp_rumah,no_telp_hp,no_fax,no_npwp,nama_ahli_waris1,hubungan_waris1,nama_ahli_waris2,hubungan_waris2,latar_belakang_pend,status_rumah,pekerjaan,nama_perusahaan,kode_pos,no_telp_kantor,no_fax_kantor,email_kantor,penghasilan_pertahun,sumber_dana,nama_bank,cabang,nama_pemilik_rek,no_rek) VALUE ('$no_account','$nama','$jk','$tempat_lahir','$tanggal_lahir','$kebangsaan','$no_ktp_passport','$masa_berlaku','$no_npwp','$no_kitas','$agama','$status_perkawinan','$nama_suami_istri','$nama_gadis_ibu','$nama_saudara_tidak_serumah','$email','$alamat_surat_menyurat','$kode_pos1','$alamat_rumah','$kode_pos2','$no_telp_rumah','$no_telp_hp,'$no_fax','$no_npwp','$nama_ahli_waris1','$hubungan_waris1','$nama_ahli_waris2','$hubungan_waris2','$latar_belakang_pend','$status_rumah','$pekerjaan','$nama_perusahaan','$kode_pos','$no_telp_kantor','$no_fax_kantor','$email_kantor','$penghasilan_pertahun','$sumber_dana','$nama_bank','$cabang','$nama_pemilik_rek','$no_rek')";
    $query = mysqli_query($db, $sql);


    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header("location:index.php");
 
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo "Input gagal";
    }


} else {
    die("Akses dilarang...");
}

?>