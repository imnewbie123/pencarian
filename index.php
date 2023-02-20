<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="my.css">

    <title>Pencarian Data RPL B</title>
</head>

<body bgcolor="">
    <h2 align="center">Data RPL B</h2>


    <form method="GET" action="index.php" style="text-align: center;">
         <label>Pencarian :</label>
         <input type="text" name="cari" value="<?php if(isset($_GET['cari'])){ echo $_GET['cari'];} ?>">
         <button type="submit">cari</button>
         <button <a href="http://localhost/pencarian/index.php?cari=abiyu> type="submit">back</button></a>
    </form>


    <div class="container">
        <table border="1" align="center" width=66% bgcolor="antiquewhite">
    </div>
    <tr bgcolor="green">

        <th>NIS</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>No Handphone</th>
    </tr>

    <tr>
        <?php
        include "koneksi.php";
        if (isset($_GET['cari'])){
            $pencarian = $_GET['cari'];
            $query = "select * from dbpencarian where NIS like'%".$pencarian."%' or Nama like'%".$pencarian."%' or Tempat_Lahir like'%".
            $pencarian."%' or Tanggal_lahir like'%".$pencarian."%' or No_Handphone like'%".$pencarian."%' order by NIS asc";
        } else{
            $query = "select * from dbpencarian order by NIS asc";
        }

        $tampil = mysqli_query($conn,$query);
        while ($data = mysqli_fetch_array($tampil)) {
        ?>
            <td><?php echo $data['NIS']; ?></td>
            <td><?php echo $data['Nama']; ?></td>
            <td><?php echo $data['Tempat_Lahir']; ?></td>
            <td><?php echo $data['Tanggal_lahir']; ?></td>
            <td><?php echo $data['No_Handphone']; ?></td>
    </tr>
    
<?php
        }
?>
</div>
</table>
</body>

</html> 