@include ('components/navbar')

<div class="container-fluid">
  <div class="">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Request Investment Deal</h5>
      <div class="card">
        <div class="card-body">
          @if(session('Success'))
              <div class="alert alert-success">{{session('Success')}}</div>
          @endif
          <form method="POST" action="request-deal" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" class="form-control" id="Inputusername" aria-describedby="emailHelp" value="{{Auth::user()->id}}">
            <div class="mb-3">
              <label for="Inputusername" class="form-label">Full Name</label>
              <input type="text" name="full_name" class="form-control" id="Inputusername" aria-describedby="emailHelp" value="{{Auth::user()->full_name}}">
              {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
              @error('full_name')
                  <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="Inputuseremail" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="Inputuseremail" value="{{Auth::user()->email}}">
              @error('email')
                  <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="Inputusernumber" class="form-label">Contact No.</label>
              <input type="integer" name="phone" class="form-control" id="Inputusernumber" minlength="9"
                maxlength="12" value="{{Auth::user()->phone}}">
              @error('phone')
                  <div class="text-danger">{{$message}}</div>
              @enderror  
            </div>
            <div class="mb-3">
              <label for="Inputuserskyp" class="form-label">Skype ID</label>
              <input type="text" name="skypeid" class="form-control" id="Inputuserskyp" value="{{Auth::user()->skype}}">
              @error('skypeid')
                  <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            
            <div class="mb-3">
              <label for="InputContact_Message" class="form-label">Full Address</label>
              <textarea class="form-control" name="address" id="InputContact_Message" rows="3" placeholder="Type Full Address ..." spellcheck="false">{{Auth::user()->address}}</textarea>
            @error('address')
                <div class="text-danger">{{$message}}</div>
            @enderror
            </div>
            <div class="mb-3">
              <label for="Inputusercountry" class="form-label">Country</label>
              <input type="text" name="country" class="form-control" id="Inputusercountry" value="{{Auth::user()->country}}">
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
                <input type="range" min="1000" max="500000" value="1000" name="inst_amt" id="get" class="form-range" onchange="budgetValue()" onmousemove="budgetValue()" required>
                @error('inst_amt')
                    <div class="text-danger">{{$message}}</div>
                @enderror
              </div>
            @else
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Broker Percentage</label>
                <input type="integer" name="broker_per" class="form-control" id="exampleInputPassword1" placeholder="5%" value="5%"
                  >
                @error('broker_per')
                  <div class="text-danger">{{$message}}</div>
                @enderror  
              </div>
            @endif 
            <div class="mb-3">
              <label for="Profile-pic" class="form-label">Other Documents</label>
              <input type="file" class="form-control" name="document">
            </div>           
            
            <!-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->

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