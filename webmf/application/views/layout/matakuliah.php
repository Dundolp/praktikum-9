

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
 Daftar Matakuliah
 </h3>
 <table class="table">
 <thead>
 <tr>
 <th>#</th><th>Kode</th><th>Nama Matakuliah</th><th>Jumlah SKS</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor=1;
 foreach($list_mtk as $mtk){
 ?>
 <tr>
 <td><?=$nomor?></td>
 <td><?=$mtk->kode?></td>
 <td><?=$mtk->nama?></td>
 <td><?=$mtk->sks?></td>

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

  
