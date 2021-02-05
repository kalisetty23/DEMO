<nav class="navbar navbar-expand-lg navbar-light bg-light">
	
	<a class="navbar-brand" href="<?= base_url()?>">DEMO</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  		<ul class="navbar-nav mr-auto">
		 
		  <?php

                if ($this->session->userdata('logged_in'))
                {
                    ?>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/logout') ?>">Logout</a>
            </li>      

                    <?php
                }
                else
                {
                    ?>
           
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/register') ?>">Register</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/login') ?>">Login</a>
            </li>
                    <?php
                }

            ?>

        </ul>
    </div>

</nav>
