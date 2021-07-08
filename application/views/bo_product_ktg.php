<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Menu</a></li>
                    <li class="breadcrumb-item active">Produk</li>
                </ol>
            </div>
            <h4 class="page-title">Kategori Produk</h4>
        </div>
    </div>
</div>
<!-- end page title end breadcrumb -->
<style type="text/css">
    a {
        font-weight: bold;
        color: #000000;
        text-decoration: none;
        background-color: transparent;
    }
</style>

<div class="row">
    <div class="col-12">
         <div class="card-box table-responsive">
            <button class="btn btn-primary pull-right"  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>
            <h4 class="header-title">Kategori Produk</h4><br>
            <p class="text-muted">
            </p> 
             <table id="responsive-datatable" class="table table-striped mb-0" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                <tr>
                    <th width="150px">Aksi</th>
                    <th>Nama</th>
                    <th>Jumlah Produk</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                        </td>
                        <td>Makanan</td>
                        <td>41</td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                        </td>
                        <td>Minuman</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>
                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                        </td>
                        <td>Cemilan</td>
                        <td>10</td>
                    </tr>
                </tbody>
            </table> 
        </div>
    </div>
</div>
<!-- end row -->
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Tambah Kategori Produk</h4>
            </div>
            <div class="modal-body"> 
                 <form class="form-horizontal" action="#">
                    <div class="form-group m-b-25">
                        <div class="col-12 mt-2">
                            <label for="username">Nama</label>
                            <input class="form-control" type="text" name="nama" required="" placeholder="Contoh : Makanan, Minuman, Cemilan dll">
                        </div>
                        <div class="col-12 mt-2">
                            <label for="username">Status</label>
                            <p class="text-muted">
                                Tampilkan di E-Menu atau tidak
                            </p>
                            <div class="mt-0">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio1">Aktif</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio2">Non Aktif</label>
                                </div>
                            </div>
                        </div>
                    </div> 
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary waves-effect waves-light">Save changes</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- end row -->
<script type="text/javascript">
   $(document).ready(function() { 
    $('#responsive-datatable').DataTable(); 
} );
</script>