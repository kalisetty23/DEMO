<div class="container" style="padding-top: 20px;">
    <div class="card" style="max-width: 500px; margin: auto">
        <div class="card-header text-center">
            <b>Login</b>
        </div>
        <div class="card-body">
            <div id="loginAlert"></div>
            <form id="loginForm">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var base_url = '<?= base_url() ?>';
    $('#loginForm').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: base_url + 'action/user/login',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(respData)
            {
                var loginAlert = '';
                if (respData.isLogin == 1)
                {
                    loginAlert = '<div class="alert alert-success">Successfully logged in!</div>';
                    setTimeout(function(){
                        window.location.href = base_url;
                    }, 1000);
                }
                else
                {
                    loginAlert = '<div class="alert alert-danger">Incorrect Username or Password!</div>';
                }
                $('#loginAlert').html(loginAlert);
            }
        }); 
    });
</script>
