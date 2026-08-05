<?php $__env->startSection('content'); ?>
<div class="container">

    <h4>Tambah Produk</h4>

    <form action="<?php echo e(route('produk.store')); ?>"
          method="POST"
          enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        
        <div class="mb-3">
            <label class="form-label">Foto</label>

            <input
                type="file"
                name="foto"
                id="foto"
                accept="image/*"
                onchange="previewFoto(event)"
                class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            >

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

            
            <div class="mt-3 text-center">
                <img
                    id="preview"
                    src=""
                    alt="Preview Foto"
                    class="img-thumbnail"
                    style="display:none; width:220px; height:220px; object-fit:cover;"
                >
            </div>
        </div>

        
        <div class="mb-3">
            <label class="form-label">Jenis Produk</label>

            <select
                name="jenis_produk"
                class="form-control <?php $__errorArgs = ['jenis_produk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                <option value="">-- Pilih Jenis Produk --</option>

                <option value="Makanan" <?php echo e(old('jenis_produk') == 'Makanan' ? 'selected' : ''); ?>>
                    Makanan
                </option>

                <option value="Minuman" <?php echo e(old('jenis_produk') == 'Minuman' ? 'selected' : ''); ?>>
                    Minuman
                </option>

                <option value="Barang" <?php echo e(old('jenis_produk') == 'Barang' ? 'selected' : ''); ?>>
                    Barang
                </option>

                <option value="Elektronik" <?php echo e(old('jenis_produk') == 'Elektronik' ? 'selected' : ''); ?>>
                    Elektronik
                </option>

                <option value="Lainnya" <?php echo e(old('jenis_produk') == 'Lainnya' ? 'selected' : ''); ?>>
                    Lainnya
                </option>

            </select>

            <?php $__errorArgs = ['jenis_produk'];
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
            <label class="form-label">Nama Produk</label>

            <input
                type="text"
                name="nama"
                value="<?php echo e(old('nama')); ?>"
                class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            >

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
            <label class="form-label">Harga Beli</label>

            <input
                type="number"
                name="harga_beli"
                value="<?php echo e(old('harga_beli')); ?>"
                class="form-control <?php $__errorArgs = ['harga_beli'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            >

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
            <label class="form-label">Harga Jual</label>

            <input
                type="number"
                name="harga_jual"
                value="<?php echo e(old('harga_jual')); ?>"
                class="form-control <?php $__errorArgs = ['harga_jual'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            >

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

        
        <div class="mb-3">
            <label class="form-label">Stok</label>

            <input
                type="number"
                name="stok"
                value="<?php echo e(old('stok')); ?>"
                class="form-control <?php $__errorArgs = ['stok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            >

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

            <button type="submit" class="btn btn-success">
                Simpan
            </button>

            <a href="<?php echo e(route('produk.index')); ?>"
               class="btn btn-secondary">
                Kembali
            </a>

        </div>

    </form>

</div>

<script>
function previewFoto(event) {

    const file = event.target.files[0];
    const preview = document.getElementById('preview');

    if (file) {

        const reader = new FileReader();

        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }

        reader.readAsDataURL(file);

    } else {

        preview.src = "";
        preview.style.display = "none";

    }
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PoinOfSale5-main\resources\views/produk/create.blade.php ENDPATH**/ ?>