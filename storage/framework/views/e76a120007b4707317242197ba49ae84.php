<nav class="navbar navbar-expand-lg navbar-pink shadow-sm">

<style>

.navbar-pink {
    background-color:#ff8fcf;
    padding:10px 20px;
}


/* Logo */
.navbar-brand {

    color:white !important;
    font-size:22px;
    font-weight:bold;

}



/* Menu */

.nav-link {

    color:white !important;
    font-weight:600;
    margin-left:10px;
    border-radius:10px;
    padding:8px 15px !important;
    transition:.3s;

}



.nav-link:hover {

    background:white;
    color:#d63384 !important;

}



/* Aktif */

.nav-link.active {

    background:white;
    color:#d63384 !important;

}



/* Tombol mobile */

.navbar-toggler {

    background:white;
    border:none;

}



/* Logout */

.btn-logout {

    background:white;
    color:#d63384;

    border:none;
    border-radius:10px;

    padding:8px 18px;

    font-weight:bold;

}



.btn-logout:hover {

    background:#d63384;
    color:white;

}



/* Responsive */

@media(max-width:768px){

    .btn-logout{

        margin-top:15px;

    }

}


</style>



<div class="container-fluid">


  
<a class="navbar-brand d-flex align-items-center" href="/">

    <img src="<?php echo e(asset('images/smk.png')); ?>"
         width="32"
         height="32">
        POS MARIKA

</a>



    
    <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

        <span class="navbar-toggler-icon"></span>

    </button>



    <div class="collapse navbar-collapse"
         id="navbarNav">


        <ul class="navbar-nav">


            
            <li class="nav-item">

                <a href="/"
                   class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>">

                     Dashboard

                </a>

            </li>



            
            <li class="nav-item">

                <a href="<?php echo e(route('users.index')); ?>"
                   class="nav-link <?php echo e(Request::is('users*') ? 'active' : ''); ?>">

                     User

                </a>

            </li>




            
            <li class="nav-item">

                <a href="<?php echo e(route('produk.index')); ?>"
                   class="nav-link <?php echo e(Request::is('produk*') ? 'active' : ''); ?>">

                    Produk

                </a>

            </li>




            
            <li class="nav-item">

                <a href="<?php echo e(route('penjualan.index')); ?>"
                   class="nav-link <?php echo e(Request::is('penjualan*') ? 'active' : ''); ?>">

                    Penjualan

                </a>

            </li>


        </ul>




        
        <form action="<?php echo e(route('logout')); ?>"
              method="POST"
              class="ms-auto">

            <?php echo csrf_field(); ?>


            <button type="submit"
                    class="btn btn-logout">

             Logout

            </button>


        </form>



    </div>


</div>


</nav><?php /**PATH C:\laragon\www\PoinOfSale5-main\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>