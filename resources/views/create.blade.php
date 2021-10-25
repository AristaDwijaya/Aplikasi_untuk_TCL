@extends('template')
@section('title','Transaksi Barang ')
@section('container')
<div class="card" style="margin-top: 20px;">
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-center">Tambah Barang</h2>
            </div>
        </div>
        <div class="card" style="margin-top: 20px;">

            <form action="{{ route('tambah') }}" method="POST">
                {{ csrf_field() }}


                <div class="form-group">
                    <label for="id">Id Barang</label>
                    <input type="number" name="id" class="form-control" id="id" aria-describedby="id"
                        placeholder="Masukan id Barang">
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control" id="nama_barang"
                        aria-describedby="nama_barang" placeholder="Masukan Nama Barang">
                </div>
                <div class="form-group">
                    <label for="tahun_barang">Tahun Barang</label>
                    <input type="text" name="tahun_barang" class="form-control" id="tahun_barang"
                        aria-describedby="tahun_barang" placeholder="Masukan Tahun Barang">
                </div>
                <div class="form-group">
                    <label for="id_kategori">Id Kategori</label>
                    <input type="text" name="id_kategori" class="form-control" id="id_kategori"
                        aria-describedby="id_kategori" placeholder="Masukan nama Barang">
                </div>
                <div class="form-group">
                    <label for="nama_kategori">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" id="nama_kategori"
                        aria-describedby="nama_kategori" placeholder="Masukan kategori Barang">
                </div>
                <div class="form-group">
                    <label for="pengirim">Pengirim</label>
                    <input type="text" name="pengirim" class="form-control" id="pengirim" aria-describedby="pengirim"
                        placeholder="Masukan Pengirim">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection