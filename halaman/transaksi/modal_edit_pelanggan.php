<div id="edit_pelanggan" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times</button>
                <h4 class="modal-title"><b>Tambah Pelanggan</b></h4>
            </div>
            <form action="" method="post" id="form_edit">
                <div class="modal-body" id="modal-edit-pelanggan">
                    <div class="form-group">
                        <label class="control-label" for="no_identitas">No Identitas</label>
                        <input type="text" name="no_identitas" class="form-control" id="no_identitas_pelanggan" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama_pelanggan" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat_pelanggan" required>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="no_hp">No. HP</label>
                        <input type="text" name="no_hp" class="form-control" id="no_hp_pelanggan" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-success" name="edit" value="Simpan">
                </div>

            </form>
            <script src="../../tampilan/bower_components/jquery/dist/jquery.min.js">
            </script>
            <script type="text/javascript">
                $(document).on("click", "#edit_mod", function() {
                    var no_identitas_pelanggan = $(this).data('identitas');
                    var nama_pelanggan = $(this).data('nama');
                    var alamat_pelanggan = $(this).data('alamat');
                    var no_hp_pelanggan = $(this).data('nohp');
                    $("#modal-edit-pelanggan #no_identitas_pelanggan").val(no_identitas_pelanggan);
                    $("#modal-edit-pelanggan #nama_pelanggan").val(nama_pelanggan);
                    $("#modal-edit-pelanggan #alamat_pelanggan").val(alamat_pelanggan);
                    $("#modal-edit-pelanggan #no_hp_pelanggan").val(no_hp_pelanggan);

                })

                $(document).ready(function(e){
                    $("#form_edit").on("submit", (function(e){
                        e.preventDefault();
                        $.ajax({
                            url : '../../model/pelanggan_edit.php',
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
        </div>
    </div>
</div>
