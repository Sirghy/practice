<div class="modal fade" id="editUserModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			
			<div class="modal-header">
				<h5 class="modal-title">Edit User</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>

            <div class="modal-body">
            	<input type="hidden" id="edit-id">

                <div class="mb-2">
				  <label for="name">Name</label>
				  <input type="text" id="edit-name" class="form-control">
			    </div>

                <div class="mb-2">
				  <label for="surname">Surname</label>
				  <input type="text" id="edit-surname" class="form-control">
			    </div>

			    <div class="mb-2">
				  <label for="email">Email</label>
				  <input type="text" id="edit-email" class="form-control">
			    </div>

			    <div class="mb-2">
				  <label for="phone">Phone</label>
				  <input type="text" id="edit-phone" class="form-control">
			    </div>

			    <div class="modal-footer">
			    	<button class="btn btn-primary" id="saveEditBtn">Save</button>
			    </div>

            </div>

		</div>
	</div>
</div>