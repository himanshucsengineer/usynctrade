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
    <h3>All Sez Industry</h3>
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
                  <th>Product Name</th>
                  <th>User Email</th>
                  <th>Shipment Port</th>
                  <th>Shipment Country</th>
                  <th>Buyer From Country 1</th>
                  <th>Buyer From Country 2</th>
                  <th>Buyer From Country 3</th>
                  <th>Buyer From Country 4</th>
                  <th>Product image</th>
                  <th>Product Size</th>
                  <th>Dispetch Time</th>
                  <th>Moq</th>
                  
                
                  <th>Payment Terms</th>
                  <th>FOB Price</th>
                  <th>CIF Price</th>
                  <th>CRF Price</th>
                  <th>Dap Price</th>
                  <th>Brand Name</th>
                  <th>Origin Place</th>
                  <th>Category</th>
                  <th>Certificates</th>
                  <th>Transaction</th>
                  <th>Selling Units</th>
                  <th>Single Gross Weight</th>
                  <th>Single package Size</th>
                  <th>Package Type</th>
                  
                  <th>Company Name</th>
                  <th>Company Country</th>
                  <th>Business Type</th>
                  <th>Establisment Year</th>
                  <th>Main Product</th>
                  <th>Factory Size</th>
                  <th>No Of Office</th>
                  <th>Company Certificates</th>
                  <th>Total Employees</th>
                  <th>Response Time</th>
                  <th>Membership</th>
                  <th>Annual Revenue</th>
                  <th>Contract Services</th>
                  
                  <th>Edit</th>
                  <th>Action</th>

                </tr>

              </thead>
              <tbody>
                <?php foreach ($list as $value) { ?>
                  <tr>
                   
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['user_email']; ?></td>
                        <td><?php echo $value['shipment_port']; ?></td>
                        <td><?php echo $value['shipment_country']; ?></td>
                        <td><?php echo $value['buyer_from']; ?></td>
                        <td><?php echo $value['buyer_from2']; ?></td>
                        <td><?php echo $value['buyer_from3']; ?></td>
                        <td><?php echo $value['buyer_from4']; ?></td>
                        <td><img src="<?php echo base_url()?>upload/product/<?php echo $value['main_image']; ?>"></td>
                        <td><?php echo $value['product_size']; ?></td>
                        <td><?php echo $value['dispetch_time']; ?></td>
                        <td><?php echo $value['moq']; ?></td>
                        <td><?php echo $value['payment_terms']; ?></td>
                        <td><?php echo $value['fob_price']; ?></td>
                        <td><?php echo $value['cif_price']; ?></td>
                        <td><?php echo $value['cfr_price']; ?></td>
                        <td><?php echo $value['dap_price']; ?></td>
                        <td><?php echo $value['brand_name']; ?></td>
                        <td><?php echo $value['origin_place']; ?></td>
                        <td><?php echo $value['category']; ?></td>
                        <td><?php echo $value['certificates']; ?></td>
                        <td><?php echo $value['transaction']; ?></td>
                        <td><?php echo $value['selling_units']; ?></td>
                        <td><?php echo $value['single_gross_weight']; ?></td>
                        <td><?php echo $value['single_package_size']; ?></td>
                        <td><?php echo $value['single_package_type']; ?></td>
                        
                        <td><?php echo $value['comapny_name']; ?></td>
                        <td><?php echo $value['company_country']; ?></td>
                        <td><?php echo $value['business_type']; ?></td>
                        <td><?php echo $value['stablished_year']; ?></td>
                        <td><?php echo $value['main_product']; ?></td>
                        <td><?php echo $value['factory_size']; ?></td>
                        <td><?php echo $value['no_of_office']; ?></td>
                        <td><?php echo $value['comapny_certificates']; ?></td>
                        <td><?php echo $value['total_employee']; ?></td>
                        <td><?php echo $value['response_time']; ?></td>
                        <td><?php echo $value['membership']; ?></td>
                        <td><?php echo $value['annual_revenue']; ?></td>
                        <td><?php echo $value['contract_services']; ?></td>

                        
                        <td><a href="<?php echo base_url()?>admin/product/edit?id=<?php echo $value['id']?>">Edit</a></td>
                      
                     
                        <td><a class="delete_sliders" data-id="<?php echo $value['id']?>"  style="color: red;cursor: pointer;" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                    
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
    <?php echo form_open(base_url('admin/product/view/deletecontactdetail'), array('method' => 'post')); ?>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
        <h4 class="modal-title">Delete Product</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" class="deletesliderId" name="deletesliderId" />
            <h4><b>Do you really want to Delete this Product ?</b></h4>
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