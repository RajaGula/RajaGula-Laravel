@extends('Pelanggan.master')

@section('content')

    <h4 style="font-family: 'Montserrat'; margin-left:120px; margin-top:50px;"><b>Keranjang Saya</b></h4>

    <div class="container mt-5 justify-content-center" id="cont">
        <div class="cont">
        <div class="isitabel">
    <table  class="table table-responsive table-bordered border-success">
        <thead class="table  table-success">
            <tr>
            <th scope="col"><center>No</center></th>
            <th scope="col"><center>Gambar</center></th>
            <th scope="col"><center>Nama Produk</center></th>
            <th scope="col"><center>Jumlah</center></th>
            <th scope="col"><center>Harga</center></th>
            <th scope="col"><center>Aksi</center></th>
            </tr>
        </thead>

        <tbody>
        {{-- jdjd --}}
            <tr>
                <th scope="row"></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><center><a class="btn btn-danger" name="hapus" href="#">Hapus</a></center></td>
            </tr>
            
            <tr>
                <th colspan="4">Total</th>
                <th>Rp </th>
                <th><center><a class="btn btn-success" name="hapus" href="#">Checkout</a></center></th>
            </tr>
        </tbody>
    </table>
        </div>
        </div>
    </div>

@endsection
