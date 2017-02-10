<div class="listvehiclectrl" ng-controller="Listvehiclectrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Vehicle Details</h2>
                    <!-- <ul class="nav navbar-right panel_toolbox">
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
                       <!--  <label class="control-label col-md-3 col-sm-3 col-xs-12">Search for <span class="required">*</span>
                        </label> -->
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..." name="clisearch" >
                          
                        </div>
                      </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Vehicle Owner Name</th>
                          <th>Vehicle Number</th>
                          <th>Vehicle Contact Number</th>
                          <th colspan="3">Action</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="listvehicle in data | filter:clisearch">
                          <td>{{listvehicle.vehicle_owner_name}}</td>
                          <td>{{listvehicle.vehicle_number}}</td>
                          <td>{{listvehicle.vehicle_contact_number}}</td>
                          <td><button class="btn btn-danger" ng-click="deletevehicle(listvehicle.vehicle_id);"><i class="fa fa-trash"> </i></button>
                          <button class="btn btn-warning" ng-click="editvehicle(listvehicle.customer_id,listvehicle.admin_username);"><i class="fa fa-edit"></i></button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

