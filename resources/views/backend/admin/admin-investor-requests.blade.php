@include('navbar')

<div class="container-fluid">
    <div class="col-lg-12 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Investor Request </h5>
                <div class="table-responsive">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>

                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Name</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Email Id</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Contact No.</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Skpye Id</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Address</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Country</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Investment Value</h6>
                                </th>
                                <!-- <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Documents</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Date of Request</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Time of Request</h6>
                </th> -->
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">View</h6>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $reversedInvestorRequest = array_reverse($InvestorRequest);
                            @endphp
                            @foreach($reversedInvestorRequest as $RequestData)
                                @if ($RequestData->broker_per == null)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">{{ $RequestData->full_name }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <p class="mb-0 fw-normal">{{ $RequestData->email }}</p>
                                        </td>

                                        <td class="border-bottom-0">
                                            <h6 class="fw-normal mb-0">{{ $RequestData->phone }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-normal mb-0">{{ $RequestData->skypeid }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-normal mb-0">{{ $RequestData->address }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-normal mb-0">{{ $RequestData->country }}</h6>
                                        </td>

                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0 fs-4">{{ $RequestData->inst_amt }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <div class="d-flex align-items-center gap-2">
                                                <a href="{{url('/user-request-'. $RequestData->id)}}"> <span class="badge bg-secondary rounded-3 fw-semibold">View</span></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- --------view Request Model --> --}}

<div class="modal fade investor-view-model" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title ">Login</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">{{ session('error') }}</div>
                @endif
                <form action="{{ route('dashboard') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="username" id="recipient-name"
                            placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="recipient-password"
                            placeholder="Password">
                    </div>
                    <button type="submit" class="button button-icon bt-lg iq-mr-15 my-2">Sign In</button>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-sm-6 text-end">
                            <a href="javascript:void(0)" class="iq-font-yellow">Forgot Password</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer text-center">
                <div> Don't Have an Account? <a data-bs-toggle="modal" data-bs-target=".iq-register"
                        data-bs-whatever="@fat" data-bs-dismiss="modal" aria-label="Close" class="iq-font-yellow"
                        style="cursor: pointer">Register Now</a></div>
                <ul class="iq-media-blog iq-mt-20">
                    <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                    <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                    <li><a href="# "><i class="fa fa-google "></i></a></li>
                    <li><a href="# "><i class="fa fa-github "></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@include('footer')
