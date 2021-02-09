@extends('layouts.app')
@section('content')
    <div>
        <div class="row">
            <div class="col-lg-12">
                <header class="text-white pt-lg-5 pb-lg-5 mb-5">
                    <div class="container text-center">
                        <h1>Welcome {{Auth::user()->name}} To supplier panel</h1>
                        <p class="lead">Here you can customize your dashboard </p>
                    </div>
                </header>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="row">
                    <div class="card card-supplier text-white bg-dark mb-3">
                        <div class="card-header">Setting</div>
                        <div class="card-body">
                            <form method="POST" id="supplierForm" action="{{ url('supplier/data/save/'.Auth::user()->id) }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="status">Status</label>
                                        <input type="text" class="form-control" name="status" value="{{Auth::user()->supplier['status']}}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{Auth::user()->supplier['name']}}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="score">Score</label>
                                        <input type="text" class="form-control" name="score" value="{{Auth::user()->supplier['score']}}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="ecohuntDeal">Ecohunt Deal</label>
                                        <input type="number" class="form-control" name="ecohuntDeal" value="{{Auth::user()->supplier['ecohuntDeal']}}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="link">Link</label>
                                        <input type="text" class="form-control" name="link" value="{{Auth::user()->supplier['link']}}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="sourcing">Sourcing</label>
                                        <input type="text" class="form-control" name="sourcing" value="{{Auth::user()->supplier['sourcing']}}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="cost">Cost</label>
                                        <input type="text" class="form-control" name="cost" value="{{Auth::user()->supplier['cost']}}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="processing">Processing</label>
                                        <input type="text" class="form-control" name="processing" value="{{Auth::user()->supplier['Processing']}}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="special_line">Special line</label>
                                        <select class="form-control" name="special_line">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="branding">Branding</label>
                                        <select class="form-control" name="branding">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="couriers">Couriers</label>
                                        <input type="text" class="form-control" name="couriers" value="{{Auth::user()->supplier['couriers']}}">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="support">Support</label>
                                        <input type="text" class="form-control" name="support" value="{{Auth::user()->supplier['support']}}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="return_policy">Return policy</label>
                                        <select class="form-control" name="return_policy">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="pod">Pod</label>
                                        <select class="form-control" name="pod">
                                            <option>Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
