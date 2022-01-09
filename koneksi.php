<?php 
//membuatKoneksiKeDataBase
$koneksi = mysqli_connect("192.168.1.",//namaServer
                          "root",//usernameServer
                          "root",//password
                          "db_santri");//namaDataBase
  //melakukanPengecekan
if ($koneksi/*yangDiCek*/) {
  echo "terhubung";
}else "tidak"
?>