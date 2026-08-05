<?php $__env->startSection('title', 'Edit Produk'); ?>

<?php $__env->startSection('content'); ?>

<style>

body {
    background: #fff0f6;
}


/* Card utama */
.edit-card {
    background: white;
    border-radius: 20px;
    padding: 35px;
    box-shadow: 0 8px 25px rgba(214,51,132,0.15);
}


/* Judul */
.edit-title {
    color: #d63384;
    font-weight: bold;
    margin-bottom: 25px;
}


/* Label */
.form-label {
    color: #8b1e52;
    font-weight: 600;
}


/* Input */
.form-control {
    border: 2px solid #ffc1dc;
    border-radius: 12px;
    padding: 10px;
}


.form-control:focus {
    border-color: #ff69b4;
    box-shadow: 0 0 8px rgba(255,105,180,.4);
}


/* Foto */
.img-thumbnail {
    border: 4px solid #ffb6c1;
    border-radius: 15px;
}


/* Tombol simpan */
.btn-simpan {
    background: #ff69b4;
    color:white;
    border:none;
    border-radius:10px;
    padding:10px 25px;
}


.btn-simpan:hover {
    background:#d63384;
    color:white;
}


/* Tombol kembali */
.btn-kembali {
    background:#f8d7e5;
    color:#8b1e52;
    border:none;
    border-radius:10px;
    padding:10px 25px;
}


.btn-kembali:hover {
    background:#ffb6c1;
    color:white;
}


/* Animasi */
.edit-card {
    animation: muncul .5s ease;
}


@keyframes muncul {

    from {
        opacity:0;
        transform:translateY(20px);
    }

    to {
        opacity:1;
        transform:translateY(0);
    }

}


</style>



<div class="container mt-5">


    <div class="edit-card">


        <h3 class="edit-title">
            Edit Produk
        </h3>




        <form action="<?php echo e(route('produk.update', $product->id)); ?>"
              method="POST"
              enctype="multipart/form-data">


            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>





            
            <div class="mb-4">


                <label class="form-label">
                    Foto Produk
                </label>



                <?php if($product->foto): ?>

                    <div class="mb-3">

                        <img src="<?php echo e(asset('storage/'.$product->foto)); ?>"
                             width="150"
                             height="150"
                             style="object-fit:cover"
                             class="img-thumbnail">

                    </div>

                <?php endif; ?>




                <input type="file"
                       name="foto"
                       class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">



                <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


            </div>







            
            <div class="mb-3">


                <label class="form-label">
                    Nama Produk
                </label>



                <input type="text"
                       name="nama"
                       value="<?php echo e(old('nama',$product->nama)); ?>"
                       class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">



                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


            </div>








            
            <div class="mb-3">


                <label class="form-label">
                    Harga Beli
                </label>



                <input type="number"
                       name="harga_beli"
                       value="<?php echo e(old('harga_beli',$product->harga_beli)); ?>"
                       class="form-control <?php $__errorArgs = ['harga_beli'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">



                <?php $__errorArgs = ['harga_beli'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


            </div>







            
            <div class="mb-3">


                <label class="form-label">
                    Harga Jual
                </label>



                <input type="number"
                       name="harga_jual"
                       value="<?php echo e(old('harga_jual',$product->harga_jual)); ?>"
                       class="form-control <?php $__errorArgs = ['harga_jual'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">



                <?php $__errorArgs = ['harga_jual'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


            </div>








            
            <div class="mb-4">


                <label class="form-label">
                    Stok
                </label>



                <input type="number"
                       name="stok"
                       value="<?php echo e(old('stok',$product->stok)); ?>"
                       class="form-control <?php $__errorArgs = ['stok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">



                <?php $__errorArgs = ['stok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


            </div>







            
            <div class="d-flex gap-2">


                <button type="submit"
                        class="btn btn-simpan">

                     Simpan Perubahan

                </button>




                <a href="<?php echo e(route('produk.index')); ?>"
                   class="btn btn-kembali">

                    ← Kembali

                </a>



            </div>





        </form>


    </div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PoinOfSale5-main\resources\views/produk/edit.blade.php ENDPATH**/ ?>