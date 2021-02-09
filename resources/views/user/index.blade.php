@extends('layouts.app')
@include('modals.supplier')
@section('content')

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
    <div class="row">
        <div class="col-lg-9 col-xs-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-supplier">
                        <table class="pb-5 text-white ">
                            <tr>
                                <th><i class="fas fa-chart-line"></i> Top 10 Suppliers</th>
                                <th>Rating</th>
                                <th>Deal</th>
                                <th>Link</th>
                            </tr>
                            @foreach($suppliers as $key => $supplier)
                                <tr>
                                    <td>{{$key+1}} {{$supplier->name}}</td>
                                    <td>3.4/5</td>
                                    <td>20% Discount</td>
                                    <td>
                                        <button class="btn buttonGlowGreen">VISIT</button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="supplier-list-table">
                        <div class="table-responsive">
                            <table class="text-white">
                                <tr class="pt-3 pb-4" style="background-color: #1F1F1F">
                                    <td class="pl-3">
                                        <svg width="30" height="30" id="rectangle2" viewBox="0 0 22 22" fill="green"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M11 2.75V6.41667H20.1666V19.25H1.83331V2.75H11ZM3.66665 17.4167H5.49998V15.5833H3.66665V17.4167ZM5.49998 13.75H3.66665V11.9167H5.49998V13.75ZM3.66665 10.0833H5.49998V8.25H3.66665V10.0833ZM5.49998 6.41667H3.66665V4.58333H5.49998V6.41667ZM7.33331 17.4167H9.16665V15.5833H7.33331V17.4167ZM9.16665 13.75H7.33331V11.9167H9.16665V13.75ZM7.33331 10.0833H9.16665V8.25H7.33331V10.0833ZM9.16665 6.41667H7.33331V4.58333H9.16665V6.41667ZM18.3333 17.4167V8.25H11V10.0833H12.8333V11.9167H11V13.75H12.8333V15.5833H11V17.4167H18.3333ZM16.5 10.0833H14.6666V11.9167H16.5V10.0833ZM14.6666 13.75H16.5V15.5833H14.6666V13.75Z"
                                                  fill="white"/>
                                        </svg>
                                    </td>
                                    <td>
                                        <div style="display: inline-block">
                                            <label class="pt-3" style="font-size: 20px">Zuanghzou Sportswaer</label>
                                            <div class="table-text">Shanghai China / Warehouses: US / FR / CH / UK</div>
                                        </div>
                                    </td>
                                    <td>
                                        <label class="pr-3 pt-3">4.3/5 Trustpilot
                                            <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17.1118 0H0V17H17.1118V0Z" fill="#00B67A"/>
                                                <path
                                                    d="M8.55592 11.4573L11.1583 10.802L12.2457 14.1312L8.55592 11.4573ZM14.5451 7.15413H9.96408L8.55592 2.86871L7.14775 7.15413H2.56677L6.27434 9.81038L4.86618 14.0958L8.57374 11.4395L10.8553 9.81038L14.5451 7.15413Z"
                                                    fill="white"/>
                                            </svg>
                                        </label>

                                        <i class="fal fa-tag my-tag" style="transform: rotate(90deg);"></i>
                                        <label class="pt-3">23% Ecomhunt Deal</label>
                                    </td>
                                    <td class="mr-0">
                                        <button class="btn buttonGlowGreen">
                                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M3.125 3.125V11.875H11.875V7.5H13.125V11.875C13.125 12.5625 12.5625 13.125 11.875 13.125H3.125C2.43125 13.125 1.875 12.5625 1.875 11.875V3.125C1.875 2.4375 2.43125 1.875 3.125 1.875H7.5V3.125H3.125ZM8.75 3.125V1.875H13.125V6.25H11.875V4.00625L5.73125 10.15L4.85 9.26875L10.9937 3.125H8.75Z"
                                                      fill="black" fill-opacity="0.54"/>
                                            </svg>
                                            DISCOUNT LINK
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-dark table-hover supplier-table"
                                   style="background-color: #151515">
                                <thead>
                                <tr>
                                    <th scope="col" style="width: 10%;">SOURCING</th>
                                    <th scope="col" style="width: 10%;">COST</th>
                                    <th scope="col" style="width: 10%;">PROCESSING</th>
                                    <th scope="col" style="width: 20%;">SPECIAL LINE</th>
                                    <th scope="col" style="width: 10%;">BRANDING</th>
                                    <th scope="col" style="width: 10%;">COURIERS</th>
                                    <th scope="col" style="width: 5%;">SUPPORT</th>
                                    <th scope="col" style="width: 20%;">RETURN POLICY</th>
                                    <th scope="col" style="width: 5%;">POD</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>24 hours</th>
                                    <td>15% lower /Aliexpress</td>
                                    <td>48 Hours</td>
                                    <td>Yes</td>
                                    <td>Yes</td>
                                    <td>DHL/ePacket/FedEx</td>
                                    <td>24/7</td>
                                    <td>Yes</td>
                                    <td>Yes</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-xs-12">
            <div class="row">
                <div class="col-12">
                    <div class="card text-white card-color mb-2">
                        <div class="card-body-arsp">
                            <svg width="35" height="35" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g id="business_24px">
                                    <path id="icon/communication/business_24px" fill-rule="evenodd" clip-rule="evenodd"
                                          d="M12 7H22V21H2V3H12V7ZM4 19H6V17H4V19ZM6 15H4V13H6V15ZM4 11H6V9H4V11ZM6 7H4V5H6V7ZM8 19H10V17H8V19ZM10 15H8V13H10V15ZM8 11H10V9H8V11ZM10 7H8V5H10V7ZM20 19V9H12V11H14V13H12V15H14V17H12V19H20ZM18 11H16V13H18V11ZM16 15H18V17H16V15Z"
                                          fill="white" fill-opacity="0.54"/>
                                </g>
                            </svg>
                            <a href="#" class="text-white ml-3" data-toggle="modal" data-target="#modal-supplier">
                                Are you a supplier? <i class="fas fa-chevron-right ml-5"></i>
                            </a>
                            <p class="pl-5 text-muted">Join this list</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pt-4">
                    <img src="{{asset('images/Screenshot.png')}}" style="width: 100%">
                </div>
            </div>
            <div class="row">
                <div class="col-12 pt-4">
                    <div class="card text-white card-color mb-3 mt-3" >
                        <div class="card-header">Shipping Calculator</div>
                        <div class="card-body">
                            <div class="row">
                                <form>
                                    <div class="row">
                                        <div class="col">
                                            <label style="font-size: 7px;">ORIGIN</label>
                                            <input type="text" class="form-control bg-dark" placeholder="China">
                                        </div>
                                        <i class="fas fa-exchange-alt"></i>
                                        <div class="col">
                                            <label style="font-size: 7px;">DESTINATION</label>
                                            <input type="text" class="form-control bg-dark" placeholder="Israel">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <a href="" class="float-right pt-5 text-success">CALCULATE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 pt-4">
                    <img src="{{asset('images/image 3.png')}}" style="width: 100%">
                </div>
            </div>
        </div>
    </div>

@endsection
