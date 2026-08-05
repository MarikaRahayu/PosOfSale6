<?php $__env->startSection('title','Users'); ?>

<?php $__env->startSection('content'); ?>

<style>

body{
    background:#fff5fa;
}

/* Header */
.page-title{
    color:#e91e63;
    font-weight:700;
    font-size:35px;
}

.page-subtitle{
    color:#888;
}

/* Card */
.user-card{
    border:none;
    border-radius:20px;
    overflow:hidden;
    background:white;
    box-shadow:0 12px 35px rgba(233,30,99,.15);
}

/* Header Card */
.card-header-custom{
    background:linear-gradient(135deg,#ff5fa2,#ff8ac2);
    color:white;
    padding:22px;
}

/* Search */
.search-box{
    border-radius:12px;
    border:2px solid #ffd6e8;
    height:48px;
}

.search-box:focus{
    border-color:#ff5fa2;
    box-shadow:0 0 8px rgba(233,30,99,.25);
}

/* Button */
.btn-pink{
    background:#e91e63;
    color:white;
    border:none;
    border-radius:10px;
    padding:10px 18px;
    font-weight:600;
}

.btn-pink:hover{
    background:#d81b60;
    color:white;
}

.btn-edit{
    background:#ffb3d1;
    color:#c2185b;
    border:none;
}

.btn-edit:hover{
    background:#ff8fc1;
    color:white;
}

.btn-delete{
    background:#ff4f81;
    color:white;
    border:none;
}

.btn-delete:hover{
    background:#d81b60;
}

/* Table */
.table thead{
    background:#e91e63;
    color:white;
}

.table thead th{
    border:none;
    text-align:center;
    padding:15px;
}

.table tbody tr:hover{
    background:#fff0f6;
}

.table td{
    vertical-align:middle;
}

/* Badge */
.badge-admin{
    background:#e91e63;
    padding:8px 14px;
    border-radius:20px;
    color:white;
}

.badge-kasir{
    background:#ff8ac2;
    padding:8px 14px;
    border-radius:20px;
    color:white;
}

/* Pagination */
.pagination .page-link{
    color:#e91e63;
}

.pagination .active .page-link{
    background:#e91e63;
    border-color:#e91e63;
}

/* Responsive */
@media(max-width:768px){

.page-title{
    font-size:28px;
}

}

</style>

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="page-title">
                Manajemen User
            </h2>

            <p class="page-subtitle mb-0">
                Kelola seluruh pengguna aplikasi Point Of Sales
            </p>

        </div>

        <a href="<?php echo e(route('users.create')); ?>" class="btn btn-pink">

            + Tambah User

        </a>

    </div>

    <div class="card user-card">

        <div class="card-header-custom">

            <h5 class="mb-1">
                Daftar Pengguna
            </h5>

            <small>
                Total User : <strong><?php echo e($users->total()); ?></strong>
            </small>

        </div>

        <div class="card-body">

            <form method="GET">

                <div class="row mb-4">

                    <div class="col-md-5">

                        <input
                            type="text"
                            name="search"
                            value="<?php echo e(request('search')); ?>"
                            class="form-control search-box"
                            placeholder="🔍 Cari nama atau email">

                    </div>

                </div>

            </form>

            <div class="table-responsive">

                <table class="table align-middle table-hover">

                    <thead>

                        <tr>

                            <th width="70">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th width="120">Role</th>
                            <th width="170">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                    <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                    <tr>

                        <td class="text-center">
                            <?php echo e($loop->iteration); ?>

                        </td>

                        <td>

                            <strong><?php echo e($user->name); ?></strong>

                        </td>

                        <td>

                            <?php echo e($user->email); ?>


                        </td>

                        <td class="text-center">

                            <?php if($user->role->name=='admin'): ?>

                                <span class="badge-admin">

                                    Admin

                                </span>

                            <?php else: ?>

                                <span class="badge-kasir">

                                    Kasir

                                </span>

                            <?php endif; ?>

                        </td>

                        <td class="text-center">

                            <a href="<?php echo e(route('users.edit',$user->id)); ?>"
                               class="btn btn-sm btn-edit">

                                 Edit

                            </a>

                            <form
                                action="<?php echo e(route('users.destroy',$user->id)); ?>"
                                method="POST"
                                style="display:inline;">

                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>

                                <button
                                    onclick="return confirm('Yakin ingin menghapus user ini?')"
                                    class="btn btn-sm btn-delete">

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                    <tr>

                        <td colspan="5" class="text-center py-5">

                            <h5 style="color:#999">

                                Belum ada data user

                            </h5>

                        </td>

                    </tr>

                    <?php endif; ?>

                    </tbody>

                </table>

            </div>

            <div class="d-flex justify-content-end mt-4">

                <?php echo e($users->links()); ?>


            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PoinOfSale5-main\resources\views/users/index.blade.php ENDPATH**/ ?>