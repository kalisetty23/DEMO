<div class="container" style="padding-top: 20px;">
	<div class="card" style="max-width: 500px; margin: auto">
		<div class="card-header text-center">
			<b>REGISTER<b>
		</div>
		 <div class="card-body">
		 	<div id="registerAlert"></div>
		 	<form id="registerForm">
			 	<div class="form-group">
				 	<label>UserName</label>
					 <input type="text" name="username" class="form-control"> 
				 </div>

				 <div class="form-group">
				 	<label>Password</label>
					 <input type="password" name="password" class="form-control"> 
				 </div>

				 <div class="form-group">
				 	<label>FirstName</label>
					 <input type="text" name="firstname" class="form-control"> 
				 </div>

				 <div class="form-group">
				 	<label>MiddleName</label>
					 <input type="text" name="middlename" class="form-control"> 
				 </div>

				 <div class="form-group">
				 	<label>LastName</label>
					 <input type="text" name="lastname" class="form-control"> 
				 </div>
				 
				 <div class="form-group">
				 	<button type="submit" class="btn btn-primary btn-block">Register</button>
				 </div>
			 </form>
		 </div>
	</div> 
</div>


<script>
	var base_url = '<?= base_url() ?>';
	$('#registerForm').on('submit', function(e){
		e.preventDefault();
		$.ajax({
			url: base_url + 'action/user/register',
			type: 'POST',
			data: $(this).serialize(),
			datatype: 'json',
			success: function(respData)
			{
					var registerAlert = '';
					if (respData.isRegistered == 1)
					{
						registerAlert = '<div class="alert alert-success">Successfully Registered!</div>';
					}
					else
					{
						registerAlert = '<div class="alert alert-danger">Registration failed</div>';
					}
					$('#registerAlert').html(registerAlert);
			}


		});

	});

</script>
