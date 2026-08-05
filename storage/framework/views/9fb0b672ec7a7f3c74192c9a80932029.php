<?php $__env->startSection('title', 'Detail Penjualan'); ?>

<?php $__env->startSection('content'); ?>

<style>
body{
    background:#fff0f6;
}

.detail-card{
    background:white;
    padding:30px;
    border-radius:20px;
    box-shadow:0 8px 25px rgba(214,51,132,.15);
}

.detail-title{
    color:#d63384;
    font-weight:bold;
}

.info-box{
    background:#fff0f6;
    border:2px solid #ffc1dc;
    padding:20px 25px;
    border-radius:15px;
}

.info-label{
    color:#8b1e52;
    font-weight:600;
    width:170px;
    display:inline-block;
}

.info-value{
    color:#333;
}

.status-badge{
    padding:5px 14px;
    border-radius:20px;
    font-size:13px;
    font-weight:bold;
    background:#ffc1dc;
    color:#8b1e52;
}

.section-title{
    color:#d63384;
    font-weight:bold;
    border-left:5px solid #ff69b4;
    padding-left:12px;
    margin-bottom:20px;
}

.table{
    border-radius:15px;
    overflow:hidden;
}

.table thead th{
    background:#d63384;
    color:white;
    text-align:center;
    border:none;
}

.table tbody tr:hover{
    background:#fff0f6;
}

.table tfoot th{
    background:#fff0f6;
    color:#d63384;
    font-size:16px;
    border-top:2px solid #ffc1dc;
}

.btn-back{
    background:#ff69b4;
    border:none;
    color:white;
    border-radius:10px;
    padding:10px 25px;
    font-weight:600;
}

.btn-back:hover{
    background:#d63384;
    color:white;
}
</style>

<div class="container mt-5">

    <div class="detail-card">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="detail-title mb-0">
                Detail Penjualan
            </h2>
        </div>

        <div class="row mb-4">

            <div class="col-md-6 mb-3 mb-md-0">
                <div class="info-box h-100">

                    <div class="mb-2">
                        <span class="info-label">Nomor Transaksi</span>
                        <span class="info-value">: <?php echo e($penjualan->id); ?></span>
                    </div>

                    <div class="mb-2">
                        <span class="info-label">Kasir</span>
                        <span class="info-value">: <?php echo e($penjualan->user->name ?? '-'); ?></span>
                    </div>

                    <div>
                        <span class="info-label">Tanggal</span>
                        <span class="info-value">: <?php echo e(optional($penjualan->created_at)->format('d-m-Y H:i')); ?></span>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="info-box h-100">

                    <div class="mb-2">
                        <span class="info-label">Status</span>
                        <span class="status-badge">
                            <?php echo e($penjualan->status ?? '-'); ?>

                        </span>
                    </div>

                    <div>
                        <span class="info-label">Metode Pembayaran</span>
                        <span class="info-value">: <?php echo e($penjualan->metode_pembayaran ?? '-'); ?></span>
                    </div>

                </div>
            </div>

        </div>

        <h5 class="section-title">
            Daftar Produk
        </h5>

        <?php
            $total = 0;
        ?>

        <div class="table-responsive">

            <table class="table table-bordered align-middle">

                <thead>
                    <tr>
                        <th width="60">No</th>
                        <th>Produk</th>
                        <th width="150">Harga</th>
                        <th width="100">Qty</th>
                        <th width="180">Subtotal</th>
                    </tr>
                </thead>

                <tbody>

                <?php $__empty_1 = true; $__currentLoopData = $penjualan->itemPenjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <?php
                        $total += $item->subtotal;
                    ?>

                    <tr>

                        <td class="text-center">
                            <?php echo e($loop->iteration); ?>

                        </td>

                        <td>
                            <?php echo e($item->produk->nama ?? '-'); ?>

                        </td>

                        <td>
                            Rp <?php echo e(number_format($item->harga_satuan,0,',','.')); ?>

                        </td>

                        <td class="text-center">
                            <?php echo e($item->qty); ?>

                        </td>

                        <td>
                            Rp <?php echo e(number_format($item->subtotal,0,',','.')); ?>

                        </td>

                    </tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>
                        <td colspan="5" class="text-center text-muted">
                            Tidak ada produk.
                        </td>
                    </tr>

                <?php endif; ?>

                </tbody>

                <tfoot>
                    <tr>
                        <th colspan="4" class="text-end">
                            Total
                        </th>
                        <th>
                            Rp <?php echo e(number_format($total,0,',','.')); ?>

                        </th>
                    </tr>
                </tfoot>

            </table>

        </div>

        <div class="mt-4">

            <a href="<?php echo e(route('penjualan.index')); ?>" class="btn btn-back">
                ← Kembali
            </a>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PoinOfSale5-main\resources\views/penjualan/show.blade.php ENDPATH**/ ?>