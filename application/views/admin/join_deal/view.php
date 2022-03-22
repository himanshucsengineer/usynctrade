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
    <h3>All Deals</h3>
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
                  <th>Product Name</th>
                  <th>Product Category</th>
                  <th>Destination Country</th>
                  <th>Date</th>
                  <th>Target Price</th>
                  <th>Quantity</th>
                  <th>Payment Terms</th>
                  <th>Shpping Terms</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Choose Action</th>
                  <th>Update Status</th>
                  <th>Edit</th>
                  <th>Action</th>

                </tr>

              </thead>
              <tbody>
                <?php foreach ($list as $value) { $sts = $value['status'];?>
                  <tr>
                  <form action="<?php echo base_url(); ?>admin/join_deal/view/update_status" method="post">
                  <input type="hidden" name="id" value="<?php echo $value['id']?>">
                    <td><?php echo $value['id']; ?></td>
                      <td><?php echo $value['name']; ?></td>
                      <td><?php echo $value['category']; ?></td>
                      <td><?php echo $value['destination_country']; ?></td>
                      <td><?php echo $value['date']; ?></td>
                      <td><?php echo $value['target_price']; ?></td>
                      <td><?php echo $value['quantity']; ?></td>
                      <td><?php echo $value['payment_terms']; ?></td>
                      <td><?php echo $value['shipping_terms']; ?></td>
                      <td><img src="<?php echo base_url()?>upload/join_deal/<?php echo $value['image']?>" alt=""></td>
                      <td><?php echo ($value['status'] == 0) ? "<span class='text-white badge badge-warning'>Closed</span>" : "<span class='text-white badge badge-success'>Active</span>"; ?></td>
                      <td><select name="action">
                          <option value="">Select Action</option>
                          <option value="1">Active</option>
                          <option value="0">Close</option>
                        </select></td>
                        <td><button class="btn btn-success ">Change Status</button></form></td>
                      <td><a href="<?php echo base_url()?>admin/join_deal/edit?id=<?php echo $value['id']?>">Edit</a></td>
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
    <?php echo form_open(base_url('admin/join_deal/view/deletecontactdetail'), array('method' => 'post')); ?>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
        <h4 class="modal-title">Delete Deal</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" class="deletesliderId" name="deletesliderId" />
            <h4><b>Do you really want to Delete this deal ?</b></h4>
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