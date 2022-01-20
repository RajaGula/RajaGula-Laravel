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
        <?php
            $no = 0;
        ?>
            @foreach($cart as $cr)
        <?php
            $no += 1;
        ?>
        <form class="form form-horizontal" action="{{ route('checkout.create', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
            <tr>  
                <th scope="row" style="line-height: 8rem; text-align: center">{{$no}}</th>
                <td style="line-height: 8rem;text-align: center"><center><img src="{{ asset('fotoproduk/' . $cr->produk->foto_produk) }}" alt="foto" class="img-fluid" style="height: 8rem; padding-right: 0;"><center></td>
                <td style="line-height: 8rem;text-align: center">{{$cr->produk->nama_produk}}</td>
                <td style="line-height: 8rem;text-align: center">{{$cr->jumlah}}</td>
                <td style="line-height: 8rem;text-align: center">Rp {{$cr->produk->harga * $cr->jumlah}}</td>
                <td style="line-height: 8rem;text-align: center"><center>
                    <a class="btn btn-danger" href="{{route('cart.delete', $cr->id)}}" onclick="return confirm('Are you sure?')" style="font-color:white;width:80%;border-radius:25px 25px 25px 25px">Hapus</a>
                </center></td>
            </tr>
        @endforeach
            <tr>
                <th colspan="4" style="line-height: 2rem;">Total Belanja</th>
                <th style="line-height: 2rem;text-align: center">Rp {{$tot}}</th>
                <th><center><button type="submit" class="btn btn-outline-light" name="hapus" href="#" style="background-color:#7F9B6E;font-color:white;width:80%;border-radius:25px 25px 25px 25px">Checkout</button></center></th>
            </tr>
        </form>
        </tbody>
    </table>
        </div>
        </div>
    </div>

@endsection
