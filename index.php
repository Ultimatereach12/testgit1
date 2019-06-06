
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Add Order</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->  
  <link rel="stylesheet" href="http://localhost/stock/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->  
  <link rel="stylesheet" href="http://localhost/stock/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/stock/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/stock/assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/stock/assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="http://localhost/stock/assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/stock/assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="http://localhost/stock/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->  
  <link rel="stylesheet" href="http://localhost/stock/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="http://localhost/stock/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="http://localhost/stock/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="http://localhost/stock/assets/bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="http://localhost/stock/assets/plugins/fileinput/fileinput.min.css">

  <!-- icheck -->
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="http://localhost/stock/assets/plugins/iCheck/all.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
  <script src="http://localhost/stock/assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="http://localhost/stock/assets/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="http://localhost/stock/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- Morris.js charts -->
  <script src="http://localhost/stock/assets/bower_components/raphael/raphael.min.js"></script>
  <script src="http://localhost/stock/assets/bower_components/morris.js/morris.min.js"></script>
  <!-- Sparkline -->
  <script src="http://localhost/stock/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="http://localhost/stock/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="http://localhost/stock/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="http://localhost/stock/assets/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="http://localhost/stock/assets/bower_components/moment/min/moment.min.js"></script>
  <script src="http://localhost/stock/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="http://localhost/stock/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <!-- Bootstrap WYSIHTML5 -->
  <script src="http://localhost/stock/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="http://localhost/stock/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="http://localhost/stock/assets/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- Select2 -->
  <script src="http://localhost/stock/assets/bower_components/select2/dist/js/select2.full.min.js"></script>
  <!-- AdminLTE App -->  
  <script src="http://localhost/stock/assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="http://localhost/stock/assets/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="http://localhost/stock/assets/dist/js/demo.js"></script>
  <script src="http://localhost/stock/assets/plugins/fileinput/fileinput.min.js"></script>

  <!-- ChartJS -->
  <script src="http://localhost/stock/assets/bower_components/Chart.js/Chart.js"></script>

  <!-- icheck -->
  <script src="http://localhost/stock/assets/plugins/iCheck/icheck.min.js"></script>

  <!-- DataTables -->
<script src="http://localhost/stock/assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="http://localhost/stock/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>



</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>ADN</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li id="dashboardMainMenu">
          <a href="http://localhost/stock/dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>

                              <li class="treeview" id="mainUserNav">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Users</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
                            <li id="createUserNav"><a href="http://localhost/stock/users/create"><i class="fa fa-circle-o"></i> Add User</a></li>
              
                            <li id="manageUserNav"><a href="http://localhost/stock/users"><i class="fa fa-circle-o"></i> Manage Users</a></li>
                        </ul>
          </li>
          
                      <li class="treeview" id="mainGroupNav">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Groups</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                                  <li id="addGroupNav"><a href="http://localhost/stock/groups/create"><i class="fa fa-circle-o"></i> Add Group</a></li>
                                                <li id="manageGroupNav"><a href="http://localhost/stock/groups"><i class="fa fa-circle-o"></i> Manage Groups</a></li>
                              </ul>
            </li>
          

                      <li id="brandNav">
              <a href="http://localhost/stock/brands/">
                <i class="glyphicon glyphicon-tags"></i> <span>Brands</span>
              </a>
            </li>
          
                      <li id="categoryNav">
              <a href="http://localhost/stock/category/">
                <i class="fa fa-files-o"></i> <span>Category</span>
              </a>
            </li>
          
                      <li id="storeNav">
              <a href="http://localhost/stock/stores/">
                <i class="fa fa-files-o"></i> <span>Stores</span>
              </a>
            </li>
          
                    <li id="attributeNav">
            <a href="http://localhost/stock/attributes/">
              <i class="fa fa-files-o"></i> <span>Attributes</span>
            </a>
          </li>
          
                      <li class="treeview" id="mainProductNav">
              <a href="#">
                <i class="fa fa-cube"></i>
                <span>Products</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                                  <li id="addProductNav"><a href="http://localhost/stock/products/create"><i class="fa fa-circle-o"></i> Add Product</a></li>
                                                <li id="manageProductNav"><a href="http://localhost/stock/products"><i class="fa fa-circle-o"></i> Manage Products</a></li>
                              </ul>
            </li>
          

                      <li class="treeview" id="mainOrdersNav">
              <a href="#">
                <i class="fa fa-dollar"></i>
                <span>Orders</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                                  <li id="addOrderNav"><a href="http://localhost/stock/orders/create"><i class="fa fa-circle-o"></i> Add Order</a></li>
                                                <li id="manageOrdersNav"><a href="http://localhost/stock/orders"><i class="fa fa-circle-o"></i> Manage Orders</a></li>
                              </ul>
            </li>
          
                      <li id="reportNav">
              <a href="http://localhost/stock/reports/">
                <i class="glyphicon glyphicon-stats"></i> <span>Reports</span>
              </a>
            </li>
          

                      <li id="companyNav"><a href="http://localhost/stock/company/"><i class="fa fa-files-o"></i> <span>Company</span></a></li>
          
        

        <!-- <li class="header">Settings</li> -->

                  <li><a href="http://localhost/stock/users/profile/"><i class="fa fa-user-o"></i> <span>Profile</span></a></li>
                          <li><a href="http://localhost/stock/users/setting/"><i class="fa fa-wrench"></i> <span>Setting</span></a></li>
        
                <!-- user permission info -->
        <li><a href="http://localhost/stock/auth/logout"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Orders</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Orders</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-md-12 col-xs-12">

        <div id="messages"></div>

        

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Add Order</h3>
          </div>
          <!-- /.box-header -->
          <form role="form" action="" method="post" class="form-horizontal">
              <div class="box-body">

                
                <div class="form-group">
                  <label for="gross_amount" class="col-sm-12 control-label">Date: 2019-02-23</label>
                </div>
                <div class="form-group">
                  <label for="gross_amount" class="col-sm-12 control-label">Date: 05:37 am</label>
                </div>

                <div class="col-md-4 col-xs-12 pull pull-left">

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Customer Name</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter Customer Name" autocomplete="off" />
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Customer Address</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="customer_address" name="customer_address" placeholder="Enter Customer Address" autocomplete="off">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Customer Phone</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="customer_phone" name="customer_phone" placeholder="Enter Customer Phone" autocomplete="off">
                    </div>
                  </div>
                </div>
                
                
                <br /> <br/>
                <table class="table table-bordered" id="product_info_table">
                  <thead>
                    <tr>
                      <th style="width:50%">Product</th>
                      <th style="width:10%">Qty</th>
                      <th style="width:10%">Rate</th>
                      <th style="width:20%">Amount</th>
                      <th style="width:10%"><button type="button" id="add_row" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
                    </tr>
                  </thead>

                   <tbody>
                     <tr id="row_1">
                       <td>
                        <select class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="getProductData(1)" required>
                            <option value=""></option>
                                                          <option value="3">rtuyrtuaaaa</option>
                                                          <option value="2">fghf</option>
                                                      </select>
                        </td>
                        <td><input type="text" name="qty[]" id="qty_1" class="form-control" required onkeyup="getTotal(1)"></td>
                        <td>
                          <input type="text" name="rate[]" id="rate_1" class="form-control" disabled autocomplete="off">
                          <input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
                        </td>
                        <td>
                          <input type="text" name="amount[]" id="amount_1" class="form-control" disabled autocomplete="off">
                          <input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
                        </td>
                        <td><button type="button" class="btn btn-default" onclick="removeRow('1')"><i class="fa fa-close"></i></button></td>
                     </tr>
                   </tbody>
                </table>

                <br /> <br/>

                <div class="col-md-6 col-xs-12 pull pull-right">

                  <div class="form-group">
                    <label for="gross_amount" class="col-sm-5 control-label">Gross Amount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="gross_amount" name="gross_amount" disabled autocomplete="off">
                      <input type="hidden" class="form-control" id="gross_amount_value" name="gross_amount_value" autocomplete="off">
                    </div>
                  </div>
                                    <div class="form-group">
                    <label for="service_charge" class="col-sm-5 control-label">S-Charge 13 %</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="service_charge" name="service_charge" disabled autocomplete="off">
                      <input type="hidden" class="form-control" id="service_charge_value" name="service_charge_value" autocomplete="off">
                    </div>
                  </div>
                                                      <div class="form-group">
                    <label for="vat_charge" class="col-sm-5 control-label">Vat 10 %</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="vat_charge" name="vat_charge" disabled autocomplete="off">
                      <input type="hidden" class="form-control" id="vat_charge_value" name="vat_charge_value" autocomplete="off">
                    </div>
                  </div>
                                    <div class="form-group">
                    <label for="discount" class="col-sm-5 control-label">Discount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" onkeyup="subAmount()" autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="net_amount" class="col-sm-5 control-label">Net Amount</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="net_amount" name="net_amount" disabled autocomplete="off">
                      <input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off">
                    </div>
                  </div>

                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="service_charge_rate" value="13" autocomplete="off">
                <input type="hidden" name="vat_charge_rate" value="10" autocomplete="off">
                <button type="submit" class="btn btn-primary">Create Order</button>
                <a href="http://localhost/stock/orders/" class="btn btn-warning">Back</a>
              </div>
            </form>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- col-md-12 -->
    </div>
    <!-- /.row -->
    

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  var base_url = "http://localhost/stock/";

  $(document).ready(function() {
    $(".select_group").select2();
    // $("#description").wysihtml5();

    $("#mainOrdersNav").addClass('active');
    $("#addOrderNav").addClass('active');
    
    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
        'onclick="alert(\'Call your custom code here.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>'; 
  
    // Add new row in the table 
    $("#add_row").unbind('click').bind('click', function() {
      var table = $("#product_info_table");
      var count_table_tbody_tr = $("#product_info_table tbody tr").length;
      var row_id = count_table_tbody_tr + 1;

      $.ajax({
          url: base_url + '/orders/getTableProductRow/',
          type: 'post',
          dataType: 'json',
          success:function(response) {
            
              // console.log(reponse.x);
               var html = '<tr id="row_'+row_id+'">'+
                   '<td>'+ 
                    '<select class="form-control select_group product" data-row-id="'+row_id+'" id="product_'+row_id+'" name="product[]" style="width:100%;" onchange="getProductData('+row_id+')">'+
                        '<option value=""></option>';
                        $.each(response, function(index, value) {
                          html += '<option value="'+value.id+'">'+value.name+'</option>';             
                        });
                        
                      html += '</select>'+
                    '</td>'+ 
                    '<td><input type="number" name="qty[]" id="qty_'+row_id+'" class="form-control" onkeyup="getTotal('+row_id+')"></td>'+
                    '<td><input type="text" name="rate[]" id="rate_'+row_id+'" class="form-control" disabled><input type="hidden" name="rate_value[]" id="rate_value_'+row_id+'" class="form-control"></td>'+
                    '<td><input type="text" name="amount[]" id="amount_'+row_id+'" class="form-control" disabled><input type="hidden" name="amount_value[]" id="amount_value_'+row_id+'" class="form-control"></td>'+
                    '<td><button type="button" class="btn btn-default" onclick="removeRow(\''+row_id+'\')"><i class="fa fa-close"></i></button></td>'+
                    '</tr>';

                if(count_table_tbody_tr >= 1) {
                $("#product_info_table tbody tr:last").after(html);  
              }
              else {
                $("#product_info_table tbody").html(html);
              }

              $(".product").select2();

          }
        });

      return false;
    });

  }); // /document

  function getTotal(row = null) {
    if(row) {
      var total = Number($("#rate_value_"+row).val()) * Number($("#qty_"+row).val());
      total = total.toFixed(2);
      $("#amount_"+row).val(total);
      $("#amount_value_"+row).val(total);
      
      subAmount();

    } else {
      alert('no row !! please refresh the page');
    }
  }

  // get the product information from the server
  function getProductData(row_id)
  {
    var product_id = $("#product_"+row_id).val();    
    if(product_id == "") {
      $("#rate_"+row_id).val("");
      $("#rate_value_"+row_id).val("");

      $("#qty_"+row_id).val("");           

      $("#amount_"+row_id).val("");
      $("#amount_value_"+row_id).val("");

    } else {
      $.ajax({
        url: base_url + 'orders/getProductValueById',
        type: 'post',
        data: {product_id : product_id},
        dataType: 'json',
        success:function(response) {
          // setting the rate value into the rate input field
          
          $("#rate_"+row_id).val(response.price);
          $("#rate_value_"+row_id).val(response.price);

          $("#qty_"+row_id).val(1);
          $("#qty_value_"+row_id).val(1);

          var total = Number(response.price) * 1;
          total = total.toFixed(2);
          $("#amount_"+row_id).val(total);
          $("#amount_value_"+row_id).val(total);
          
          subAmount();
        } // /success
      }); // /ajax function to fetch the product data 
    }
  }

  // calculate the total amount of the order
  function subAmount() {
    var service_charge = 13;
    var vat_charge = 10;

    var tableProductLength = $("#product_info_table tbody tr").length;
    var totalSubAmount = 0;
    for(x = 0; x < tableProductLength; x++) {
      var tr = $("#product_info_table tbody tr")[x];
      var count = $(tr).attr('id');
      count = count.substring(4);

      totalSubAmount = Number(totalSubAmount) + Number($("#amount_"+count).val());
    } // /for

    totalSubAmount = totalSubAmount.toFixed(2);

    // sub total
    $("#gross_amount").val(totalSubAmount);
    $("#gross_amount_value").val(totalSubAmount);

    // vat
    var vat = (Number($("#gross_amount").val())/100) * vat_charge;
    vat = vat.toFixed(2);
    $("#vat_charge").val(vat);
    $("#vat_charge_value").val(vat);

    // service
    var service = (Number($("#gross_amount").val())/100) * service_charge;
    service = service.toFixed(2);
    $("#service_charge").val(service);
    $("#service_charge_value").val(service);
    
    // total amount
    var totalAmount = (Number(totalSubAmount) + Number(vat) + Number(service));
    totalAmount = totalAmount.toFixed(2);
    // $("#net_amount").val(totalAmount);
    // $("#totalAmountValue").val(totalAmount);

    var discount = $("#discount").val();
    if(discount) {
      var grandTotal = Number(totalAmount) - Number(discount);
      grandTotal = grandTotal.toFixed(2);
      $("#net_amount").val(grandTotal);
      $("#net_amount_value").val(grandTotal);
    } else {
      $("#net_amount").val(totalAmount);
      $("#net_amount_value").val(totalAmount);
      
    } // /else discount 

  } // /sub total amount

  function removeRow(tr_id)
  {
    $("#product_info_table tbody tr#row_"+tr_id).remove();
    subAmount();
  }
</script>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.1.0
    </div>
    <strong>Copyright &copy; 2018-2019.</strong> All rights reserved.
  </footer>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

</body>
</html>
