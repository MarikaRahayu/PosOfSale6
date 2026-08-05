<?php $__env->startSection('title','Penjualan'); ?>


<?php $__env->startSection('content'); ?>

<style>
body {
    background: #fff5f9;
}

.page-title {
    color:#d63384;
    font-weight:800;
}

.panel-card {
    background:#fff;
    border:none;
    border-radius:18px;
    box-shadow:0 8px 25px rgba(214,51,132,0.15);
    overflow:hidden;
}

.panel-header {
    background:linear-gradient(135deg,#ec4899,#ff8fb8);
    color:#fff;
    padding:16px 20px;
    border:none;
}

.panel-header h5 {
    margin:0;
    font-weight:700;
    letter-spacing:.3px;
}

.search-box {
    border:2px solid #ffc1dc;
    border-radius:12px;
    padding:10px 14px;
}

.search-box:focus {
    border-color:#ff69b4;
    box-shadow:0 0 8px rgba(255,105,180,.35);
}

.produk-item {
    border:1px solid #ffe0ec !important;
    border-radius:14px !important;
    background:#fffafc;
    transition:box-shadow .15s ease, transform .15s ease;
}

.produk-item:hover {
    box-shadow:0 6px 16px rgba(214,51,132,.18);
    transform:translateY(-2px);
    border-color:#ffc1dc !important;
}

/* --- Baris produk: flexbox nowrap supaya tombol Tambah tidak turun ke bawah --- */
.produk-row {
    display:flex;
    flex-wrap:nowrap;
    align-items:center;
    gap:10px;
}

.produk-foto-wrap {
    flex:0 0 auto;
}

.produk-foto {
    width:56px;
    height:56px;
    object-fit:cover;
    border-radius:12px;
    border:1px solid #ffc1dc;
    display:block;
}

.produk-foto-placeholder {
    width:56px;
    height:56px;
    border-radius:12px;
    background:#ffe5f0;
    color:#d6317e;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:10px;
    text-align:center;
    border:1px solid #ffc1dc;
}

.produk-info {
    flex:1 1 auto;
    min-width:0;
}

.produk-nama {
    color:#3a1f2b;
    font-weight:700;
    white-space:nowrap;
    overflow:hidden;
    text-overflow:ellipsis;
}

.produk-harga {
    color:#d63384;
    font-weight:700;
    font-size:.85rem;
    white-space:nowrap;
}

.produk-stok {
    font-size:.72rem;
    font-weight:600;
    white-space:nowrap;
}

.produk-stok.stok-aman {
    color:#2e7d32;
}

.produk-stok.stok-rendah {
    color:#e6a100;
}

.produk-stok.stok-habis {
    color:#d32f2f;
}

.qty-wrap {
    flex:0 0 60px;
}

.qty-input {
    border:2px solid #ffc1dc;
    border-radius:10px;
    text-align:center;
    padding:6px 4px;
    width:100%;
}

.qty-input:focus {
    border-color:#ff69b4;
    box-shadow:0 0 6px rgba(255,105,180,.3);
}

.qty-input:disabled {
    background:#f3f3f3;
    color:#aaa;
}

.btn-tambah-wrap {
    flex:0 0 auto;
}

.btn-tambah {
    background:#ec4899;
    border:none;
    color:#fff;
    border-radius:10px;
    font-weight:600;
    white-space:nowrap;
    padding:8px 14px;
}

.btn-tambah:hover {
    background:#d6317e;
    color:#fff;
}

.btn-tambah:disabled {
    background:#f1a9c4;
    cursor:not-allowed;
}

.cart-table thead th {
    background:#fff0f6;
    color:#b8236a;
    text-transform:uppercase;
    font-size:.72rem;
    letter-spacing:.5px;
    border-bottom:2px solid #ffc1dc;
}

.cart-table tbody tr:hover {
    background:#fff5f9;
}

.cart-table td, .cart-table th {
    vertical-align:middle;
}

.btn-hapus-item {
    background:#ff6a9e;
    border:none;
    color:#fff;
    border-radius:8px;
}

.btn-hapus-item:hover {
    background:#d6317e;
    color:#fff;
}

.total-box {
    background:linear-gradient(135deg,#fff0f6,#ffe5f0);
    border:2px solid #ffc1dc;
    border-radius:14px;
    padding:16px 20px;
    color:#b8236a;
}

.form-select-pink {
    border:2px solid #ffc1dc;
    border-radius:12px;
}

.form-select-pink:focus {
    border-color:#ff69b4;
    box-shadow:0 0 8px rgba(255,105,180,.35);
}

.btn-checkout {
    background:linear-gradient(135deg,#ec4899,#d6317e);
    border:none;
    color:#fff;
    border-radius:12px;
    font-weight:700;
    padding:10px;
}

.btn-checkout:hover {
    filter:brightness(0.95);
    color:#fff;
}

.btn-batal {
    background:#fff;
    border:2px solid #ff8fb8;
    color:#d6317e;
    border-radius:12px;
    font-weight:600;
}

.btn-batal:hover {
    background:#ffe5f0;
    color:#b8236a;
}
</style>

<div class="container mt-4">


    <h3 class="page-title mb-4">
        🛒 Penjualan
    </h3>



    <?php if(session('success')): ?>

    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>

    <?php endif; ?>



    <?php if(session('error')): ?>

    <div class="alert alert-danger">
        <?php echo e(session('error')); ?>

    </div>

    <?php endif; ?>





<div class="row g-4">





<div class="col-md-6">


<div class="card panel-card h-100">


<div class="panel-header">

<h5>
🛍️ Daftar Produk
</h5>

</div>



<div class="card-body">



<form method="GET">

<input type="text"
name="search"
class="form-control search-box mb-3"
placeholder="🔍 Cari produk..."
value="<?php echo e(request('search')); ?>">


</form>





<?php $__empty_1 = true; $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>



<form action="<?php echo e(route('penjualan.store')); ?>"
method="POST"
class="produk-item p-2 mb-3">


<?php echo csrf_field(); ?>



<input type="hidden"
name="produk_id"
value="<?php echo e($produk->id); ?>">



<div class="produk-row">



<div class="produk-foto-wrap">

<?php if($produk->foto): ?>
<img src="<?php echo e(asset('storage/'.$produk->foto)); ?>"
     alt="<?php echo e($produk->nama); ?>"
     class="produk-foto">
<?php else: ?>
<div class="produk-foto-placeholder">
    No Foto
</div>
<?php endif; ?>

</div>



<div class="produk-info">


<div class="produk-nama">
<?php echo e($produk->nama); ?>

</div>


<div class="produk-harga">

Rp <?php echo e(number_format($produk->harga_jual,0,',','.')); ?>


</div>


<div class="produk-stok
    <?php if($produk->stok <= 0): ?> stok-habis
    <?php elseif($produk->stok <= 5): ?> stok-rendah
    <?php else: ?> stok-aman
    <?php endif; ?>">

<?php if($produk->stok <= 0): ?>
    Stok habis
<?php else: ?>
    Stok: <?php echo e($produk->stok); ?>

<?php endif; ?>

</div>


</div>




<div class="qty-wrap">


<input type="number"
name="qty"
value="<?php echo e($produk->stok > 0 ? 1 : 0); ?>"
min="1"
max="<?php echo e($produk->stok); ?>"
data-stok="<?php echo e($produk->stok); ?>"
class="qty-input"
<?php echo e($produk->stok <= 0 ? 'disabled' : ''); ?>

oninput="
    var stok = parseInt(this.dataset.stok);
    var val = parseInt(this.value);
    if (isNaN(val) || val < 1) { this.value = 1; }
    if (val > stok) { this.value = stok; }
"
onblur="
    var stok = parseInt(this.dataset.stok);
    var val = parseInt(this.value);
    if (isNaN(val) || val < 1) { this.value = 1; }
    if (val > stok) { this.value = stok; }
">


</div>




<div class="btn-tambah-wrap">


<button type="submit"
class="btn btn-tambah"
<?php echo e($produk->stok <= 0 ? 'disabled' : ''); ?>>

+ Tambah

</button>


</div>



</div>


</form>




<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>


<div class="alert alert-warning">

Produk tidak ditemukan

</div>


<?php endif; ?>




</div>


</div>


</div>









<div class="col-md-6">


<div class="card panel-card h-100">



<div class="panel-header">

<h5>
🧺 Keranjang Belanja
</h5>

</div>




<div class="card-body">



<?php

$total = 0;

?>





<table class="table table-bordered cart-table">


<thead>


<tr>

<th>
Produk
</th>


<th>
Qty
</th>


<th>
Subtotal
</th>


<th>
Aksi
</th>


</tr>


</thead>




<tbody>




<?php $__empty_1 = true; $__currentLoopData = $keranjang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>



<?php

$total += $item['subtotal'];

?>




<tr>


<td class="fw-semibold">

<?php echo e($item['nama']); ?>


</td>



<td class="text-center">

<?php echo e($item['qty']); ?>


</td>




<td class="text-danger fw-semibold">

Rp <?php echo e(number_format($item['subtotal'],0,',','.')); ?>


</td>




<td>


<form action="<?php echo e(route('penjualan.destroyItem',$item['produk_id'])); ?>"
method="POST">


<?php echo csrf_field(); ?>

<?php echo method_field('DELETE'); ?>



<button class="btn btn-hapus-item btn-sm">

Hapus

</button>


</form>


</td>



</tr>





<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>



<tr>


<td colspan="4"
class="text-center text-muted py-4">


Keranjang kosong


</td>


</tr>




<?php endif; ?>





</tbody>



</table>







<div class="total-box mb-3 d-flex justify-content-between align-items-center">


<span class="fw-bold">
Total
</span>


<h5 class="mb-0 fw-bold">

Rp <?php echo e(number_format($total,0,',','.')); ?>


</h5>


</div>













<form action="<?php echo e(route('penjualan.checkout')); ?>"
method="POST">


<?php echo csrf_field(); ?>




<select name="payment_method"
class="form-select form-select-pink mb-3"
required>



<option value="">
Pilih Metode Pembayaran
</option>



<option value="cash">
💵 Cash
</option>



<option value="transfer">
🏦 Transfer
</option>



<option value="qris">
📱 QRIS
</option>



</select>





<button class="btn btn-checkout w-100">

✅ Checkout

</button>



</form>











<form action="<?php echo e(route('penjualan.cancel')); ?>"
method="POST"
class="mt-2">


<?php echo csrf_field(); ?>



<button class="btn btn-batal w-100">

Batalkan Transaksi

</button>


</form>





</div>


</div>


</div>





</div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PoinOfSale5-main\resources\views/penjualan/create.blade.php ENDPATH**/ ?>