@extends('layouts.user_layout')

@section('Users')
<div class="container mt-4 creator-form">

   
  <div class="card shadow-sm">
    <form method="POST" action="{{route('users.store') }}">
          @csrf          
       <div class="card-body">
                      <!--begin::Row-->
                      <div class="row g-3">
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="name" class="form-label">First name </label>
                          <input type="text" class="form-control" id="name" name="name" value="{{ old('name')}}" required>
                        </div>
                      
                        <div class="col-md-6">
                          <label for="surname" class="form-label">Last name</label>
                          <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname')}}"  required>
                        </div>
                      
                        <div class="col-md-6">
                          <label for="email" class="form-label">Email</label>
                           <div class="input-group">
                             <span class="input-group-text email-addon">@</span>
                             <input type="email" class="form-control" id="email" name="email" autocomplete="email" required >
                            </div>
                        </div>

                        <div class="col-md-6">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                         <div class="col-md-6">
                          <label for="phone" class="form-label">Phone</label>
                          <input type="tel" class="form-control" id="phone" name="phone" autocomplete="tel">
                        </div>

                        <div class="col-md-6">
                          <label for="password_confirmation" class="form-label">Confirm Password</label>
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                    
                       
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6">
                          <label for="role" class="form-label">Role</label>
                          <select class="form-select" id="role_id" name="role_id" required>
                            <option selected="" disabled="" value="">Choose role</option>
                             @foreach($roles as $role)
                             <option value="{{ $role->id}}">
                               {{ $role->role->value}}
                             </option>
                             @endforeach
                          </select>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end align-items-end gap-2">
                          <button class="btn btn-info" type="submit">Submit form</button>
                          <a href="{{route('admin.layout')}}" type="button" class="btn btn-success">Home Page</a>
                          <button class="btn btn-danger" type="reset">Reset</button>
                        </div>
                     </div>
                    </div>
                   

               {{--     <br><br><br>
                    <div class="card-footer">
                      <button class="btn btn-info" type="submit">Submit form</button>
                      <a href="{{route('admin.layout')}}" type="button" class="btn btn-success">Home Page</a>
                      <button class="btn btn-danger" type="reset">Reset</button>
                    </div> --}}
                    <!--end::Footer-->
      </form>
  </div>
</div>

@endsection