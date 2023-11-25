@include('navbar')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="main-body my-3">
        <div class="row gutters-sm">
            <div class="col-lg-4 col-md-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 d-flex flex-column align-items-center text-center">
                                <img src="\backend\assets\images\profile\user-1.jpg" alt="Customer" width="150"
                                    height="150" class="rounded-circle">
                                <div class="mt-3">
                                    <h4 class="text fs-10">
                                        {{$requestId->username}}</h4>
                                        </h4>
                                    
                                    <button type="submit" class="btn rounded-pill btn-info" data-bs-toggle="modal"
                                        data-bs-target="#EditModal">Edit
                                        Profile</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="card mb-3 p-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8">
                                
                                <h5 style="color:black">
                                    @if ($requestId->inst_amt == null)
                                        Broker
                                    @else
                                        Investor
                                    @endif Details
                                </h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="p-3 ">
                                <div class="row border rounded p-3 mb-3">
                                    <div class="col-sm-3 mb-2">
                                        <h6 class="mb-0">Full Name</Address>
                                        </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary mb-2">
                                        {{$requestId->full_name}}</div>
                                    <div class="col-sm-3 mb-2">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary mb-2">
                                        {{$requestId->email}}</div>
                                    <div class="col-sm-3 mb-2">
                                        <h6 class="mb-0">Contact No</Address>
                                        </h6>
                                    </div>                                    
                                    <div class="col-sm-9 text-secondary mb-2">
                                        {{$requestId->gender}} </div>
                                    <div class="col-sm-3 mb-2">
                                        <h6 class="mb-0">Skype</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary mb-2">
                                        {{$requestId->skype}} </div>
                                    <div class="col-sm-3 mb-2">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary mb-2">
                                        {{$requestId->address}} </div>
                                    <div class="col-sm-3 mb-2">
                                        <h6 class="mb-0">Country</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary mb-2">
                                        {{$requestId->country}} </div>
                                    <div class="col-sm-3 mb-2">
                                        <h6 class="mb-0">
                                            @if ($requestId->inst_amt == null)
                                                Broker
                                            @else
                                                Investor Amount
                                            @endif
                                        </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary mb-2">
                                        @if ($requestId->inst_amt == null)
                                            {{$requestId->broker_per}}
                                        @else
                                            {{$requestId->inst_amt}}
                                        @endif
                                    </div>                                        
                                </div>
                            </div>
                        </div>                       

                    </div>
                </div>
            </div>
            
            <!-- Content wrapper -->
        </div>

        @include('footer')
