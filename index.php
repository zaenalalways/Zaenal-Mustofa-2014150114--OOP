<?php
include "config.php";
include "class_member.php";
$db = new Config();
$db->koneksi();
$dt = new Member();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Belajar Membuat Aplikasi</title>
        <link rel="stylesheet" type="text/css" href="Css/style.css">
        <link rel='stylesheet' href='style.css' type='text/css' media='all' />
    </head>
    <body>
        <div id="container">
            <div id="header">
            </div>
            <div id="menu"><a href="index.php">Main Course</a>
            </div>
            <div id="konten">
            <fieldset><legend>List Member</legend>
                <form method="post" action="">
                    <input type="text" name="Search" size="50">
                    <input type="submit" name="Searchdata" value="Search Data" >
                </form>
                <br>
                

                <?php
                if (isset($_POST['Searchdata'])) {
                    $Search = $_POST['Search'];
                    $carinya=$dt->Searchdata($Search);
                    ?>
                <h3>Search result</h3>
                The amount of data found as many as : <?php echo mysql_num_rows($carinya); ?>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>phone</th>

                            </tr>
                        </thead>
                         <tbody>
                        <?php
                        $i=1;
                        while ($hasil = mysql_fetch_array($carinya)) {
                            ?>

                           
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $hasil['name']; ?></td>
                                    <td><?php echo $hasil['address']; ?></td>
                                    <td><?php echo $hasil['phone']; ?></td>

                                </tr> 
                            
                            <?php
                            $i++;
                        }
                        echo "</tbody></table>";
                    }
                    
                    echo"<br>";
                    
                    if (isset($_GET['aksi'])) {
                        if ($_GET['aksi'] == "edit") {
                            $id = $_GET['id'];
                            $edit = mysql_fetch_array($dt->editdata($id));
                            ?>
                            <h3>EDIT DATA</h3>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <table border="0" cellspacing="0" cellpadding="5" width="100%">

                                    <tr>
                                        <td width="15%">Name</td>
                                        <td width="2%">:</td>
                                        <td><input type="text" name="name" value="<?php echo $edit['name']; ?>" size="50" ></td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>:</td>
                                        <td><input type="text" name="address" value="<?php echo $edit['address']; ?>" size="50" ></td>
                                    </tr>
                                    <tr>
                                        <td>Phone</td>
                                        <td>:</td>
                                        <td><input type="text" name="phone" value="<?php echo $edit['phone']; ?>" ></td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                        <td><input type="submit" name="edit" value="Edit Data" ></td>
                                    </tr>

                                </table>

                            </form>
                            <hr>
                            <?php
                        } elseif ($_GET['aksi'] == "hapus") {
                            $dt->hapusdata($_GET['id']);
                        } elseif (isset($_POST['edit'])) {
                            $id = $_POST['id'];
                            $nama = $_POST['name'];
                            $address = $_POST['address'];
                            $phone = $_POST['phone'];
                            $dt->prosesedit($id, $name, $address, $phone);
                        }
                    }
                    ?>
                    <table align="center" border="1" width="100%" cellspacing="0" cellpadding="5">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>phone</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $member = $dt->tampildata();
                            $i = 1;
                            if (mysql_num_rows($member) > 0) {
                                while ($a = mysql_fetch_array($member)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $a['name']; ?></td>
                                        <td><?php echo $a['address']; ?></td>
                                        <td><?php echo $a['phone']; ?></td>
                                        <td align="center"><a href="<?php $_SERVER['PHP_SELF']; ?>?aksi=edit&id=<?php echo $a['id_member']; ?>">EDIT</a> | <a href="<?php $_SERVER['PHP_SELF']; ?>?aksi=hapus&id=<?php echo $a['id_member']; ?>">HAPUS</a></td>
                                    </tr> 
                                    <?php
                                    $i++;
                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="4" align="center">Data Empty</td>

                                </tr>   
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                    </fieldset>
                    <fieldset><legend>Add information</legend>
                    <br>
                    <?php
                    if (isset($_POST['simpan'])) {
                        $name = $_POST['name'];
                        $address = $_POST['address'];
                        $phone = $_POST['phone'];
                        $dt->tambahdata($name, $address, $phone);
                    }
                    ?>
                    <form action="" method="POST">
                        <table border="0" cellspacing="0" cellpadding="5" width="100%">

                            <tr>
                                <td width="15%">Name</td>
                                <td width="2%">:</td>
                                <td><input type="text" name="name" size="50"></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>:</td>
                                <td><input type="text" name="address" size="50" ></td>
                            </tr>
                            <tr>
                                <td>Number Phone</td>
                                <td>:</td>
                                <td><input type="text" name="phone" ></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input type="submit" name="simpan" value="Save Data" ></td>
                            </tr>

                        </table>

                    </form>
                    </fieldset>

                    </div>
                    <div id="footer">
                        <div class="isinya">
                            Copyright &copy; 2017<a href="http://engeneringandroid.blogspot.co.id" target="_blank">Zaenal Mustofa</a>
                        </div>
                    </div>
            </div>
    </body>
</html>
