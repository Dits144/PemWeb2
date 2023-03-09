<?php

    $nama_siswa = $_POST['namalengkap'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['uts'];
    $nilai_uas = $_POST['uas'];
    $nilai_tugas = $_POST['tugas'];
    $mtk = ($nilai_uts * 0.3) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);
?>
        Nama : <?= $nama_siswa; ?>
        <br/>Mata Kuliah : <?= $mata_kuliah; ?>
        <br/>Nilai UTS : <?= $nilai_uts; ?>
        <br/>Nilai UAS : <?= $nilai_uas; ?>
        <br/>Nilai Tugas Praktikum : <?= $nilai_tugas; ?>
        <br>Hasil : <?php
        if($mtk >= 55) {
            echo 'LULUS';
        }else{
            echo 'TIDAK LULUS';
        }
        ?>
        <br>Grade : <?php
if($mtk <= 35){
    echo 'E';
}elseif($mtk <= 55){
    echo 'D';
}elseif($mtk <= 69){
    echo 'C';
}elseif($mtk <= 84){
    echo 'B';
}elseif($mtk <= 100){
    echo 'A';
}else{
    echo 'I';
}
        ?>
        <br>Predikat : <?php 
        switch($mtk){
            case ($mtk < 35):
                echo 'Sangat Kurang';
                break;
            case ($mtk < 55):
                echo 'Kurang';
                break;
            case ($mtk < 69):
                echo 'Cukup';
                break;  
            case ($mtk < 84):
                echo 'Memuaskan';
                break;  
            case ($mtk <= 100):
                echo 'Sangat Memuaskan';
                break;
            default:
                    echo 'Tidak ada';
        }
        ?>