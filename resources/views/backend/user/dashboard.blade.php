@include ('components/navbar')

<div class="container-fluid">
  <!--  Row 1 -->
  <div class="row">
    <div class="col-lg-4 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-12 col-md-6 d-flex flex-column align-items-center text-center">
              @if (Auth::user()->image == null)
              <img src="backend\assets\images\profile\user-1.jpg"
                alt="@if (Auth::user()->user_type == 0) Broker @else Investor @endif" width="150" height="150"
                class="rounded-circle">
              @else
              <img src="backend\assets\images\profile\{{ Auth::user()->image }}"
                alt="@if (Auth::user()->user_type == 0) Broker @else Investor @endif" width="150" height="150"
                class="rounded-circle">
              @endif
              <div class="mt-3">
                <h4 class="text fs-10">
                  {{ Auth::user()->username }}</h4>
                <p class="text fs-15">
                  User Type : <span>
                    @if (Auth::user()->user_type == 0)
                    Broker
                    @else
                    Investor
                    @endif
                  </span> </p>
                <a href="/user-profile"><button type="button" class="btn rounded-pill btn-info">Go to
                    Profile</button></a>
              </div>
            </div>
            {{-- <div class="col-lg-12 col-md-6 my-3">
              <div class="p-3">
                <h5 class="d-flex  mb-3" style="color:black">Change Password
                </h5>
                <div class="row border  rounded p-3 " style="padding-bottom:50px !important;">
                  <div class="col-sm-6 mb-2">
                    <h6 class="mb-0">Current </h6>
                  </div>
                  <div class="col-sm-6 text-secondary mb-2">
                    xxxxxx </div>
                  <div class="col-sm-6 mb-2">
                    <h6 class="mb-0">New: </h6>
                  </div>
                  <div class="col-sm-6 text-secondary mb-2">
                    xxxxx</div>
                  <div class="col-sm-12">
                    <button type="button" class="btn rounded-pill btn-info" data-bs-toggle="modal"
                      data-bs-target="#ChangePassModal">Change Password
                    </button>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </div>  
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
          <div class="card-body ">
            <h5 class="card-title fw-semibold mb-4">Request Deal Status</h5>
            <div class="table-responsive">
              <table class="table text-nowrap mb-0 align-middle">                        
                <thead class="text-dark fs-4">
                    @if(session('status'))
                        <div class="alert alert-success">{{session('status')}}</div>
                    @endif
                    <tr>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Full Name</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Email Id</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Mobile No.</h6>
                        </th>

                        @if (Auth::user()->user_type == 1)
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Investment Value</h6>
                            </th>
                        @else
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Broker Amount</h6>
                            </th>
                        @endif
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Skype ID</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Documents</h6>
                        </th>

                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Address</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Country</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Status</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Delete</h6>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($statusDeal as $Status)
                        <tr>
                            {{-- <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">{{ $Status->id }}</h6>
                            </td> --}}
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">{{ $Status->full_name }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{ $Status->email }}</p>
                            </td>

                            <td class="border-bottom-0">
                                <h6 class="fw-normal mb-0">{{ $Status->phone }}</h6>
                            </td>
                            @if (Auth::user()->user_type == 1)
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">${{ $Status->inst_amt }} M</h6>
                                </td>
                            @else
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0 fs-4">{{ $Status->broker_per }} </h6>
                                </td>
                            @endif
                            <td class="border-bottom-0">
                                <h6 class="fw-normal mb-0">{{ $Status->skypeid }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <a href="backend/assets/images/{{ $Status->document }}" target="_blank"> <span
                                            class="badge bg-secondary rounded-3 fw-semibold">View</span></a>
                                </div>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-normal mb-0">{{ $Status->address }}</h6>
                            </td>
                            <td class="border-bottom-0">
                                <h6 class="fw-normal mb-0">{{ $Status->country }}</h6>
                            </td>
                            <td class="border-bottom-0">                                        
                                @if ($Status->status == 'pending')
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-warning rounded-3 fw-semibold">Pending</span>
                                    </div>
                               
                                @elseif($Status->status == 'processing')                                            
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-info rounded-3 fw-semibold">processing</span>
                                    </div> 
                                @else
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success rounded-3 fw-semibold">Verified</span>
                                    </div>                                           
                                @endif
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <a href="{{url('delete/'.$Status->id)}}" class="btn btn-danger">Delete</a>                                            
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
          </div>
        </div>  
      </div>
    </div>
    <!-- ======footer =========== -->
    <div class="py-6 px-6 text-center">
      <p class="mb-0 fs-4">Design and Developed by <a href="https://www.avtarspace.com">Avtar Space Technology</a></p>
    </div>



    <!-- ChangePass Modal -->
    <div class="modal fade" id="ChangePassModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="PUT" action="">
              @csrf
              <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="InputCurrentPass" class="form-label">Current
                      Password</label>
                    <input type="password" class="form-control" id="InputCurrentPass"
                      aria-describedby="InputCurrentPass" value="{{ Auth::user()->password }}">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="InputNewPass" class="form-label">New Password</label>
                    <input type="password" class="form-control" id="InputNewPass" aria-describedby="InputNewPass">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label for="InputConfirmNewPass" class="form-label">New Password
                      Confirm</label>
                    <input type="password" class="form-control" id="InputConfirmNewPass"
                      aria-describedby="InputConfirmNewPass">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn rounded-pill btn-dark" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn rounded-pill btn-info">Update
                    Password</button>
                </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    @include('footer')