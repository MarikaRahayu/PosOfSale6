@extends('layouts.app')

@section('content')
<div class="container">

    <h4>Tambah Produk</h4>

    <form action="{{ route('produk.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        {{-- FOTO --}}
        <div class="mb-3">
            <label class="form-label">Foto</label>

            <input
                type="file"
                name="foto"
                id="foto"
                accept="image/*"
                onchange="previewFoto(event)"
                class="form-control @error('foto') is-invalid @enderror"
            >

            @error('foto')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

            {{-- Preview Foto --}}
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

        {{-- JENIS PRODUK --}}
        <div class="mb-3">
            <label class="form-label">Jenis Produk</label>

            <select
                name="jenis_produk"
                class="form-control @error('jenis_produk') is-invalid @enderror">

                <option value="">-- Pilih Jenis Produk --</option>

                <option value="Makanan" {{ old('jenis_produk') == 'Makanan' ? 'selected' : '' }}>
                    Makanan
                </option>

                <option value="Minuman" {{ old('jenis_produk') == 'Minuman' ? 'selected' : '' }}>
                    Minuman
                </option>

                <option value="Barang" {{ old('jenis_produk') == 'Barang' ? 'selected' : '' }}>
                    Barang
                </option>

                <option value="Elektronik" {{ old('jenis_produk') == 'Elektronik' ? 'selected' : '' }}>
                    Elektronik
                </option>

                <option value="Lainnya" {{ old('jenis_produk') == 'Lainnya' ? 'selected' : '' }}>
                    Lainnya
                </option>

            </select>

            @error('jenis_produk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- NAMA PRODUK --}}
        <div class="mb-3">
            <label class="form-label">Nama Produk</label>

            <input
                type="text"
                name="nama"
                value="{{ old('nama') }}"
                class="form-control @error('nama') is-invalid @enderror"
            >

            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- HARGA BELI --}}
        <div class="mb-3">
            <label class="form-label">Harga Beli</label>

            <input
                type="number"
                name="harga_beli"
                value="{{ old('harga_beli') }}"
                class="form-control @error('harga_beli') is-invalid @enderror"
            >

            @error('harga_beli')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- HARGA JUAL --}}
        <div class="mb-3">
            <label class="form-label">Harga Jual</label>

            <input
                type="number"
                name="harga_jual"
                value="{{ old('harga_jual') }}"
                class="form-control @error('harga_jual') is-invalid @enderror"
            >

            @error('harga_jual')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- STOK --}}
        <div class="mb-3">
            <label class="form-label">Stok</label>

            <input
                type="number"
                name="stok"
                value="{{ old('stok') }}"
                class="form-control @error('stok') is-invalid @enderror"
            >

            @error('stok')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        {{-- BUTTON --}}
        <div class="d-flex gap-2">

            <button type="submit" class="btn btn-success">
                Simpan
            </button>

            <a href="{{ route('produk.index') }}"
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

@endsection