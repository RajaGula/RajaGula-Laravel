@extends('Pelanggan.master')

@section('content')
    <h4 style="font-family: 'Montserrat'; margin-left:120px; margin-top:50px;"><b>Status Pemesanan</b></h4>

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
            <th scope="col"><center>Status</center></th>
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
                <td><center><a class="btn btn-info" name="hapus" href="#">Statusnya apa</a></center></td>
            </tr>
            
        </tbody>
    </table>
        </div>
        </div>
    </div>

@endsection