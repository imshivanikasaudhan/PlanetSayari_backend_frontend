@include ('head')

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="backend/assets/images/logos/logo_hori.svg" width="180" alt="">
                </a>
                <h2 class="text-center mb-5">Welcome Admin Register</h2>
                @if(session('error'))
                  <div class="alert alert-danger">{{session('error')}}</div>
                @endif
                <form action="{{route('admin-register')}}" method="POST">
                  @csrf
                  {{-- @method('POST') --}}
                  <input type="hidden" name="user_type" value="ps-admin">
                  <div class="mb-3">
                    <label for="InputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" name="email" value="">
                    @error('email')
                      <div class="text-danger">{{$message}}</div>                              
                    @enderror
                  </div>
                  <div class="mb-4">
                    <label for="InputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="InputPassword" name="password">
                    @error('password')
                      <div class="text-danger">{{$message}}</div>                              
                    @enderror
                  </div>
                  <div class="mb-4">
                    <label for="InputPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="InputPassword" name="cpassword">
                    @error('cpassword')
                      <div class="text-danger">{{$message}}</div>                              
                    @enderror
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div>
                    {{-- <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a> --}}
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                  {{-- <a href="{{asset('admin-dashboard')}}" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign In</a> --}}
                  <div class="d-flex align-items-center justify-content-center">
                    {{-- <p class="fs-4 mb-0 fw-bold">New to Modernize?</p>
                    <a class="text-primary fw-bold ms-2" href="./authentication-register.html">Create an account</a> --}}
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('footer')