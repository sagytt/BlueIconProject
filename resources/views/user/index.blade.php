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
    <div class="row">
        <div class="col-lg-9 col-xs-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-supplier">
                        <table class="pb-5 text-white ">
                            <tr>
                                <th>
                                    <div class="form-text">
                                        <svg width="15" height="15" viewBox="0 0 10 6" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7 0L8.145 1.145L5.705 3.585L3.705 1.585L0 5.295L0.705 6L3.705 3L5.705 5L8.855 1.855L10 3V0H7Z"
                                                fill="white"/>
                                        </svg>
                                        TOP 10 SUPPLIERS
                                    </div>
                                </th>
                                <th>RATING</th>
                                <th>DEAL</th>
                                <th>LINK</th>
                            </tr>
                            @foreach($suppliers as $key => $supplier)
                                <tr>
                                    <td> {{$key+1}}  {{$supplier->name}}
                                        <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.8017 0H1.19828C0.536469 0 0 0.536469 0 1.19828V9.28453C0 9.94631 0.536469 10.4828 1.19828 10.4828H14.8017C15.4635 10.4828 16 9.94635 16 9.28453V1.19828C16 0.536469 15.4635 0 14.8017 0Z" fill="#FF4B55"/>
                                            <path d="M2.65638 1.63925L2.91938 2.42782L3.75063 2.43425C3.85826 2.43507 3.90288 2.57244 3.81629 2.63635L3.1476 3.13013L3.39832 3.92269C3.43076 4.02531 3.31394 4.11016 3.22638 4.0476L2.55013 3.56419L1.87388 4.04756C1.78632 4.11016 1.66951 4.02525 1.70194 3.92266L1.95266 3.1301L1.28397 2.63635C1.19738 2.57241 1.24201 2.43507 1.34963 2.43425L2.18088 2.42782L2.44388 1.63925C2.47794 1.53716 2.62235 1.53716 2.65638 1.63925Z" fill="#FFE15A"/>
                                            <path d="M5.67493 1.83356L5.86353 2.09069L6.16787 1.9955C6.20728 1.98319 6.23968 2.02813 6.21556 2.06159L6.02924 2.32038L6.21381 2.58041C6.23771 2.61406 6.20499 2.65878 6.16568 2.64619L5.86196 2.54897L5.67168 2.80488C5.64706 2.838 5.5944 2.82069 5.59425 2.77944L5.59284 2.46053L5.29065 2.35863C5.25153 2.34541 5.25171 2.29003 5.29093 2.27709L5.59375 2.17722L5.59731 1.85834C5.59775 1.81719 5.65053 1.80028 5.67493 1.83356Z" fill="#FFE15A"/>
                                            <path d="M4.52668 1.067L4.84368 1.10143L4.97893 0.812653C4.99646 0.775278 5.05149 0.781685 5.0599 0.822091L5.12509 1.13422L5.44152 1.17359C5.48249 1.17868 5.4934 1.233 5.45756 1.25353L5.18084 1.41197L5.24118 1.72509C5.24899 1.76565 5.20071 1.79278 5.17012 1.76506L4.9339 1.55084L4.65478 1.70497C4.61865 1.72493 4.57787 1.68737 4.59481 1.64972L4.72553 1.35884L4.49265 1.14097C4.46256 1.1129 4.48565 1.06256 4.52668 1.067Z" fill="#FFE15A"/>
                                            <path d="M5.02788 4.15743L4.83932 4.41461L4.53498 4.31943C4.49557 4.30711 4.46317 4.35202 4.48729 4.38552L4.6736 4.6443L4.48904 4.90433C4.46513 4.93799 4.49785 4.98271 4.53717 4.97012L4.84085 4.8729L5.03113 5.1288C5.05576 5.16193 5.10842 5.14462 5.10857 5.10337L5.10998 4.78446L5.41217 4.68255C5.45129 4.66933 5.4511 4.61396 5.41188 4.60102L5.10907 4.50115L5.10551 4.18227C5.10501 4.14105 5.05229 4.12411 5.02788 4.15743Z" fill="#FFE15A"/>
                                            <path d="M6.17599 3.43705L5.85896 3.47149L5.72371 3.18271C5.70618 3.14533 5.65118 3.15174 5.64274 3.19215L5.57752 3.50427L5.26108 3.54365C5.22011 3.54874 5.20921 3.60305 5.24505 3.62358L5.52177 3.78202L5.46143 4.09515C5.45361 4.13571 5.5019 4.16283 5.53249 4.13512L5.76871 3.9209L6.04783 4.07502C6.08396 4.09499 6.12474 4.05743 6.1078 4.01977L5.97708 3.7289L6.20996 3.51102C6.24018 3.48296 6.21708 3.43262 6.17599 3.43705Z" fill="#FFE15A"/>
                                        </svg>
                                    </td>
                                    <td>{{$supplier->score}}/5</td>
                                    <td>{{$supplier->econhunt_deal}}% Discount</td>
                                    <td>
                                        <button class="btn buttonGlowGreen">VISIT</button>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="supplier-list-table">
                        <div class="table-responsive">
                        </div>
                        <div class="table-responsive">
                            @foreach($suppliers as $supplier)
                                <div class="pb-3">
                                    <table class="text-white">
                                        <tr class="pt-3 pb-4" style="background-color: #1F1F1F">
                                            <td class="pl-3">
                                                <svg width="30" height="30" id="rectangle2" viewBox="0 0 22 22"
                                                     fill="green"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M11 2.75V6.41667H20.1666V19.25H1.83331V2.75H11ZM3.66665 17.4167H5.49998V15.5833H3.66665V17.4167ZM5.49998 13.75H3.66665V11.9167H5.49998V13.75ZM3.66665 10.0833H5.49998V8.25H3.66665V10.0833ZM5.49998 6.41667H3.66665V4.58333H5.49998V6.41667ZM7.33331 17.4167H9.16665V15.5833H7.33331V17.4167ZM9.16665 13.75H7.33331V11.9167H9.16665V13.75ZM7.33331 10.0833H9.16665V8.25H7.33331V10.0833ZM9.16665 6.41667H7.33331V4.58333H9.16665V6.41667ZM18.3333 17.4167V8.25H11V10.0833H12.8333V11.9167H11V13.75H12.8333V15.5833H11V17.4167H18.3333ZM16.5 10.0833H14.6666V11.9167H16.5V10.0833ZM14.6666 13.75H16.5V15.5833H14.6666V13.75Z"
                                                          fill="white"/>
                                                </svg>
                                            </td>
                                            <td>
                                                <div style="display: inline-block">
                                                    <label class="pt-3" style="font-size: 20px">{{$supplier->name}}
                                                        <svg width="16" height="11" viewBox="0 0 16 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M14.8017 0H1.19828C0.536469 0 0 0.536469 0 1.19828V9.28453C0 9.94631 0.536469 10.4828 1.19828 10.4828H14.8017C15.4635 10.4828 16 9.94635 16 9.28453V1.19828C16 0.536469 15.4635 0 14.8017 0Z" fill="#FF4B55"/>
                                                            <path d="M2.65638 1.63925L2.91938 2.42782L3.75063 2.43425C3.85826 2.43507 3.90288 2.57244 3.81629 2.63635L3.1476 3.13013L3.39832 3.92269C3.43076 4.02531 3.31394 4.11016 3.22638 4.0476L2.55013 3.56419L1.87388 4.04756C1.78632 4.11016 1.66951 4.02525 1.70194 3.92266L1.95266 3.1301L1.28397 2.63635C1.19738 2.57241 1.24201 2.43507 1.34963 2.43425L2.18088 2.42782L2.44388 1.63925C2.47794 1.53716 2.62235 1.53716 2.65638 1.63925Z" fill="#FFE15A"/>
                                                            <path d="M5.67493 1.83356L5.86353 2.09069L6.16787 1.9955C6.20728 1.98319 6.23968 2.02813 6.21556 2.06159L6.02924 2.32038L6.21381 2.58041C6.23771 2.61406 6.20499 2.65878 6.16568 2.64619L5.86196 2.54897L5.67168 2.80488C5.64706 2.838 5.5944 2.82069 5.59425 2.77944L5.59284 2.46053L5.29065 2.35863C5.25153 2.34541 5.25171 2.29003 5.29093 2.27709L5.59375 2.17722L5.59731 1.85834C5.59775 1.81719 5.65053 1.80028 5.67493 1.83356Z" fill="#FFE15A"/>
                                                            <path d="M4.52668 1.067L4.84368 1.10143L4.97893 0.812653C4.99646 0.775278 5.05149 0.781685 5.0599 0.822091L5.12509 1.13422L5.44152 1.17359C5.48249 1.17868 5.4934 1.233 5.45756 1.25353L5.18084 1.41197L5.24118 1.72509C5.24899 1.76565 5.20071 1.79278 5.17012 1.76506L4.9339 1.55084L4.65478 1.70497C4.61865 1.72493 4.57787 1.68737 4.59481 1.64972L4.72553 1.35884L4.49265 1.14097C4.46256 1.1129 4.48565 1.06256 4.52668 1.067Z" fill="#FFE15A"/>
                                                            <path d="M5.02788 4.15743L4.83932 4.41461L4.53498 4.31943C4.49557 4.30711 4.46317 4.35202 4.48729 4.38552L4.6736 4.6443L4.48904 4.90433C4.46513 4.93799 4.49785 4.98271 4.53717 4.97012L4.84085 4.8729L5.03113 5.1288C5.05576 5.16193 5.10842 5.14462 5.10857 5.10337L5.10998 4.78446L5.41217 4.68255C5.45129 4.66933 5.4511 4.61396 5.41188 4.60102L5.10907 4.50115L5.10551 4.18227C5.10501 4.14105 5.05229 4.12411 5.02788 4.15743Z" fill="#FFE15A"/>
                                                            <path d="M6.17599 3.43705L5.85896 3.47149L5.72371 3.18271C5.70618 3.14533 5.65118 3.15174 5.64274 3.19215L5.57752 3.50427L5.26108 3.54365C5.22011 3.54874 5.20921 3.60305 5.24505 3.62358L5.52177 3.78202L5.46143 4.09515C5.45361 4.13571 5.5019 4.16283 5.53249 4.13512L5.76871 3.9209L6.04783 4.07502C6.08396 4.09499 6.12474 4.05743 6.1078 4.01977L5.97708 3.7289L6.20996 3.51102C6.24018 3.48296 6.21708 3.43262 6.17599 3.43705Z" fill="#FFE15A"/>
                                                        </svg>
                                                    </label>
                                                    <div class="table-text">
                                                       {{$supplier->couriers}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="ml-5">
                                                <label class="pr-3 pt-3"> {{$supplier->score}}/5 Trustpilot
                                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M17.1118 0H0V17H17.1118V0Z" fill="#00B67A"/>
                                                        <path
                                                            d="M8.55592 11.4573L11.1583 10.802L12.2457 14.1312L8.55592 11.4573ZM14.5451 7.15413H9.96408L8.55592 2.86871L7.14775 7.15413H2.56677L6.27434 9.81038L4.86618 14.0958L8.57374 11.4395L10.8553 9.81038L14.5451 7.15413Z"
                                                            fill="white"/>
                                                    </svg>
                                                </label>

                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.3129 5.825L12.8504 0.940625C12.8269 0.6875 12.6254 0.4875 12.3723 0.4625L7.48788 0H7.48163C7.43163 0 7.39257 0.015625 7.36288 0.0453125L0.0456944 7.3625C0.0312094 7.37696 0.0197176 7.39413 0.0118767 7.41303C0.00403585 7.43193 0 7.45219 0 7.47266C0 7.49312 0.00403585 7.51338 0.0118767 7.53228C0.0197176 7.55119 0.0312094 7.56836 0.0456944 7.58281L5.73007 13.2672C5.75976 13.2969 5.79882 13.3125 5.84101 13.3125C5.88319 13.3125 5.92226 13.2969 5.95194 13.2672L13.2691 5.95C13.3004 5.91719 13.316 5.87187 13.3129 5.825ZM5.83944 11.6984L1.61444 7.47344L7.85976 1.22813L11.7191 1.59375L12.0848 5.45312L5.83944 11.6984ZM9.28163 2.65625C8.52382 2.65625 7.90663 3.27344 7.90663 4.03125C7.90663 4.78906 8.52382 5.40625 9.28163 5.40625C10.0394 5.40625 10.6566 4.78906 10.6566 4.03125C10.6566 3.27344 10.0394 2.65625 9.28163 2.65625ZM9.28163 4.53125C9.00507 4.53125 8.78163 4.30781 8.78163 4.03125C8.78163 3.75469 9.00507 3.53125 9.28163 3.53125C9.55819 3.53125 9.78163 3.75469 9.78163 4.03125C9.78163 4.30781 9.55819 4.53125 9.28163 4.53125Z"
                                                        fill="#5AC515"/>
                                                </svg>
                                                <label class="pt-3">{{$supplier->econhunt_deal}}% Ecomhunt Deal</label>
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
                                            <th>{{$supplier->sourcing}}</th>
                                            <td>{{$supplier->econhunt_deal}}% lower /Aliexpress</td>
                                            <td>{{$supplier->processing}}</td>
                                            <td>{{$supplier->special_line}}</td>
                                            <td>{{$supplier->branding}}</td>
                                            <td>{{$supplier->couriers}}</td>
                                            <td>{{$supplier->support}}</td>
                                            <td>{{$supplier->return_policy}}</td>
                                            <td>{{$supplier->pod}}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            @endforeach
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
                    <div class="card text-white card-color mb-3 mt-3">
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
