    <?php
    //cek button    
        if ($_POST['Submit'] == "Submit") {
        $Ktp    = $_POST['Ktp'];
        $Nama            = $_POST['Nama'];
        $Kelamin        = $_POST['Kelamin'];
        $Agama            = $_POST['Agama'];
        $Komentar       = $_POST['Komentar'];
        //validasi data data kosong
        if (empty($_POST['Ktp'])||empty($_POST['Nama'])||empty($_POST['Kelamin'])||empty($_POST['Agama'])||empty($_POST['Komentar'])) {
            ?>
                <script language="JavaScript">
                    alert('Data Harap Dilengkapi!');
                    document.location='form.php';
                </script>
            <?php
        }
        else {
        include "koneksi.php";
        $cek=mysql_num_rows (mysql_query("SELECT * FROM Biodata WHERE 1='$_POST[Ktp]'"));
        if ($cek > 0) {
        ?>
            <script language="JavaScript">
            alert('Ktp sudah dipakai!, silahkan ganti Kto yang lain');
            document.location='form.<?php  ?>';
            </script>
        <?php
        }
        //Masukan data ke Table
        $input    ="INSERT INTO Manusia (Ktp,Nama,Kelamin,Agama,Komentar) VALUES ('$Ktp','$Nama','$Kelamin','$Agama','$Komentar')";
        $query_input =mysql_query($input);
        if ($query_input) {
        //Jika Sukses
        ?>
            <script language="JavaScript">
            alert('Input Biodata Berhasil');
            document.location='form.php';
            </script>
        <?php
        }
        else {
        //Jika Gagal
        echo "Input Biodata Gagal!, Silahkan diulangi!";
        }
    //Tutup koneksi engine MySQL
        mysql_close($Open);
        }
    }
    ?>
