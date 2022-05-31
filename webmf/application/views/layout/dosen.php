


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="col-md-12">
 <h3>
 Daftar Dosen
 </h3>
 <table class="table">
 <thead>
 <tr>
 <th>#</th><th>NIDN</th><th>Nama</th><th>Gender</th>
<th>Pendidikan</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor=1;
 foreach($list_dsn as $dsn){
 ?>
 <tr>
 <td><?=$nomor?></td>
 <td><?=$dsn->nidn?></td>
 <td><?=$dsn->nama?></td>
 <td><?=$dsn->gender?></td>
<td><?=$dsn->pendidikan?></td>

 </tr>
 <?php
 $nomor++;
 }
 ?>
 </tbody>
 </table>
</div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
