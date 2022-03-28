<link href="<?php echo base_url(); ?>admin/assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>admin/assets/css/core.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>


<style type="text/css">
  a.edit {
    display: none;
  }


  .btn-group,
  .btn-group-vertical {
    float: right;
  }

  .btn {
    color: #4e73df;
  }

  #lowinventory_filter label {
    color: grey;
    font-size: 15px;
  }

  #lowinventory_filter input[type=search] {
    border: 1px solid grey;
    outline: none;
    padding: 5px;
    font-size: 15px;
    margin-right: 5px;
  }

  .buu {
    width: 15rem;
    color: white !important;
    background-color: rgb(239, 69, 84);
    border: none;
    outline: none !important;
    padding-top: 1rem;
    padding-bottom: 1rem;
    font-size: 14px;
    margin-bottom: 1rem;
  }

  img {
    width: 70px;
    height: 70px;
  }
</style>

<div class="all_post">
  <div class="container">
    <h3>Join deal Data</h3>
    <hr>

    <?php
    if ($this->session->flashdata('success')) {
      echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
    } else if ($this->session->flashdata('error')) {
      echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
    }


    ?>
    

      <div class="row">
        <div class="col-md-12">

          <div class="card-box table-responsive">

            <table id="lowinventory" data-order='[[ 0, "desc" ]]' style="width:100%" class="table table-striped table-bordered table_shop_custom display">
              <thead>
                <tr>

                  <th>Sr. No.</th>
                  <th>Customer Name</th>
                  <th>Customer email</th>
                  <th>Customer Number</th>
                  <th>Offer Details</th>
                  <th>Product Origin</th>
                  <th>Offer Price</th>
                  <th>Company Name</th>
                  <th>Product</th>
                  <th>Action</th>

                </tr>

              </thead>
              <tbody>
                <?php foreach ($list as $value) { ?>
                  <tr>
                      <td><?php echo $value['id']; ?></td>
                        <?php foreach($user as $val){if($val['email'] == $value['cutomer_email']){?>
                        
                      <td><?php echo $val['name']; ?></td>
                      <td><?php echo $val['email']; ?></td>
                      <td><?php echo $val['number']; ?></td>
                      <?php }}?>
                      <td><?php echo $value['offer_details']; ?></td>
                      <td><?php echo $value['product_origin']; ?></td>
                      <td><?php echo $value['offer_price']; ?></td>
                      <td><?php echo $value['company_name']; ?></td>
                      <td><a href="<?php echo base_url()?>join-this-deal/<?php echo $value['product_id']; ?>" target="_blank">View Product</a></td>
                    
                      <td><a class="delete_sliders" data-id="<?php echo $value['id']?>"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    </form>
                  </tr>

                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

  </div>
</div>






<!--Delete-->

<!--Delete-->

<div id="deletePurchaseModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <?php echo form_open(base_url('admin/joindealdata/deletecontactdetail'), array('method' => 'post')); ?>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
        <h4 class="modal-title">Delete Join deal Data</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" class="deletesliderId" name="deletesliderId" />
            <h4><b>Do you really want to Delete this  Data ?</b></h4>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-info" name="deleteslider" value="Delete">
      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>


<script>
  $(document).ready(function() {
    $('#lowinventory').DataTable({
     
    });


    $(document).on('click', '.delete_sliders', function() {

      $('.deletesliderId').val($(this).attr('data-id'));
      $('#deletePurchaseModal').modal('show');

    });

  });
</script>