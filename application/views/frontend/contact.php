<link rel="stylesheet" href="<?php echo base_url()?>assets/css/contact.css">
</head>

<?php $this->load->view('frontend/template/navbar')?>

<div class="contact_top">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Let's connect With Experts</p>
        </div>
    </div>

    <main class="contact_us_new">
        <div class="container ">
       
            <div class="container px-3 ">
                <div class="row justify-content-center  contactus">
                    <div class="col-md-12 mob-ded">
                    <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
        }
        ?>
                        <div class="row justify-content-around">
                            <div class="col-md-7">
                                <!-- Form  -->
                                <form action="<?php echo base_url()?>frontend/contact/insert_data" method="post">
                                    <input class="contact_us_input" type="text" name="name"
                                        placeholder="Enter Your Name">
                                    <input class="contact_us_input" type="email" name="email"
                                        placeholder="Enter Your Email">
                                    <input class="contact_us_input" type="number" name="mob"
                                        placeholder="Enter Contact Number">
                                    <input class="contact_us_input" type="text" name="sub" placeholder="Enter Subject">
                                    <textarea class="contact_us_input" name="msg" placeholder="Enter Message For us"
                                        cols="30" rows="5"></textarea>
                                    <button class="contact_submit">Submit</button>
                                </form>
                            </div>
                            <div class="col-md-5  cont">
                                <h1>If you prefer a more tangible form of communication we're here:</h1>
                                <hr class="contact_hosri">
                                <div class="flex">
                                    <div class="left">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="right">
                                        <p class="subbb">Reach us on our</p>
                                        <h2 class="h2_head base_heading_h2">Office</h2>
                                        <p class="subbb">66/114 Heera Path Mansarovar Behind Dhanwantri Hospital, Jaipur. Rajasthan. 302020.</p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="left">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <div class="right">
                                        <p class="subbb">Give us a</p>
                                        <h2 class="h2_head base_heading_h2">Call</h2>
                                        <p class="subbb">+91 8050005101</p>
                                        <p class="subbb">+91 8963006098</p>
                                    </div>
                                </div>
                                <div class="flex">
                                    <div class="left">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <div class="right">
                                        <p class="subbb">Drop On</p>
                                        <h2 class="h2_head base_heading_h2">Email</h2>
                                        <p class="subbb">viren.dogman@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="spacer_m"></div>



            <!-- End Main -->

    </main>