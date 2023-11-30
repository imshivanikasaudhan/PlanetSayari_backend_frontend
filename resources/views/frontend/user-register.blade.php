@section('title', 'Planet Syari | User Register')
@include ('components/header')
<style>
    .register_card{
        padding-top: 5rem !important;
    }
</style>

<div class="container">
    <div class="row">

        <h2 class="text-center mt-5">Sign Up</h2>
    </div>
    <div class="row p-5 rounded register_card" >
        <div class="col-lg-6 ">
           <img src="images\bg\sayari-img-1.jpg" alt=""style="width:100%">
        </div>
        <div class="col-lg-6">
            <div class="">
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                    @endif
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" class="form-control rounded" name="username" id="recipient-username"
                                placeholder="User Name" value="{{ old('username') }}" required>
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input type="email" class="form-control rounded" id="recipient-email" placeholder="Email"
                                name="email" required>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <select class="form-select rounded" aria-label="Default select example" name="user_type" required>
                                <option value="">Register As</option>
                                <option value="0">Broker</option>
                                <option value="1">Investor</option>
                            </select>
                            @error('user_type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control rounded @error('password') is-invalid @enderror"
                                id="password" placeholder="Password" name="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <input type="password" class="form-control rounded @error('password') is-invalid @enderror"
                                id="cpassword" placeholder="Confirm Password" name="password_confirmation" required>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" required>I Agree to the Terms and
                                Conditions</label>
                        </div>
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book.</p>
                        {{-- <a class="button iq-mtb-10" href="javascript:void(0)">Sign Up</a> --}}
                        <button type="submit" class="button button-icon bt-lg iq-mr-15 mb-2">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>

  <!--=========Register=========-->
<div class="modal fade iq-register" tabindex="-1" role="dialog" aria-hidden="true" id="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title">Register</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">{{ session('success') }}</div>
                @endif
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" class="form-control" name="username" id="recipient-username"
                            placeholder="User Name" value="{{ old('username') }}" required>
                        @error('username')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" class="form-control" id="recipient-email" placeholder="Email"
                            name="email" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-select" aria-label="Default select example" name="user_type" required>
                            <option value="">Register As</option>
                            <option value="0">Broker</option>
                            <option value="1">Investor</option>
                        </select>
                        @error('user_type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password" name="password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="cpassword" placeholder="Confirm Password" name="password_confirmation" required>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" required>I Agree to the Terms and
                            Conditions</label>
                    </div>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</p>
                    {{-- <a class="button iq-mtb-10" href="javascript:void(0)">Sign Up</a> --}}
                    <button type="submit" class="button button-icon bt-lg iq-mr-15 mb-2">Sign Up</button>
                </form>
            </div>
            <div class="modal-footer text-center">
                <div> Already Have an Account? <a class="iq-font-yellow" data-bs-toggle="modal"
                        data-bs-dismiss="modal" aria-label="Close" data-bs-target=".iq-login"
                        data-bs-whatever="@mdo" style="cursor: pointer">Login</a></div>
                {{-- <ul class="iq-media-blog iq-mt-20">
                    <li><a href="# "><i class="fa fa-twitter "></i></a></li>
                    <li><a href="# "><i class="fa fa-facebook "></i></a></li>
                    <li><a href="# "><i class="fa fa-google "></i></a></li>
                    <li><a href="# "><i class="fa fa-github "></i></a></li>
                </ul> --}}
            </div>
        </div>
    </div>
</div>
<!--=================================
Register -->

@include('components/footer');