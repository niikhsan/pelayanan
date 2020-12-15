<?php 
include "../../model/m_tampilan.php";

$tampilan = new Tampilan($connection);
 ?>
<!-- /.pembatas  -->
<div class="container">
<!-- /.mulai Section atas  -->
<section class="content-header">
        <h1>
          <b>Biaya</b>
        </h1>
</section>
<!-- /.akhir section atas  -->

<!-- /.awal content  -->
<section class="content">
        <div class="row">
          <div class="col-lg-12">
              <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
<!-- /.awal penampilan data  -->              	
              <?php 
                  $tampil= $tampilan->tampil();
                  while($data = $tampil->fetch_object()){
                   ?>
                <?php } ?>
                <tr>
                  <td><b>Tambah Daftar Biaya</b></td>
                  <td></td>
                  <td></td>
                  <td><a class="btn btn-info btn-xs" href="index.php?halaman=daftar">Tambah Biaya</a></td>
                </tr>
                
<!-- /.awal penampilan data  --> 
              </table>
          
            </div>
			      <?php 
                  include '.modal_edit_tampilan.php';
            ?>
     

<!-- /.form modal tambah admin  -->         
<!-- /.form modal tambah admin  --> 

<!-- /.form modal edit  -->
 

<!-- /.form modal edit  --> 

          </div>
        </div>

<!-- /.akhir table  -->

</section>
<!-- /. akhir untuk section  -->
</div>