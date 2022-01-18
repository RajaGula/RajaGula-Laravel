@extends('Pelanggan.master')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@section('content')

    <div class="container mt-5">
        <h4 style="font-family: 'Montserrat'; margin-top:50px;"><b>Detail Produk</b></h4>
    </div>
    <div class="container mt-4">
        <div class="row g-0">
            <div class="col-xl-4 d-none d-xl-block">
              <img
                src="https://drive.google.com/uc?export=view&id=1Djp8q7h6qBwjfDQ2M7d27TauENqcZinq"
                alt="Sample photo"
                class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
              />
            </div>
            <div class="col-xl-5">
                <h5>HiJus</h5>
                <h6 style="color:red">Rp. 20.500</h6>
                <br><br>
                <p>Hijus meupakan minuman sari tebu yang berasal dari tebu berkualitas, diproses dan dikemas secara higienis. Nikmati kesegarannya dan dapatkan manfaat kesehatan yang terkandung didalamnya.</p>
                <br>
                <p><b>Kuantitas</b></p>
                <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                    <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                      <i class="fas fa-minus"></i>
                    </button>
    
                    <input id="form1" min="0" name="quantity" value="2" type="number"
                      class="form-control form-control-sm" />
    
                    <button class="btn btn-link px-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                      <i class="fas fa-plus"></i>
                    </button>
                </div>
                <br>
                <div class="pb-4">
                    <a class="btn btn-outline-light" name="hapus" href="#" style="background-color:#7F9B6E;font-color:white;width:50%;border-radius:25px 25px 25px 25px">Detail</a>
                    <button type="button" class="btn btn-warning">Cancel</button>
                </div>
            </div>
        </div>
    </div>

@endsection