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
                            <img src="assets/img/register-stars.svg" alt="">
                            <h2>Quick Signup</h2>
                        </div>
                        
                        <form action="<?php echo base_url()?>frontend/signup/create_user" method="POST">
                            <label for="">Name</label>
                            <input type="text" name="name" placeholder="Enter Your Name">
                            <label for="">Email</label>
                            <input type="email" name="email" placeholder="Enter Your Email">
                            <label for="">Phone</label>
                            <input type="number" name="number" placeholder="Enter Your Number">
                            <label for="">Password</label>
                            <input type="password" name="password" placeholder="Create Password">
                            <label for="">Confirm Password</label>
                            <input type="text" name="confirm_password" placeholder="Confirm Password">
                            <p>Already Have An Account? <a href="<?php echo base_url()?>signin">Login</a></p>
                            <button>Continue</button>
                        </form>
                        
                    </div>
                   
                </div>
            </div>
        </div>
    </div>