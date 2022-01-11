@extends('Admin.master')

@section('content')
            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Selamat Datang Di Dashboard Raja Gula</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                
                                <span><b>Login sebagai : </b>{{ Auth::user()->role }}</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="page-content">
                
            </div>
@endsection