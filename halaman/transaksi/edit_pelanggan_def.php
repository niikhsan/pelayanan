<?php
$kon = include"../../koneksi/+koneksi.php";

	if(isset($_REQUEST['tools']) == 'edit'){
		$no_identitas = $_GET['no_identitas'];
		//$nama = $_GET['nama'];
		//$alamat = $_GETT['alamat'];
		//$no_hp =$_GET['no_hp'];
		//$sql = mysqli_query($kon,"UPDATE pelanggan SET  WHERE no_identitas='$no_identitas'");
		while($data = mysqli_fetch_array($sql)){

        }
	} else {
		$no_identitas = $_REQUEST['no_identitas'];
		$sql = mysqli_query($kon,"SELECT * FROM pelanggan WHERE no_identitas='$no_identitas'");
		while($data = mysqli_fetch_array($sql)){

?>

<style type="text/javascript">

</style>

					  <h4><b>Edit Pelanggan</b></h4>
                  <form action="" method="post">
                      <div class="form-group">
                        <label class="control-label" for="no_identitas">No Identitas</label>
                        <input type="text" name="no_identitas" class="form-control" id="no_identitas" required value="<?php echo $data['no_identitas'];?>">
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" required>
                      </div>
                      <div class="form-group">
                        <label class="control-label" for="no_hp">No_HP</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp" required>
                      </div>
                      
                      <button type="reset" class="btn btn-danger">Reset</button>
                      <button type="submit" name="edit" class="btn btn-danger">Update</button>
                  </form>
	<?php } } ?>
					
                    <script type="text/javascript">
                      $(document).on("click", "#update_pelanggan", function() {
                          var id = $(this).data('id_pelanggan');
                          var nama = $(this).data('nama');
						  var alamat = $(this).data('alamat');
                          var no.hp = $(this).data('no_hp');
                          $("#modal-update #id").val(id_pelanggan);
                          $("#modal-update #nam
						  a").val(nama)
						  $("#modal-update #alamat").val(alamat)
                          $("#modal-update #no_hp").val(no.hp)
                      })

                      $(document).ready(function(e){
                        $("#form_update").on("submit", (function(e){
                            e.preventDefault();
                            $.ajax({
                              url : '../../model/transaksi_edit_pelanggan.php',
                              type : 'POST',
                              data : new FormData(this),
                              contentType : false,
                              cache : false,
                              processData : false,
                              success : function(msg) {
                                $('.table').html(msg);
                              }
                            });

                        }));
                      })
                    </script>
<!--<a href="href="?halaman=data_pelanggan&tools=edit&no_identitas=--><?//=$data->no_identitas;?><!--""></a>-->
