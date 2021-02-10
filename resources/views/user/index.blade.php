@extends('layouts.app')
@section('content')
    @include('modals.supplier')
    <div class="row">
        <div class="col-lg-12">
            <header class="text-white pt-lg-5 pb-lg-5 mb-5">
                <div class="text-center">
                    <h1>Handpicked and vetted suppliers for <br>your next ecom store</h1>
                    <p class="lead">Ecomhunt tracker is the fastest and easiest way to understand what's going on
                        behind your stores and fix</p>
                </div>
            </header>
        </div>
    </div>
    <div id="app">
        <supplier-page></supplier-page>
    </div>

@endsection
