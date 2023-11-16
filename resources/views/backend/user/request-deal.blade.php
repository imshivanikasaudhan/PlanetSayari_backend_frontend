@include ('components/navbar')

<div class="container-fluid">
  <div class="">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Request Investment Deal</h5>
      <div class="card">
        <div class="card-body">
          <form method="POST" action="request-deal">
            @csrf
            <div class="mb-3">
              <label for="Inputusername" class="form-label">Full Name</label>
              <input type="text" name="name" class="form-control" id="Inputusername" aria-describedby="emailHelp" value="{{old('name')}}">
              {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
              @error('name')
                  <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="Inputuseremail" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="Inputuseremail" value="{{old('email')}}">
              @error('email')
                  <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="Inputusernumber" class="form-label">Contact No.</label>
              <input type="integer" name="mobile" class="form-control" id="Inputusernumber" minlength="9"
                maxlength="12" value="{{old('mobile')}}">
              @error('mobile')
                  <div class="text-danger">{{$message}}</div>
              @enderror  
            </div>
            <div class="mb-3">
              <label for="Inputuserskyp" class="form-label">Skype ID</label>
              <input type="text" name="skypid" class="form-control" id="Inputuserskyp" value="{{old('skypid')}}">
              @error('skypid')
                  <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="InputContact_Message" class="form-label">Full Address</label>
              <textarea class="form-control" name="address" id="InputContact_Message" rows="3" placeholder="Type Full Address ..." spellcheck="false">{{old('address')}}</textarea>
            @error('address')
                <div class="text-danger">{{$message}}</div>
            @enderror
            </div>
            <div class="mb-3">
              <label for="Inputusercountry" class="form-label">Country</label>
              <input type="text" name="country" class="form-control" id="Inputusercountry" value="{{old('country')}}">
            @error('country')
                <div class="text-danger">{{$message}}</div>
            @enderror  
            </div>
            @if (Auth::user()->user_type == 1)
              <div class="mb-3">
                {{-- <label for="Inputuserinvestor" class="form-label">Invester Amount</label>
                <input type="integer" name="Investers" class="form-control" id="Inputuserinvestor"> --}}
                <label for="InputBudget" class="form-label">Invester Amount : </label>
                <input type="text" id="put" placeholder="Example  :   $2000 Million" class="form-control mb-4">
                <input type="range" min="1000" max="500000" value="1000" name="investment" id="get" class="form-range" onchange="budgetValue()" onmousemove="budgetValue()" required>
                @error('investment')
                    <div class="text-danger">{{$message}}</div>
                @enderror
              </div>
            @else
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Broker Percentage</label>
                <input type="integer" name="broker" class="form-control" id="exampleInputPassword1" placeholder="5%" value="5%"
                  disabled>
              </div>
            @endif            
            
            <div class="mb-3 form-check">
              <!-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                      </div> -->
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <button type="submit" class="btn btn-primary">Request Deal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function budgetValue() {
      var get = document.getElementById("get").value;
      get = '$ ' + get + ' Million';
      document.getElementById('put').value = get;
  }
</script>
@include ('footer')