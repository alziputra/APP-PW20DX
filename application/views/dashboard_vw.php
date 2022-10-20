<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/head.php'); ?>
</head>

<body>
    <?php $this->load->view('partials/navbar.php'); ?>
    <h1>Dashboard</h1>
    <h3>Halo,
        <?php echo $nama; ?>
    </h3>
    <h3>Kelas,
        <?php echo $kelas; ?>
    </h3>
    <h3>Jurusan,
        <?php echo $jurusan; ?>
    </h3>
    <h3>Telepon,
        <?php echo $telepon; ?>
    </h3>
    <h3>Kelamin,
        <?php echo $kelamin; ?>
    </h3>


    <?php $this->load->view('partials/footer.php'); ?>
</body>

</html>