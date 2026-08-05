<?php $__env->startSection('title','Dashboard'); ?>

<?php $__env->startSection('content'); ?>

<div class="container mt-4">

    <div class="card border-0 shadow-lg rounded-4" style="background:#fff0f6;">

        <div class="card-body p-5">

            <div class="text-center mb-5">

                <h1 class="fw-bold" style="color:#d63384;">
                    Ringkasan Hari Ini
                </h1>

                <h4 class="text-secondary">
                    (<?php echo e(\Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y')); ?>)
                </h4>

                <h2 class="mt-3 fw-bold" style="color:#ff4fa3;">
                    Today's Sales
                </h2>

            </div>

            <!-- Ringkasan -->
            <div class="row g-4">

                <div class="col-md-6">

                    <div class="card border-0 shadow rounded-4 h-100">

                        <div class="card-header text-white text-center fw-bold"
                            style="background:#ff69b4;">
                            💰 Total Nilai Penjualan Hari Ini
                        </div>

                        <div class="card-body text-center py-5"
                            style="background:#fff7fb;">

                            <h1 class="fw-bold" style="color:#e91e63;">
                                Rp <?php echo e(number_format($ringkasan['total_penjualan'] ?? 0, 0, ',', '.')); ?>

                            </h1>

                        </div>

                    </div>

                </div>

                <div class="col-md-6">

                    <div class="card border-0 shadow rounded-4 h-100">

                        <div class="card-header text-white text-center fw-bold"
                            style="background:#ff69b4;">
                            🧾 Jumlah Transaksi Hari Ini
                        </div>

                        <div class="card-body text-center py-5"
                            style="background:#fff7fb;">

                            <h1 class="fw-bold" style="color:#e91e63;">
                                <?php echo e($ringkasan['total_transaksi'] ?? 0); ?>

                            </h1>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Cash & Payment Status -->
            <div class="mt-5">

                <div class="card border-0 shadow rounded-4">

                    <div class="card-header text-white text-center fw-bold"
                        style="background:#ff69b4;">
                        💳 Cash & Payment Status
                    </div>

                    <div class="card-body" style="background:#fff7fb;">

                        <div class="row">

                            <div class="col-md-6">

                                <table class="table table-bordered text-center">

                                    <thead class="table-danger">

                                        <tr>
                                            <th>Total Pembayaran Tunai</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="fw-bold text-success">
                                                Rp <?php echo e(number_format($ringkasan['total_cash'] ?? 0, 0, ',', '.')); ?>

                                            </td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                            <div class="col-md-6">

                                <table class="table table-bordered text-center">

                                    <thead class="table-danger">

                                        <tr>
                                            <th>Total Pembayaran Non Tunai</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>
                                            <td class="fw-bold text-primary">
                                                Rp <?php echo e(number_format($ringkasan['total_non_tunai'] ?? 0, 0, ',', '.')); ?>

                                            </td>
                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Critical Inventory -->
            <div class="mt-5">

                <div class="card border-0 shadow rounded-4">

                    <div class="card-header text-white text-center fw-bold"
                        style="background:#ff69b4;">
                        ⚠️ Critical Inventory Status
                    </div>

                    <div class="card-body" style="background:#fff7fb;">

                        <div class="row">

                            <div class="col-md-6">

                                <table class="table table-bordered">

                                    <thead class="table-warning">

                                        <tr>
                                            <th>Daftar Produk Rendah</th>
                                            <th>Stok</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php $__empty_1 = true; $__currentLoopData = $produkStokRendah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                        <tr>
                                            <td><?php echo e($produk->nama); ?></td>
                                            <td class="text-center"><?php echo e($produk->stok); ?></td>
                                        </tr>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                        <tr>
                                            <td colspan="2" class="text-center">
                                                Belum ada data
                                            </td>
                                        </tr>

                                        <?php endif; ?>

                                    </tbody>

                                </table>

                                <?php if(isset($produkStokRendah) && method_exists($produkStokRendah, 'links')): ?>
                                <?php echo e($produkStokRendah->links()); ?>

                                <?php endif; ?>

                            </div>

                            <div class="col-md-6">

                                <table class="table table-bordered">

                                    <thead class="table-danger">

                                        <tr>
                                            <th>Produk Habis</th>
                                            <th>Stok</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        <?php $__empty_1 = true; $__currentLoopData = $produkStokHabis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                        <tr>
                                            <td><?php echo e($produk->nama); ?></td>
                                            <td class="text-center"><?php echo e($produk->stok); ?></td>
                                        </tr>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                        <tr>
                                            <td colspan="2" class="text-center">
                                                Belum ada data
                                            </td>
                                        </tr>

                                        <?php endif; ?>

                                    </tbody>

                                </table>

                                <?php if(isset($produkStokHabis) && method_exists($produkStokHabis, 'links')): ?>
                                <?php echo e($produkStokHabis->links()); ?>

                                <?php endif; ?>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Best Seller Produk -->
            <div class="mt-5">

                <div class="card border-0 shadow rounded-4">

                    <div class="card-header text-white text-center fw-bold"
                        style="background:#ff69b4;">
                        🏆 Best Seller Produk
                    </div>

                    <div class="card-body" style="background:#fff7fb;">

                        <table class="table table-bordered table-hover">

                            <thead class="table-success">

                                <tr>

                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Jumlah Terjual</th>

                                </tr>

                            </thead>

                            <tbody>

                                <?php $__empty_1 = true; $__currentLoopData = $produkTerlaris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                                <tr>

                                    <td><?php echo e($index + 1); ?></td>
                                    <td><?php echo e($produk->nama); ?></td>
                                    <td><?php echo e($produk->total_terjual); ?></td>

                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                                <tr>

                                    <td colspan="3" class="text-center">
                                        Belum ada data penjualan
                                    </td>

                                </tr>

                                <?php endif; ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PoinOfSale5-main\resources\views/dashboard.blade.php ENDPATH**/ ?>