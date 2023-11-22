@extends('partials.tmpAdmin')

@section('tittle')
    Overview
@endsection

@section('content')
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        All Product</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small text-blue stretched-link" href="/product">View Details</a>
            <div class="small text-blue"><i class="fas fa-angle-right"></i></div>
        </div>
    </div>
</div>
@endsection