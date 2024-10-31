<?php
include "../dbconfig.php";



print_r($data);
include "../template/mainheader.php";
?>

    <h1>Data Mahasiswa</h1>
    <p><a href="addstudent.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Add New Student</a></p>
    <table border="1">
        <thead>
            <th>No.</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Nama Depan</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            $sqlStatement = "SELECT * FROM students";
            $query = mysqli_query($conn, $sqlStatement);
            $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

            foreach ($data as $key => $dtstudents){
            ?>    
            <tr>
                <td><?php echo ++$key?></td>
                <td><?php echo $dtstudents["nim"]?></td>
                <td><?php echo $dtstudents["kode_prodi"]?></td>
                <td><?php echo $dtstudents["nama_depan"]?></td>
                <td><?php echo $dtstudents["jenis_kelamin"]?></td>
                <td></td>
            </tr>
        </tbody>
        <?php 
        } 
        ?>
    </table>
<?php
include "../template/mainfooter.php";
?>