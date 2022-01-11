@extends('Pelanggan.master')

@section('content')

        <div class="container">
            <h4 style="font-family: 'Montserrat'; margin-top:50px;"><b>Profil Saya</b></h4>
            <form>
                <div class="form-group row pb-3 pt-3">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control-plaintext" name="nama" value="jae" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="email" value="email">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" name="password" placeholder="Kata Sandi">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-sm-2 col-form-label">Nomor Handphone</label>
                    <div class="col-sm-5">
                        <input type="number" class="form-control" name="no_hp" value="081231234542">
                    </div>
                </div>
                <div class="form-group row pt-4">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-5">
                        <textarea class="form-control" name="alamat" rows="3" cols="30"></textarea>
                    </div>
                </div>
                <div class="form-group row justify-content-center pt-5">
                    <button type="submit" class="btn btn-warning btn-block m-2" style="width:180px" name="update">Ubah</button>
                    <button type="submit" class="btn btn-danger btn-block m-2" style="width:180px" name="cancel">Cancel</button>
                </div>
            </form>
        </div>


@endsection