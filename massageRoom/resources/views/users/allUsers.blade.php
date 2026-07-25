@extends('layouts.user_layout')

@section('Users')

  @if(session('success'))
  <div class="modal fade" id="successModal" tabindex="-1">
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header bg-success text-white">
           <h5 class="modal-title">Success</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
         </div>

         <div class="modal-body">
           {{ session('success')}}
         </div>

         <div class="modal-footer">
           <button class="btn btn-secondary" data-bs-dismiss="modal">Ok</button> 
         </div>
       </div>
     </div>
    
  </div>
  @endif
   
  @if($errors->any())
   <div class="modal fade" id="errorModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title">Error</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <ul class="mb-0">
             @foreach($errors->all() as $error)
                <li>{{ $error}}</li>
             @endforeach
          </ul>
        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
   </div>
  @endif

  <div class="container p-3">
  	<div class="pt-4 col-6">
      <h2 class="text-primary text-center">All Users</h2>
    </div>

  	<br><br>
  	@if($users->count())
  		<table class="table-bordered table-striped" style="width:800px">
  			<thead>
  			  <tr>
  				<th>
  					Name
  				</th>
  				<th>
  					Surname
  				</th>
  				<th>
  					Email
  				</th>
  				<th>
  					Phone
  				</th>
  				<th class="text-center">
  					Actions
  				</th>
  			  </tr>
  			</thead>


  			<tbody>
  				@foreach($users as $user)
  				 <tr>
                   	<td>{{$user->name}}</td>
                   	<td>{{$user->surname}}</td>
                   	<td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                   {{--  <td class="text-center">
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                    </td> --}}
                    <td class="text-center">
                      <div class="btn-group" role="group">
                        <button type="button" 
                        class="btn btn-info btn-sm edit-btn"
                        data-id = "{{$user->id}}"
                        data-name = "{{$user->name}}"
                        data-surname = "{{$user->surname}}"
                        data-email = "{{$user->email}}"
                        data-phone = "{{$user->phone}}"
                        >
                          Edit
                        </button>
                        <button onclick="deleteUser({{$user->id}})" class="btn btn-danger btn-sm">
                          Delete
                        </button>
                      </div>
                      
                    </td>
                  </tr>
  				@endforeach
  			</tbody>
  		</table>

      @include('users.editUserModal')
      <br>
      <a href="{{route('admin.layout')}}" type="button" class="btn btn-success">Home Page</a>
  	@else
        <p class="text-muted mt-4">No users found</p>
    @endif
  </div>

@endsection

@section('scripts')
<script>
  $.ajaxSetup({
    headers:{
      'X-CSRF-TOKEN': document
       .querySelector('meta[name="csrf-token"]')
       .getAttribute('content')
    } 
  });

  $(document).on('click','.edit-btn',function() {
    $('#edit-id').val($(this).data('id'));
    $('#edit-name').val($(this).data('name'));
    $('#edit-surname').val($(this).data('surname'));
    $('#edit-email').val($(this).data('email'));
    $('#edit-phone').val($(this).data('phone'));

    new bootstrap.Modal('#editUserModal').show();
    });

  $('#saveEditBtn').on('click',function() {
    const id = $('#edit-id').val();
  

  $.ajax({
    url: `/users/${id}`,
    type:'PUT',
    data: {
      name: $('#edit-name').val(),
      surname: $('#edit-surname').val(),
      email: $('#edit-email').val(),
      phone: $('#edit-phone').val()
    },
    success(){
      alert('User updated');
      location.reload();
    },
    error(xhr) {
      if (xhr.status === 422) {
        const errors = xhr.responseJSON.errors;
        let messages = '';

        for (let field in errors) {
          messages += errors[field].join('\n') + '\n';
        }

        alert(messages);
      } else {
         alert(xhr.responseJSON.message ?? 'Error');
      }
    }
  });
});


function deleteUser(id)
{
  if(!confirm('Delete user?')) return;

  $.ajax({
    url: `/users/${id}`,
    type: 'DELETE',
    success(){
       alert('User deleted');
      location.reload();
    },
      error(xhr) {
      alert(xhr.responseJSON.message ?? 'Error');
    }
  })
}

@if(session('success'))
  document.addEventListener('DOMContentLoaded', function(){
    var modal = new bootstrap.Modal(document.getElementById('successModal'));
    modal.show();
  });
@endif

@if($errors->any())
  document.addEventListener('DOMContentLoaded', function(){
    var modal = new bootstrap.Modal(document.getElementById('errorModal'));
    modal.show();
  });
@endif
</script>
@endsection
