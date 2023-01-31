<?php $__env->startSection('isi'); ?>
  <!-- <div class="main-content">
      <div class="container-fluid">
      </div>
    </div> -->
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <h3 class="mb-0">Daftar Inovasi</h3>
            </div>
            <div class="card-body">
            <div class="text-left">
                <a href="<?php echo e(route('admin.create')); ?>" class="btn btn-sm btn-danger">Tambah Data Inovasi</a>
            </div>
            <br>
            <div class="table-responsive">
              <?php if(session('msg')): ?>
                     <p>
                         <?php echo e(session('msg')); ?>

                     </p>
                 <?php endif; ?>
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Organisasi</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Sosial Media</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">File</th>
                    <th scope="col">Abstrak</th>
                    <th scope="col">Latar Belakang</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $dataInovasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($d->username); ?></td>
                    <td><?php echo e($d->email); ?></td>
                    <td><?php echo e($d->password); ?></td>
                    <td><?php echo e($d->organisasi); ?></td>
                    <td><?php echo e($d->name); ?></td>
                    <td><?php echo e($d->phone); ?></td>
                    <td><?php echo e($d->sosmed); ?></td>
                    <td><?php echo e($d->kategori); ?></td>
                    <td><?php echo e($d->file); ?></td>
                    <td><?php echo e($d->abstrak); ?></td>
                    <td><?php echo e($d->latarbelakang); ?></td>
                    <td><?php echo e($d->tujuan); ?></td>
  
                    <td class="text-right">
                      <div class="dropdown">
                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="fas fa-ellipsis-v"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                          <a class="dropdown-item" href="<?php echo e(route('admin.edit', $d->id)); ?>">Edit &nbsp<i class="fa fa-pen"></i></a>
                          <!-- <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                          <a class="dropdown-item" href="<?php echo e(route('admin.destroy', $d->id)); ?>" method="post"
                          onsubmit="return hapusData()">Hapus &nbsp<i class="fa fa-trash"></i></a> -->
                          <form method="POST" action="<?php echo e(route('admin.destroy', $d->id)); ?>" style="display: inline" 
                          onsubmit="return hapusData()">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                          <button type="submit">Hapus</button>
                        </form>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core   -->
  <script src="<?php echo e(asset('/')); ?>js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo e(asset('/')); ?>js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <script src="<?php echo e(asset('/')); ?>js/plugins/clipboard/dist/clipboard.min.js"></script>
  <!--   Argon JS   -->
  <script src="<?php echo e(asset('/')); ?>js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\KONTOLODON\Documents\laravel\krenova-main\resources\views/admin/data_inovasi.blade.php ENDPATH**/ ?>