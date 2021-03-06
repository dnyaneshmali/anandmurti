
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Anandmurti</span></a>
            </div>
            <div class="clearfix"></div>
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url(); ?>/assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{sname}}</h2>
              </div>
            </div>
            <br />
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                
                  <li><a href="#/"><i class="fa fa-table"></i> Dashboard</a>
                  </li>
                  <li ng-hide="!isaquaadmin()" ng-controller="Dashboard"><a><i class="fa fa-tint gradient-aqua"></i>        Aqua Agency <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#/aquadashboard">Dashboard</a></li>
                        <li><a href="#/addaquacustomer">Add Customers</a></li>
                        <li><a href="#/listaquacustomer">List Customers</a></li>
                        <li><a href="#/addaquaproducts">Add Aqua Products</a></li>
                        <li><a href="#/listaquaproduct">List Aqua Products</a></li>
                        <li><a href="#/addaquaorder">Add Aqua order</a></li>
                        <li><a href="#/listaquaorder">List Aqua order</a></li>
                        <li><a href="#/aquaorderinvoice">Aqua Order Invoice</a></li>
                        <li><a href="#/addjardetails">Add Jar Details</a></li>
                        <li><a href="#/listjardetails">List Jar Details</a></li>
                        <li><a href="#/addvehicledetails">Add Vehicle Details</a></li>
                        <li><a href="#/listvehicledetails">List Vehicle Details</a></li>
                           <li><a href="#/addaquaexpensive">Add Aqua Expenses</a></li>
                        <li><a href="#/listaquaexpensive">List Aqua Expenses</a></li>
                    </ul>
                  </li>
                  <li ng-hide="!isgasadmin()" ng-controller="Dashboard" ><a><i class="fa fa-fire gradient-gas"></i>     Go Gas Agency<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#/gogas">Dashboard</a></li>
                       <li><a href="#/addgogascustomer">Add Gogas Customers</a></li>
                        <li><a href="#/listgogascustomer">List Gogas Customers</a></li>
                        <li><a href="#/addgogasproduct">Add Gogas Products</a></li>
                        <li><a href="#/listgogasproduct">List Gogas Products</a></li>
                        <li><a href="#/addnewconnection">Add New Connection</a></li>
                        <li><a href="#/listnewconnection">List New connections</a></li>
                        <li><a href="#/connectioninvoice">New connections Invoice</a></li>
                        <li><a href="#/saleproducts">Sale Products</a></li>
                        <li><a href="#/listsoldproducts">List Sold Prodcuts</a></li>
                        <li><a href="#/gogasproductinvoice">Gogas Product Invoice</a></li>
                        <li><a href="#/refilcylinder">Add Refil cylinder</a></li>
                        <li><a href="#/listrefilcylinder">List Refil cylinder</a></li>
                        <li><a href="#/refilinvoice">Refil Cylinder Invoice</a></li>
                        <li><a href="#/addgasvehicles">Add Vehicle</a></li>
                        <li><a href="#/listgasvehicles">List Vehicles</a></li>
                        <li><a href="#/addgasinwards">Add Inwards</a></li>
                        <li><a href="#/listgasinwards">List Inwards</a></li>
                        <li><a href="#/gasproductstatus">Product Status</a></li>
                        <li><a href="#/addgogasexpensive">Add Gogas Expenses</a></li>
                        <li><a href="#/listgogasexpensive">List Gogas Expenses</a></li>
                    </ul>
                  </li>

                  <li ng-hide="!isadmin()" ng-controller="Dashboard"><a><i class="fa fa-group"></i> Manage Admin's<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#/adminlist">List Admin</a></li>
                      <li><a href="#/addadmin">Add Admin</a></li>
                        <!-- <li><a href="#/addexpensive">Add Admin Expensives</a></li>
                          <li><a href="#/listexpensive">List Admin expensives</a></li> -->
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
          </div>
        </div>