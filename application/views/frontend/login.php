<link rel="stylesheet" href="<?php echo base_url()?>assets/css/login.css">
</head>

<?php $this->load->view('frontend/template/navbar')?>

<div class="signup_main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
        }
        ?>
                    <div class="card">
                        <div class="signup_head">
                            <img src="assets/img/login-stars.svg" alt="">
                            <h2>Login</h2>
                        </div>
                        
                        
                        

                        <!--div class="social_button">
                            <div class="left">
                                <button onclick="myPhone()" id="phoneback" class="phone_num">Phone Number</button>
                            </div>
                            <div class="right">
                                <button onclick="myEmail()" id="emailback" class="emial">Email Address</button>
                            </div>
                        </div-->
                        <form action="<?php echo base_url()?>frontend/login/login" method="POST">
                         
                    
                         
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Enter Your Email">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Enter Your Password">
                                <p>New User? <a href="<?php echo base_url()?>register">Signup</a></p><span class="forgot"><a href="">Forgot password</a></span>
                        
                                <button id="login_butt">Login</button>
                            </form>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>