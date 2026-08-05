@extends('layouts.app')

@section('title','Dashboard')

@section('content')

<div class="container mt-4">

    <div class="card border-0 shadow-lg rounded-4" style="background:#fff0f6;">

        <div class="card-body p-5">

            <div class="text-center mb-5">

                <h1 class="fw-bold" style="color:#d63384;">
                    Ringkasan Hari Ini
                </h1>

                <h4 class="text-secondary">
                    ({{ \Carbon\Carbon::now()->locale('id')->translatedFormat('l, d F Y') }})
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
                                Rp {{ number_format($ringkasan['total_penjualan'] ?? 0, 0, ',', '.') }}
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
                                {{ $ringkasan['total_transaksi'] ?? 0 }}
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
                                                Rp {{ number_format($ringkasan['total_cash'] ?? 0, 0, ',', '.') }}
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
                                                Rp {{ number_format($ringkasan['total_non_tunai'] ?? 0, 0, ',', '.') }}
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

                                        @forelse($produkStokRendah as $produk)

                                        <tr>
                                            <td>{{ $produk->nama }}</td>
                                            <td class="text-center">{{ $produk->stok }}</td>
                                        </tr>

                                        @empty

                                        <tr>
                                            <td colspan="2" class="text-center">
                                                Belum ada data
                                            </td>
                                        </tr>

                                        @endforelse

                                    </tbody>

                                </table>

                                @if(isset($produkStokRendah) && method_exists($produkStokRendah, 'links'))
                                {{ $produkStokRendah->links() }}
                                @endif

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

                                        @forelse($produkStokHabis as $produk)

                                        <tr>
                                            <td>{{ $produk->nama }}</td>
                                            <td class="text-center">{{ $produk->stok }}</td>
                                        </tr>

                                        @empty

                                        <tr>
                                            <td colspan="2" class="text-center">
                                                Belum ada data
                                            </td>
                                        </tr>

                                        @endforelse

                                    </tbody>

                                </table>

                                @if(isset($produkStokHabis) && method_exists($produkStokHabis, 'links'))
                                {{ $produkStokHabis->links() }}
                                @endif

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

                                @forelse($produkTerlaris as $index => $produk)

                                <tr>

                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $produk->nama }}</td>
                                    <td>{{ $produk->total_terjual }}</td>

                                </tr>

                                @empty

                                <tr>

                                    <td colspan="3" class="text-center">
                                        Belum ada data penjualan
                                    </td>

                                </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection