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
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
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
                          <td ng-if="!isedit(listvehicle.vehicle_id)">{{listvehicle.vehicle_owner_name}}</td>
                          <td ng-if="!isedit(listvehicle.vehicle_id)" >{{listvehicle.vehicle_number}}</td>
                          <td ng-if="!isedit(listvehicle.vehicle_id)">{{listvehicle.vehicle_contact_number}}</td>

                            <td ng-if="!isedit(listvehicle.vehicle_id)">
                          <button class="btn btn-danger" ng-click="deletevehicle(listvehicle.vehicle_id);">Delete</button>
                        <button class="btn btn-warning" ng-value="{{btnName}}" ng-click="setedit(listvehicle.vehicle_id,listvehicle);">Edit</button>
                            </td>
                              <ng-form name="listvehicleform">
                               <td ng-if="isedit(listvehicle.vehicle_id)">
                          <input type="text" ng-value="listvehicle.jar_type" ng-model="listvehicle.vehicle_owner_name" name="vehicle_owner_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="listvehicleform.vehicle_owner_name.$invalid && !listvehicleform.vehicle_owner_name.$pristine" class="help-block">  is required.</p>
                          </td>
                          
                            <td ng-if="isedit(listvehicle.vehicle_id)">
                          <input type="text" ng-value="listvehicle.vehicle_number" ng-model="listvehicle.vehicle_number" name="vehicle_number" style="width:auto;" required>
                          <p style="color:red;" ng-show="listvehicleform.vehicle_number.$invalid && !listvehicleform.vehicle_number.$pristine" class="help-block">  is required.</p>
                          </td>

                          <td ng-if="isedit(listvehicle.vehicle_id)">
                          <input type="text" ng-value="listvehicle.vehicle_contact_number" ng-model="listvehicle.vehicle_contact_number" name="vehicle_contact_number" style="width:auto;" required>
                          <p style="color:red;" ng-show="listvehicleform.vehicle_contact_number.$invalid && !listvehicleform.vehicle_contact_number.$pristine" class="help-block">  is required.</p>
                          </td>
                          

                          
                           <td ng-if="isedit(listvehicle.vehicle_id)">

                              <button class="btn btn-danger" ng-click="updatevehicle(listvehicle,$index);">Update</button> 

                              <button class="btn btn-warning" value="{{btnName}}" ng-click="unsetedit($index);">Cancel</button>


                             <!--  <button class="btn btn-warning" ng-click="logout();">Logout</button> -->
                          </td>
                          <ng-form>




                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

