@extends('template')
@section('title','Transaksi Barang')
@section('container')
<div class="card" style="margin-top: 20px;">
    <div class="card-body">

        <div class="row">
            <div class="col-lg-12">
                <h2 class="text-left">TRANSACTION APPLICATION</h2>
            </div>
            <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
                <a class="btn btn-info float-left" href="create"> Add Barang</a>
            </div>
        </div>

        @if($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
        @endif


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id Barang</th>
                    <th>Nama Barang</th>
                    <th>Tahun Barang</th>
                    <th>Kategori</th>
                    <th>Pengirim</th>
                    {{-- <th width="280px">More</th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach($transaksi as $transaksi)
                <tr>

                    <td>{{ $transaksi->id }}</td>
                    <td>{{ $transaksi->nama_barang }}</td>
                    <td>{{ $transaksi->tahun_barang }}</td>
                    <td>{{ $transaksi->id_kategori }}</td>
                    <td>{{ $transaksi->pengirim }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>

        {{-- <div class="alert alert-alert">Start Adding to the Database.</div> --}}

    </div>
</div>
@endsection