<h2>Data</h2>

<table>
    <tr border="1px solid"> 
        <th width="50">No</th>
        <th width="100">No. Induk</th>
        <th width="510">Nama Karyawan</th>
        <th width="120">Jabatan</th>
        <th width="100">Gaji Pokok</th>
        <th width="100">Tunjangan</th>
    </tr>

    <?php
    include "koneksi.php";

    $no=1;
    $ambildata = mysqli_query($habibi, "SELECT * FROM karyawan, jabatan WHERE 
    karyawan.id_jab = jabatan.id_jab") or die(mysqli_error($habibi));

    while($tampil = mysqli_fetch_array($ambildata)) {       
        echo "
        <tr>
            <td align='center'>$no</td>
            <td align='center'>$tampil[no_induk]</td>
            <td>$tampil[nama]</td>
            <td align='center'>$tampil[nama_jabatan]</td>
            <td align='center'>$tampil[gaji_pokok]</td>
            <td align='center'>$tampil[tunjangan]</td>
        </tr>
        ";
        $no++;
    }

    ?>
</table>