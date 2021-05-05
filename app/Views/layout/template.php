<?php

$resi = "";
$resi = isset($_GET['resi']) ? $_GET['resi'] : '';
$kurir = "";
$kurir = isset($_GET['kurir']) ? $_GET['kurir'] : '';

?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jagoan Resi | Cek Resi All-in-One</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?= base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= base_url('assets') ?>/dist/css/timeline.css">

</head>

<body class="hold-transition layout-top-nav">

<div class="wrapper">
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a class="navbar-brand" href="#"><strong>JAGOAN RESI</strong></a>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
      </div>
    </div>
  </nav>


<?= $this->renderSection('content') ?>


  <footer class="main-footer">
    <center>
      <strong>jagoanresi.com &copy; <?= date('Y');?></strong>
    </center>
  </footer>
</div>


<script src="<?= base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets') ?>/dist/js/adminlte.min.js"></script>
<script src="<?= base_url('assets') ?>/dist/js/demo.js"></script>


<script type="text/javascript">
function setClipboard(value) {
    var tempInput = document.createElement("input");
    tempInput.style = "position: absolute; left: -1000px; top: -1000px";
    tempInput.value = value;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    alert("LINK Berhasil di Copy");
}
</script>


<script type="text/javascript">
    $('#form').on('submit', function(e){
      $("i#load1").show();
        e.preventDefault();
        var data = $(this).serialize();
        $.ajax({
            url: "<?= base_url('Page/cek') ?>",
            type: 'POST',
            data: data,
             success: function(msg){
              $("#tampung-hasil").html(msg); 
              $("i#load1").hide();
            },
              error: function(msg){
                 document.write("Tidak terdeteksi, mohon periksa nomor resi dan kurir!");
              }
        });
    });
</script>
</body>
</html>
