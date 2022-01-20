@extends('Pelanggan.master')

@section('content')

        <div>
            <img src="https://drive.google.com/uc?export=view&id=141hk3aox_grX3FWYaGFZU_HVKNE2qrPp" alt="banner" width="100%">
        </div>
        <div class="container">
            <div class="row pt-3">
                @foreach($produk as $pr)
                <div class="col-lg-3 justify-content-center pt-5">
                    <form>
                            <div class="card" style="width: 15rem;">
                                <img src="{{ asset('fotoproduk/' . $pr->foto_produk) }}" class="card-img-top" height="150px">
                                <div class="card-body">
                                    <a href="{{route('home.view', $pr->id)}}" style="text-decoration: none; color: black;">
                                        <h5 class="card-title">{{$pr->nama_produk}}</h5>
                                    </a>
                                    <p class="card-text" style="color:red">Rp {{$pr->harga}}</p>
                                    <div class="d-flex justify-content-center">
                                        <input class="btn btn-outline-light" style="background-color:#7F9B6E;font-color:white;width:50%;border-radius:25px 25px 25px 25px" type="submit" name="submit" value="&#43; Beli">
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
                @endforeach
                
            </div>
            <div class="pt-5">
                <img src="https://drive.google.com/uc?export=view&id=1tz3TASd2M3Jpu_m_t7G6dB7zFDPfMynr" alt="banner" width="100%">
            </div>
            <div class="row">
                <div class="col-md pt-5">
                    <h5>Urutkan :</h5>
                    <form>
                        <div class="form-check">
                            <input class="form-check-input"  type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Harga
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Promo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                A-Z
                            </label>
                        </div>
                    </form>
                </div>
                <div class="col-md-9">
                    <div class="row ">
                    @foreach($produk as $pr)
                        <div class="col-md pt-5">
                            <form>
                                <div class="card" style="width: 15rem;">
                                    <img src="{{ asset('fotoproduk/' . $pr->foto_produk) }}" class="card-img-top" height="150px">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$pr->nama_produk}}</h5>
                                        <p class="card-text" style="color:red">Rp {{$pr->harga}}</p>
                                        <div class="d-flex justify-content-center">
                                            <input class="btn btn-outline-light" style="background-color:#7F9B6E;font-color:white;width:50%;border-radius:25px 25px 25px 25px" type="submit" name="submit" value="&#43; Beli">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>

@endsection