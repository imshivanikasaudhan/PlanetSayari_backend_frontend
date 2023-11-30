@include ('navbar')
<div class="container-fluid">
  <!--  Row 1 -->
  <div class="row">
    {{-- <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">Sales Overview</h5>
            </div>
            <div>
              <select class="form-select">
                <option value="1">March 2023</option>
                <option value="2">April 2023</option>
                <option value="3">May 2023</option>
                <option value="4">June 2023</option>
              </select>
            </div>
          </div>
          <div id="chart"></div>
        </div>
      </div>
    </div> --}}
    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-4">
          <div class="card overflow-hidden bg-secondary bg-opacity-75">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold text-white">Total Number Users</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="fw-semibold mb-3 text-white">{{$totalUsers}}</h4>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <a href="/user-investor-data">
            <div class="card overflow-hidden bg-secondary bg-opacity-25">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Total Number of Investor</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3">{{$totalInvestor}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-center">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="/user-broker-data">
            <div class="card overflow-hidden bg-secondary bg-opacity-25">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Total Number of Brokers</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3">{{$totalBroker}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-center">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <div class="card overflow-hidden bg-info bg-opacity-50">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">Total Deal Request</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="fw-semibold mb-3">{{$totalDeal}}</h4>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <a href="/user-investor-request">
            <div class="card overflow-hidden bg-info bg-opacity-25">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Total Investor Request</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3">{{$totalInvestorDeal}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-center">
                    </div>
                  </div>
                </div>
              </div>
            </div></a>
        </div>
        <div class="col-lg-4">
          <a href="/user-broker-request">
            <div class="card overflow-hidden bg-info bg-opacity-25">
              <div class="card-body p-4">
                <h5 class="card-title mb-9 fw-semibold">Total Brokers Request</h5>
                <div class="row align-items-center">
                  <div class="col-8">
                    <h4 class="fw-semibold mb-3">{{$totalBrokerDeal}}</h4>
                  </div>
                  <div class="col-4">
                    <div class="d-flex justify-content-center">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <div class="card overflow-hidden bg-danger bg-opacity-50">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold  text-white">Total Request Pending</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="fw-semibold mb-3  text-white">{{$totalDealPending}}</h4>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
         <a href="/admin-user-query">
          <div class="card overflow-hidden bg-danger bg-opacity-25">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">Total Contact Queries</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="fw-semibold mb-3">{{$totalContactQuery}}</h4>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
         </a>
        </div>
    </div>
  </div>

  {{-- user Investor Table --}}
  <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <div class="table_top_bar d-flex justify-content-between">
          <h5 class="card-title fw-semibold mb-4 ">User Investor - Data </h5>
          <h5><a href="/user-investor-data ">View All</a></h5>
        </div>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">User Name</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Full Name</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Email Id</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Mobile No.</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Gender</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Country</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">View</h6>
                </th>
              </tr>
            </thead>
            <tbody>
              @if($usersInvestor->isNotEmpty())
                {{-- @php 
                      $usersInvestor = array_reverse($usersInvestor);
                @endphp --}}
                 @foreach($usersInvestor as $user)
                 @if ($user->user_type ==1)
                  <tr>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-1">{{ $user->username }}</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-normal mb-1">{{ $user->full_name }}</h6>
                    </td>
                    <td class="border-bottom-0">
                      <p class="mb-0 fw-normal">{{ $user->email }}</p>
                    </td>
    
                    <td class="border-bottom-0">
                      <h6 class="fw-normal mb-0">{{ $user->phone }}</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">{{ $user->gender }}</h6>
                    </td>
                    <td class="border-bottom-0">
                      <h6 class="fw-semibold mb-0 fs-4">{{ $user->country }}</h6>
                    </td>
                    {{-- <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        <a href="{{url('view-investor-data/'. $user->username) }}"> <span class="badge bg-secondary rounded-3 fw-semibold">View</span></a>
                      </div>
                    </td> --}}
                    <td class="border-bottom-0">
                      <div class="d-flex align-items-center gap-2">
                        {{-- <a href="{{url('view-investor-data/'. $user->username) }}"> <span class="badge bg-secondary rounded-3 fw-semibold">View</span></a> --}}
                        <a href="{{url('/User-'.$user->id)}}"> <span class="badge bg-secondary rounded-3 fw-semibold">View</span></a>
                      </div>
                  </td>
                  </tr>
                @endif                         
              
              @endforeach
              @else
                <tr>
                    <td colspan="10">Record Not Found</td>
                </tr>
                @endif
            </tbody>
          </table>
        </div>
        <div class="mt-3">
          {{ $usersInvestor->links()}}
      </div>
      </div>
    </div>
  </div>

  {{-- user Broker Table --}}
  <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <div class="table_top_bar d-flex justify-content-between">
          <h5 class="card-title fw-semibold mb-4">User Broker - Data</h5>
          <h5><a href="/user-broker-data ">View All</a></h5>
        </div>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">User Name</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Full Name</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Email Id</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Mobile No.</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Gender</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Country</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">View</h6>
                </th>
              </tr>
            </thead>
            <tbody>
              @if($usersBroker->isNotEmpty())
              {{-- @php 
              $usersBroker = array_reverse($usersBroker);
              @endphp --}}
              @foreach($usersBroker as $user)
         @if ($user->user_type ==0)
                <tr>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-1">{{ $user->username }}</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-normal mb-1">{{ $user->full_name }}</h6>
                  </td>
                  <td class="border-bottom-0">
                    <p class="mb-0 fw-normal">{{ $user->email }}</p>
                  </td>
  
                  <td class="border-bottom-0">
                    <h6 class="fw-normal mb-0">{{ $user->phone }}</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">{{ $user->gender }}</h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4">India</h6>
                  </td>
                  <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                      <a href="{{url('/User-'.$user->id)}}"> <span class="badge bg-secondary rounded-3 fw-semibold">View</span></a>
                    </div>
                  </td>
                </tr>
              @endif                         
              
              @endforeach
              @else
                <tr>
                    <td colspan="10">Record Not Found</td>
                </tr>
                @endif
            </tbody>
          </table>
        </div>
        <div class="mt-3">
          {{ $usersBroker->links()}}
      </div>
      </div>
    </div>
  </div>

  <!-- ======footer =========== -->
  <div class="py-6 px-6 text-center">
    <p class="mb-0 fs-4">Design and Developed by <a href="https://www.avtarspace.com">Avtar Space Technology</a></p>
  </div>
  @include('footer')
  