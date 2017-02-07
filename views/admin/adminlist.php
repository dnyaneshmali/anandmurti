<div class="userlist" ng-controller="Adminlistctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Button Example <small>Admin</small></h2>
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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Number</th>
                          <th>Role</th>
                          <th>Start Date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        
                        <tr ng-repeat="admin in data">
                          <td>{{admin.admin_name}}</td>
                          <td>{{admin.admin_email}}</td>
                          <td>{{admin.admin_number}}</td>
                          <td>{{admin.admin_role}}</td>
                          <td>{{admin.admin_date}}</td>
                          <td><button class="btn btn-danger" ng-click="deleteuser(admin.admin_id,$index);">Delete</button> 
                              <button class="btn btn-warning" value="{{btnName}}" ng-click="edituser(admin.admin_id);">Edit</button>
                              <button class="btn btn-warning" ng-click="logout();">Logout</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

      