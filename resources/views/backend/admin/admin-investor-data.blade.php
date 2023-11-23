@include('navbar')

<div class="container-fluid">
  <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">User Investor - Data</h5>
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
              @foreach ($users as $user)    

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
                        <a href="{{ route('view-investor-data', ['username' => $user->username]) }}"> <span class="badge bg-secondary rounded-3 fw-semibold">View</span></a>
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
@include('footer')