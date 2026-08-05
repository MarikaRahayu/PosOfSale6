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


  {{-- Logo --}}
<a class="navbar-brand d-flex align-items-center" href="/">

    <img src="{{ asset('images/smk.png') }}"
         width="32"
         height="32">
        POS MARIKA

</a>



    {{-- Tombol Mobile --}}
    <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

        <span class="navbar-toggler-icon"></span>

    </button>



    <div class="collapse navbar-collapse"
         id="navbarNav">


        <ul class="navbar-nav">


            {{-- Dashboard --}}
            <li class="nav-item">

                <a href="/"
                   class="nav-link {{ Request::is('/') ? 'active' : '' }}">

                     Dashboard

                </a>

            </li>



            {{-- User --}}
            <li class="nav-item">

                <a href="{{ route('users.index') }}"
                   class="nav-link {{ Request::is('users*') ? 'active' : '' }}">

                     User

                </a>

            </li>




            {{-- Produk --}}
            <li class="nav-item">

                <a href="{{ route('produk.index') }}"
                   class="nav-link {{ Request::is('produk*') ? 'active' : '' }}">

                    Produk

                </a>

            </li>




            {{-- Penjualan --}}
            <li class="nav-item">

                <a href="{{ route('penjualan.index') }}"
                   class="nav-link {{ Request::is('penjualan*') ? 'active' : '' }}">

                    Penjualan

                </a>

            </li>


        </ul>




        {{-- Logout --}}
        <form action="{{ route('logout') }}"
              method="POST"
              class="ms-auto">

            @csrf


            <button type="submit"
                    class="btn btn-logout">

             Logout

            </button>


        </form>



    </div>


</div>


</nav>