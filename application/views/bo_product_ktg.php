<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="btn-group float-right">
                <ol class="breadcrumb hide-phone p-0 m-0">
                    <li class="breadcrumb-item"><a href="#">Menu</a></li>
                    <li class="breadcrumb-item active">Product</li>
                </ol>
            </div>
            <h4 class="page-title">Kategori Product</h4>
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
            <button class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Tambah</button>
            <h4 class="header-title">Kategori Product</h4><br>
            <p class="text-muted">
            </p> 
             <table id="responsive-datatable" class="table table-striped mb-0" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                <tr>
                    <th width="150px">Aksi</th>
                    <th>Nama</th>
                    <th>Jumlah Product</th>
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

<!-- end row -->
<script type="text/javascript">
   $(document).ready(function() { 
    $('#responsive-datatable').DataTable(); 
} );
</script>