<?php
    require('../Config/Database.php');

    Class MKelas{


        function Simpan($name){
            global $koneksi;
            $sql="insert into kelas values('".$name."')";
            $cek = mysqli_query($koneksi,$sql);
            
            if($cek == 1) {
                return "Berhasil";
            } else {
                return "Gagal";
            }

        }

        function Update($name, $newName) {
            global $koneksi;
            
            $sql = "UPDATE kelas SET nama = '$newName' WHERE nama = '$name'";
            $cek = mysqli_query($koneksi,$sql);
            
            if($cek == 1) {
                return "Berhasil";
            } else {
                return "Gagal";
            }
            
        }
        

        function Delete($name) {
            global $koneksi;
            
            $sql = "DELETE FROM kelas WHERE nama = '$name'";
            $cek = mysqli_query($koneksi, $sql);
        
            if ($cek == 1) {
                return "Berhasil";
            } else {
                return "Gagal";
            }
        }
        
        
    }
?>