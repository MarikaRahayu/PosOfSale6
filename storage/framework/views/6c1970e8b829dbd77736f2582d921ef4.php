<?php $__env->startSection('title', 'Produk'); ?>

<?php $__env->startSection('content'); ?>

<style>

body {
    background: #fff0f6;
}


/* Container */
.product-container {
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(214,51,132,0.15);
}


/* Judul */
.product-title {
    color: #d63384;
    font-weight: 700;
}


/* Total Produk */
.total-box {

    background:#fff0f6;
    border:2px solid #ffc1dc;
    padding:15px 20px;
    border-radius:15px;
    color:#d63384;
    font-weight:bold;

}



/* Tombol tambah */
.btn-tambah {
    background: #ff69b4;
    color: white;
    border: none;
}

.btn-tambah:hover {
    background: #e7549c;
    color: white;
}



/* Search */
.form-control {
    border: 2px solid #ffc1dc;
}

.form-control:focus {
    border-color: #ff69b4;
    box-shadow: 0 0 5px #ff69b4;
}



/* Tombol cari */
.btn-cari {
    border-color: #ff69b4;
    color: #d63384;
}

.btn-cari:hover {
    background: #ff69b4;
    color:white;
}



/* Tabel */
.table {
    overflow:hidden;
    border-radius:15px;
}


.table thead th {

    background:#d63384 !important;
    color:white;
    text-align:center;

}


.table tbody tr:hover {

    background:#fff0f6;

}



/* Foto */
.img-thumbnail {

    border:3px solid #ffb6c1;
    border-radius:12px;

}



/* Tombol edit */
.btn-edit {

    background:#ffc1dc;
    color:#8b1e52;
    border:none;

}


.btn-edit:hover {

    background:#ff99c2;
    color:white;

}



/* Tombol hapus */
.btn-hapus {

    background:#ff4d88;
    color:white;
    border:none;

}


.btn-hapus:hover {

    background:#d6336c;

}



/* Pagination */
.pagination .page-link {

    color:#d63384;

}


.pagination .active .page-link {

    background:#d63384;
    border-color:#d63384;

}


</style>





<div class="container mt-5">


<div class="product-container">





<h1 class="product-title mb-2">

    Halaman Produk

</h1>







<div class="total-box mb-4">


Total Produk :

<?php echo e($products->total()); ?>


Produk


</div>







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










<div class="mb-3">


<a href="<?php echo e(route('produk.create')); ?>"
   class="btn btn-tambah btn-sm">


+ Tambah Produk


</a>


</div>









<form action="<?php echo e(route('produk.index')); ?>"
      method="GET"
      class="mb-4">


<div class="d-flex gap-2">



<input type="text"
       name="search"
       class="form-control"
       placeholder="Cari nama produk..."
       value="<?php echo e(request('search')); ?>">





<button class="btn btn-cari">

Cari

</button>



</div>


</form>









<div class="table-responsive">



<table class="table table-bordered align-middle">





<thead>


<tr>


<th>No</th>

<th>User</th>

<th>Foto</th>

<th>Nama Produk</th>

<th>Jenis Produk</th>

<th>Harga Beli</th>

<th>Harga Jual</th>

<th>Stok</th>

<th>Aksi</th>


</tr>


</thead>









<tbody>



<?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>



<tr>




<td class="text-center">


<?php echo e($products->firstItem() + $loop->index); ?>



</td>






<td>


<?php echo e($product->user->name ?? '-'); ?>



</td>







<td class="text-center">



<?php if($product->foto): ?>



<img src="<?php echo e(asset('storage/'.$product->foto)); ?>"
     width="70"
     height="70"
     style="object-fit:cover"
     class="img-thumbnail">



<?php else: ?>


<span class="text-muted">

Tidak ada foto

</span>



<?php endif; ?>



</td>








<td>


<?php echo e($product->nama); ?>



</td>







<td>


<?php echo e($product->jenis_produk ?? '-'); ?>



</td>







<td>


Rp <?php echo e(number_format($product->harga_beli,0,',','.')); ?>



</td>







<td>


Rp <?php echo e(number_format($product->harga_jual,0,',','.')); ?>



</td>







<td class="text-center">


<?php echo e($product->stok); ?>



</td>







<td>



<div class="d-flex gap-1">





<a href="<?php echo e(route('produk.edit',$product->id)); ?>"
   class="btn btn-edit btn-sm">


Edit


</a>








<form action="<?php echo e(route('produk.destroy',$product->id)); ?>"
      method="POST"
      onsubmit="return confirm('Yakin ingin menghapus produk ini?')">



<?php echo csrf_field(); ?>

<?php echo method_field('DELETE'); ?>




<button class="btn btn-hapus btn-sm">


Hapus


</button>



</form>





</div>



</td>







</tr>







<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>




<tr>


<td colspan="9"
    class="text-center text-muted">


Data produk tidak ditemukan


</td>


</tr>





<?php endif; ?>






</tbody>






</table>




</div>












<div class="mt-3">


<?php echo e($products->links()); ?>



</div>






</div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PoinOfSale5-main\resources\views/produk/index.blade.php ENDPATH**/ ?>