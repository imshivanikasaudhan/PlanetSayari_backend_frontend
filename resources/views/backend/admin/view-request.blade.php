@include('navbar')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="main-body my-3">
        <div class="row gutters-sm">
            <div class="col-lg-12 col-md-12">
                <div class="card mb-3 p-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8">
                                
                                <h5 style="color:black">
                                    @if ($requestId->inst_amt == null)
                                        Broker
                                    @else
                                        Investor
                                    @endif Deal Request
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
                                        {{$requestId->phone}} </div>
                                    <div class="col-sm-3 mb-2">
                                        <h6 class="mb-0">Skype</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary mb-2">
                                        {{$requestId->skypeid}} </div>
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
                                            Brokerage
                                            @else
                                                Investor Amount
                                            @endif
                                        </h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary mb-2">
                                        @if ($requestId->inst_amt == null)
                                            {{$requestId->broker_per}}
                                        @else
                                            $ {{$requestId->inst_amt}} Million
                                        @endif
                                    </div>                                        
                                </div>
                            </div>
                        </div>                       
                        <div class="col">
                            <a href="backend/assets/images/{{ $requestId->document }}" target="_blank"><button type="submit" class="btn rounded-pill btn-info mx-3">View Document</button></a>
                            <button type="submit" class="btn rounded-pill btn-danger" data-bs-toggle="modal" data-bs-target="#SetStatusModal">Set Request Status</button>
                        </div>
                    </div>
                </div>
            </div>
            
             <!-- SetStatus Modal -->
             <div class="modal fade" id="SetStatusModal" tabindex="-1" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header">
                         <h5 class="modal-title" id="exampleModalLabel">Set Request Status</h5>
                         <button type="button" class="btn-close" data-bs-dismiss="modal"
                             aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                         <form method="POST">
                             <div class="row">
                                 <div class="col-lg-12">
                                     <div class="mb-3">
                                         <label for="InputCurrentPass" class="form-label">Current Status</label>
                                                <select name="inputgender" id="" class="form-control">
                                                    <option value="Pending">Pending</option>
                                                    <option value="In Touch">In Touch</option>
                                                    <option value="Completed">Completed</option>
                                                </select>
                                     </div>
                                 </div>
                         </form>
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn rounded-pill btn-dark"
                             data-bs-dismiss="modal">Cancel</button>
                         <button type="button" class="btn rounded-pill btn-success">Update Status</button>
                     </div>
                 </div>
             </div>
         </div>

            <!-- Content wrapper -->
        </div>

        @include('footer')
