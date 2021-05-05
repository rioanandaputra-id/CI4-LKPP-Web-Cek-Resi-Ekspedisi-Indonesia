<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<?php

$resi = "";
$resi = isset($_GET['resi']) ? $_GET['resi'] : '';
$kurir = "";
$kurir = isset($_GET['kurir']) ? $_GET['kurir'] : '';

?>

  <div class="content-wrapper">

    <!--  -->
    <div class="content-header">
      <div class="container">
      </div>
    </div>

    <!--  -->
    <div class="content">
      <div class="container">
        <div class="row">
          <!--  -->
          <div class="col-md-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0 text-secondary"><strong>LACAK PAKET</strong></h5>
              </div>
              <div class="card-body">
                <form id="form">
                  <div class="row">
                    <div class="col">
                      <input value="<?= $resi; ?>" type="text" class="form-control" placeholder="Masukan Nomor Resi" name="resi" required="">
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col">
                      <?php $term = !empty( $_GET['kurir'] ) ? $_GET['kurir'] : ''; ?>

                      <select class="form-control" name="kurir">
                              <option value="">Pilih Kurir</option>
                              <option value="pos" <?php echo $term == 'pos' ? 'selected' : ''; ?>>POS</option>
                              <option value="jnt" <?php echo $term == 'jnt' ? 'selected' : ''; ?>>JNT</option>
                              <option value="jne" <?php echo $term == 'jne' ? 'selected' : ''; ?>>JNE</option>
                              <option value="tiki" <?php echo $term == 'tiki' ? 'selected' : ''; ?>>TIKI</option>
                              <option value="sicepat" <?php echo $term == 'sicepat' ? 'selected' : ''; ?>>Sicepat</option>
                              <option value="anteraja" <?php echo $term == 'anteraja' ? 'selected' : ''; ?>>Anteraja</option>
                              <option value="ninja" <?php echo $term == 'ninja' ? 'selected' : ''; ?>>ninja</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mt-4">
                    <div class="col">
                      <button type="submit" class="btn btn-primary" id="submit-form"><i class="mr-2 fa fa-search"></i><strong>LACAK</strong></button> 
                    </div>
                    <div class="float-right">
                          <span class="loading"></span>

                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <!--  -->
          <div class="col-md-6">
            
          </div>
        </div>
      </div>
    </div>

    <!--  -->
    <div class="content mt-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="card card-primary card-outline" >
              <div class="card-body">

                  <i class="fas fa-spinner fa-pulse" id="load1" style="display:none;"></i>
                <!--<img src="dist/img/loading.gif" width="50" id="load1" style="display:none;" />-->
                <div id="tampung-hasil"></div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>



<?= $this->endSection() ?>