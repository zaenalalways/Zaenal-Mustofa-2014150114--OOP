<?php

class member {
    var $name;
    var $address;
    var $phone;

    function tampildata() {
        $query = "select * from member";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }

    function tambahdata($name, $address, $phone) {
        $query = "INSERT INTO member(name, address, phone) VALUES ('$name','$address','$phone')";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:index.php');
        } else {
            die("Data gagal Disimpan");
        }
    }

    function editdata($id) {
        $query = "select * from member where id_member='$id'";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }

    function prosesedit($id, $name, $address, $phone) {
        $query = "UPDATE member SET name='$name', address='$address',phone='$phone' WHERE id_member='$id'";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:index.php');
        } else {
            die("Data gagal Disimpan");
        }
    }

    function hapusdata($id) {
        $query = "DELETE FROM member WHERE id_member='$id'";
        $result = @mysql_query($query) or die(mysql_error());
        if ($result) {
            header('location:index.php');
        } else {
            die("data gagal dihapus");
        }
    }

    function Searchdata($Search) {
        $query = "select * from member where name like '%$Search%' or address like '%$Search%' or phone like '%$Search%'";
        $result = @mysql_query($query) or die(mysql_error());
        return $result;
    }

}

?>
