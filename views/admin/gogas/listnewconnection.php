<div class="listnew-conn">
<div class="connectionlist" ng-controller="Listnewconnectionctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   <!--  <h2>Button Example <small>A</small></h2> -->
                   <!--  <ul class="nav navbar-right panel_toolbox">
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
                    </ul> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <div class="item form-group">
                        <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12">Search for <span class="required">*</span>
                        </label> -->
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..."  name="clisearch" >
                          
                        </div>
                      </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Customer Name</th>
                          <th>Cylinder Deposit</th>
                          <th>connection Depreciation</th>
                         <th>connection Hotplate</th> 
                         
                          <th>connection passbook</th>
                          <th>customer State</th>
                        
                          <th>connection stamp</th>
                           <th>connection tube</th>
                          <th>connection Lighter</th>
                          <!-- <th>connection_other</th> -->
                          <th> Date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="Connection in data | filter:clisearch">
                          <td>{{Connection.gcustomer_name}}</td>
                          <td>{{Connection.connection_cylinder_deposit}}</td>
                          <td>{{Connection.connection_depreciation}}</td>
                         
                          <td>{{Connection.connection_hotplate}}</td>
                         
                          <td>{{Connection.connection_passbook}}</td>
                         <td>{{Connection.connection_stamp}}</td>
                            <td>{{Connection.connection_tube}}</td>
                             <td>{{Connection.connection_lighter}}</td>
                              <td>{{Connection.connection_other}}</td>
                               <td>{{Connection.connection_date}}</td>

                             


                          <td><button class="btn btn-danger" ng-click="deleteuser(Connection.connection_id,$index);">Delete</button></td>
                          <td><button class="btn btn-warning" ng-click="edituser(Connections.gcustomer_id,Connections.admin_username);">Edit</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
</div>