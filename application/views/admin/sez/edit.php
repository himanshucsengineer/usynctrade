<link href="<?php echo base_url(); ?>admin/assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>admin/assets/css/core.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>


<style>
    .new-post {
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;

    }

    .new-post .box {
        width: 100%;
        height: auto;
        background-color: white;
        box-shadow: 0 3px 3px -2px rgb(0 0 0 / 40%);
        border: 1px solid #cdcdcd;
        padding-top: 2rem;
        padding-bottom: 2rem;
        padding-left: 1rem;
        padding-right: 1rem;
        margin-bottom: 2rem;
    }

    .new-post input[type="text"],
    input[type="file"],
    select,
    textarea {
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        margin-bottom: 1rem;
    }

    .new-post button {
        width: 10rem;
        height: auto;
        padding-top: .6rem;
        padding-bottom: .6rem;
        color: white;
        background-color: rgb(239, 69, 84);
        outline: none;
        border: none;
        transition: .5s;
    }

    .new-post button:hover {
        opacity: .7;

    }

    .new-post p {
        margin-top: -.5rem;
        color: #666;
        font-size: 12px;
        font-weight: 300;
        font-style: italic;
    }
</style>

<div class="new-post">
    <div class="container">
        <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
        }
        ?>
        <h3>Update Sez Industry Details</h3>
        <form method="post" action="<?php echo base_url()?>admin/sez/edit/update" enctype="multipart/form-data">
        <?php if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'ON'){
                    $url = "https://";
                }else{
                    $url = "http://";
                }
                $url.= $_SERVER['HTTP_HOST'];
                $url.= $_SERVER['REQUEST_URI'];
                
                
                
            $parts = basename($url);
            
            $rerfe = explode("=",$parts);
                
                ?>
                <?php foreach( $fetch_content as $value){ if($value['id']==$rerfe[1]){?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <label>Company Name</label>
                        <input type="text" name="name" placeholder="Enter Company Name" value="<?php echo $value['name']?>" required>
                        <label>Company Sector</label>
                        <input type="text" name="sector" placeholder="Enter Sector" value="<?php echo $value['sector']?>" required>
                        <label>Company Type</label>
                        <input type="text" name="type" value="<?php echo $value['type']?>" placeholder="Enter Type" required>
                        <label>State</label>
                        <select name="state" id="">
                            <option value="">Select State</option>
                            <?php foreach($state as $val){if($val['country_id'] == 101){?>
                                <option value="<?php echo $val['name']?>" <?php if($value['state']==$val['name']) echo 'selected="selected"'; ?>><?php echo $val['name']?></option>
                            <?php }}?>
                        </select>

                        
                        <label>Company Address</label>
                        <input type="text" name="address" placeholder="Enter address" value="<?php echo $value['address']?>" required>
                        <label>Company Link</label>
                        <input type="text" name="link" placeholder="Enter Link" value="<?php echo $value['link']?>" required>
                        
                        <input type="hidden" name="id" placeholder="Enter Course Name" value="<?php echo $value['id']?>" required>

                        <button name="formSubmit">Update</button>
                    </div>
                </div>
                <?php }}?>
        </form>
    </div>
</div>






