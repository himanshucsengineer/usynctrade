
</head>
<style>
.forgot_pass{
    width:100%;
    height:auto;
    padding:4rem 0rem;
    background:#ECF0F1;
}
.main_card{
    width:100%;
    height:auto;
    padding:2rem;
    background:#ffffff;
    border:1px solid #cdcdcd;
}
.main_card input[type="email"]{
    width:100%;
    height:auto;
    padding:.8rem 1rem;
    border:1px solid #cdcdcd;
    outline:none;
    margin-bottom:1rem;
}
.main_card button{
    width:15rem;
    height:auto;
    padding:.8rem;
    border:none;
    outline:none;
    color:white;
    background-color:#20bf55;
    background-image: linear-gradient(315deg, #20bf55 0%, #01baef 74%);
}
</style>
<?php $this->load->view('frontend/template/navbar')?>


<div class="forgot_pass">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                                <div class="main_card">
                                    <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
        }
        ?>
                    <form action="<?php echo base_url()?>frontend/forgot/forgot_pass" method="post">
                        <label>Your Registerd Email</label>
                            
                        <input type="email" name="email" placeholder="Enter Your Email" required>
                        <div class="text-center">
                        <button>FORGOT PASSWORD</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>