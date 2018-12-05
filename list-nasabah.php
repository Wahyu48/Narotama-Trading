<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Narotama Trading</title>
</head>

<body>
    <header>
        <h3>List Nasabah</h3>
    </header>

    <nav>
        <a href="form-input.php">[+] Tambah Baru</a>

    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>No Account</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Kebangsaan</th>
            <th>No KTP/Passport</th>
            <th>Masa Berlaku</th>
            <th>No NPWP</th>
            <th>No Kitas</th>
            <th>Agama</th>
            <th>Status Perkawinan</th>
            <th>Nama Suami/Istri</th>
            <th>Nama Gadis Ibu Kandung</th>
            <th>Nama Saudara Tidak Serumah</th>
            <th>Email</th>
            <th>Alamat Surat Menyurat</th>
            <th>Kode Pos</th>
            <th>Alamat Rumah</th>
            <th>Kode Pos</th>
            <th>No Telp Rumah</th>
            <th>No Telp HP</th>
            <th>No Fax</th>
            <th>Nama Ahli Waris</th>
            <th>Hubungan </th>
            <th>Nama Ahli Waris</th>
            <th>Hubungan</th>
            <th>Latar Belakang Pendidikan</th>
            <th>Status Rumah</th>
            <th>Pekerjaan</th>
            <th>Nama Perusahaan</th>
            <th>Bidang Industri</th>
            <th>Lama Bekerja</th>
            <th>Posisi</th>
            <th>Alamat Perusahaan</th>
            <th>Kode Pos</th>
            <th>No Telp Kantor</th>
            <th>No Fax Kantor</th>
            <th>Email Kantor</th>
            <th>Penghasilan Pertahun</th>
            <th>Sumber Dana</th>
            <th>Nama Bank</th>
            <th>Cabang</th>
            <th>Nama Pemilik Rekening</th>
            <th>No Rekening</th>
            
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM datanasabah_db";
        $query = mysqli_query($db, $sql);

        while($Nasabah = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$Nasabah['id']."</td>";
            echo "<td>".$Nasabah['no_account']."</td>";
            echo "<td>".$Nasabah['nama']."</td>";
            echo "<td>".$Nasabah['jenis_kelamin']."</td>";
            echo "<td>".$Nasabah['tempat_lahir']."</td>";
            echo "<td>".$Nasabah['tanggal_lahir']."</td>";
            echo "<td>".$Nasabah['kebangsaan']."</td>";
            echo "<td>".$Nasabah['no_ktp_passport']."</td>";
            echo "<td>".$Nasabah['masa_berlaku']."</td>";
            echo "<td>".$Nasabah['no_npwp']."</td>";
            echo "<td>".$Nasabah['no_kitas']."</td>";
            echo "<td>".$Nasabah['agama']."</td>";
            echo "<td>".$Nasabah['status_perkawinan']."</td>";
            echo "<td>".$Nasabah['nama_suami_istri']."</td>";
            echo "<td>".$Nasabah['nama_gadis_ibu']."</td>";
            echo "<td>".$Nasabah['nama_saudara_tidak_serumah']."</td>";
            echo "<td>".$Nasabah['email']."</td>";
            echo "<td>".$Nasabah['alamat_surat_menyurat']."</td>";
            echo "<td>".$Nasabah['kode_pos1']."</td>";
            echo "<td>".$Nasabah['alamat_rumah']."</td>";
            echo "<td>".$Nasabah['kode_pos2']."</td>";
            echo "<td>".$Nasabah['no_telp_rumah']."</td>";
            echo "<td>".$Nasabah['no_telp_hp']."</td>";
            echo "<td>".$Nasabah['no_fax']."</td>";
            echo "<td>".$Nasabah['nama_ahli_waris1']."</td>";
            echo "<td>".$Nasabah['hubungan_waris1']."</td>";
            echo "<td>".$Nasabah['nama_ahli_waris2']."</td>";
            echo "<td>".$Nasabah['hubungan_waris2']."</td>";
            echo "<td>".$Nasabah['latar_belakang_pend']."</td>";
            echo "<td>".$Nasabah['status_rumah']."</td>";
            echo "<td>".$Nasabah['pekerjaan']."</td>";
            echo "<td>".$Nasabah['nama_perusahaan']."</td>";
            echo "<td>".$Nasabah['bidang_industri']."</td>";
            echo "<td>".$Nasabah['lama_bekerja']."</td>";
            echo "<td>".$Nasabah['posisi']."</td>";
            echo "<td>".$Nasabah['alamat_perusahaan']."</td>";
            echo "<td>".$Nasabah['kode_pos']."</td>";
            echo "<td>".$Nasabah['no_telp_kantor']."</td>";
            echo "<td>".$Nasabah['no_fax_kantor']."</td>";
            echo "<td>".$Nasabah['email_kantor']."</td>";
            echo "<td>".$Nasabah['penghasilan_pertahun']."</td>";
            echo "<td>".$Nasabah['sumber_dana']."</td>";
            echo "<td>".$Nasabah['nama_bank']."</td>";
            echo "<td>".$Nasabah['cabang']."</td>";
            echo "<td>".$Nasabah['nama_pemilik_rek']."</td>";
            echo "<td>".$Nasabah['no_rek']."</td>";
            
            


            echo "<td>";
            echo "<a href='form-edit.php?id=".$Nasabah['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$Nasabah['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total Data Nasabah: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>