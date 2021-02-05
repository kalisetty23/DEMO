  
<div class="container" style="padding-top: 20px;">

<div class="card" style="max-width: 500px; margin: auto">
	
	<div class="card-body">
		<div class="form-group">
			<label> Hello Welcome</label>
			<input type="text" value="<?= $this->session->userdata('username') ?>" disabled class="form-control">
		</div>
		<div class="card-footer">
            <a href="<?= base_url('user/logout') ?>" class="btn btn-success">Logout</a>
        </div>
    </div>

</div>
