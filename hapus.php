<?php

include "config.php";
include "class_member.php";
$db = new Config();
$db->koneksi();
$dt = new Member();
if (isset($_GET['aksi']) == "hapus") {
    $dt->hapusdata($_GET['id']);
}
?>