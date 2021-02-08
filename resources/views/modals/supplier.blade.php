<div class="modal fade" id="modal-supplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-background">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    <svg width="24" height="24" viewBox="0 0 24 24"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <g id="business_24px">
                            <path id="icon/communication/business_24px" fill-rule="evenodd"
                                  clip-rule="evenodd"
                                  d="M12 7H22V21H2V3H12V7ZM4 19H6V17H4V19ZM6 15H4V13H6V15ZM4 11H6V9H4V11ZM6 7H4V5H6V7ZM8 19H10V17H8V19ZM10 15H8V13H10V15ZM8 11H10V9H8V11ZM10 7H8V5H10V7ZM20 19V9H12V11H14V13H12V15H14V17H12V19H20ZM18 11H16V13H18V11ZM16 15H18V17H16V15Z"
                                  fill="white" fill-opacity="0.54"/>
                        </g>
                    </svg>
                    Apply To Be A Supplier
                </h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="supplierForm" action="">
                    @csrf
                    <div class="form-group">
                        <i class="icon-feather-mail"></i>
                        <label>NAME </label>
                        <input id="nameLoginInput" type="text"
                               class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                               value="{{ old('email') }}" placeholder="Enter your name" required autocomplete="name">
                        <span class="invalid-feedback" role="alert" id="NameError">
                            <strong style="color: red"></strong>
                        </span>
                    </div>
                    <div class="form-group">
                        <i class="icon-feather-mail"></i>
                        <label>EMAIL </label>
                        <input id="emailLoginInput" type="email"
                               class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" placeholder="Enter your Email Address" required
                               autocomplete="email">
                        <span class="invalid-feedback" role="alert" id="emailError">
                            <strong style="color: red"></strong>
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">INDUSTRY</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option disabled>Which industry do you belong to?</option>
                            <option>INDUSTERY 1</option>
                            <option>INDUSTERY 2</option>
                            <option>INDUSTERY 3</option>
                            <option>INDUSTERY 4</option>
                            <option>INDUSTERY 5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">MESSAGE</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                  placeholder="Enter your Email Address"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn  btn-lg btn-block buttonGlowGreen">APPLY NOW</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
