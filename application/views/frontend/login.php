<link rel="stylesheet" href="<?php echo base_url()?>assets/css/login.css">
</head>

<?php $this->load->view('frontend/template/login_nav')?>

<style>
.signup_main{
    background: url(assets/img/login_bg.jpg);
       
        height: 100%;
        width: 100%;
        background-size: 100% 100%;
}
.signup_main .card .signup_head{
    margin:0rem !important;
}
.signup_main .card form{
    margin-top:0rem;
}
.forgot{
    float:right !important;
}
@media only screen and (max-width: 600px){
    .signup_main .card{
        background:white !important;
        padding:1rem !important;
        box-shadow:0px 4px 7px -2px rgb(0 0 0 / 20%) !important;
        margin:4rem 0rem !important;
    }
    
}
</style>


<div class="signup_main">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-5">
                <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
        }
        ?>
                    <div class="card">
                        <div class="signup_head">
                            
                            <h2>Login</h2>
                        </div>
                        
                        
                        

                        
                        <form action="<?php echo base_url()?>frontend/login/login" method="POST">
                         
                    
                         
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Enter Your Email">
                                <label for="">Password</label>
                                <input type="password" name="password" placeholder="Enter Your Password">
                                <p>New User? <a href="<?php echo base_url()?>register">Signup</a> <span class="forgot"><a href="<?php echo base_url()?>forget_password">Forgot password</a></span></p>
                        
                                <button id="login_butt">Login</button>
                            </form>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>