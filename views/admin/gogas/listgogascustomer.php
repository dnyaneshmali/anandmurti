<div class="userlist" ng-controller="Listgogasctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   <!--  <h2>Button Example <small>A</small></h2> -->
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Customer Name</th>
                          <th>Customer Email</th>
                          <th>Customer Number</th>
                          <th>customer Address</th>
                          <th>customer Type</th>
                           <th>customer Role</th>
                          <th>Start Date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="gogascustomer in data">
                          <td>{{gogascustomer.customer_name}}</td>
                          <td>{{gogascustomer.customer_email}}</td>
                          <td>{{gogascustomer.customer_number}}</td>
                          <td>{{gogascustomer.customer_address}}</td>
                          <td>{{gogascustomer.customer_type}}</td>
                          <td>{{gogascustomer.customer_role}}</td>
                          <td>{{gogascustomer.customer_date}}</td>
                          <td><button class="btn btn-danger" ng-click="deleteuser(gogascustomer.customer_id,$index);">Delete</button></td>
                          <td><button class="btn btn-warning" ng-click="edituser(gogascustomers.customer_id,gogascustomers.admin_username);">Edit</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

