@include('components/navbar')

<div class="container-fluid">
  <div class="">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Need Any Help?</h5>
      <div class="card">
        <div class="card-body">
          @if(session('Success'))
             <div class="alert alert-success">{{session('Success')}}</div>
          @endif
          <form action="help-contact" method="POST">
            @csrf
            <input type="hidden" name="user_id" class="form-control" id="Inputusername" aria-describedby="emailHelp" value="{{Auth::user()->id}}">
            <div class="mb-3">
              <label for="Contact_Name" class="form-label">Enter Your Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="Contact_Name" aria-describedby="nameHelp"
                placeholder="Your Full Name" name="name" value="{{Auth::user()->full_name}}">
              @error('name')
              <div class="text-danger">{{$message}}</div>                              
              @enderror
            </div>
            <div class="mb-3">
              <label for="Contact_email" class="form-label">Email Address <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="Contact_email" aria-describedby="emailHelp"
                placeholder="examle@gmail.com" name="email" value="{{Auth::user()->email}}">
              @error('email')
                <div class="text-danger">{{$message}}</div>                  
              @enderror
              {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
              <label for="Contact_number" class="form-label">Enter Contact No. <span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="Contact_number" aria-describedby="contactHelp"
                placeholder="+91 189462030" name="phone" value="{{Auth::user()->phone}}">
              @error('phone')
                  <div class="text-danger">{{$message}}</div>
              @enderror
            </div>
            <div class="mb-5">
              <label for="Contact_Message" class="form-label">Enter Your Queries <span class="text-danger">*</span></label>
              <textarea class="form-control" name="Contact_Message" id="Contact_Message" cols="30" rows="8"
                placeholder="Type Query Message ...!">{{old('Contact_Message')}}</textarea>
              @error('Contact_Message')
                  <div class="text-danger">{{$message}}</div>
              @enderror  
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@include('footer')