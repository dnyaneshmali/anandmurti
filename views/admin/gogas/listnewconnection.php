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
                        <!--  <th>customer State</th> -->
                        
                          <th>connection stamp</th>
                           <th>connection tube</th>
                          <th>connection Lighter</th>
                          <!-- <th>connection_other</th> -->
                          <th> Date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="Connection in data | filter:clisearch"  ng-form="subForm">
                          <td ng-if="!isedit(Connection.connection_id)">{{Connection.gcustomer_name}}</td>
                          <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_cylinder_deposit}}</td>
                          <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_depreciation}}</td>
                         
                          <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_hotplate}}</td>
                         
                          <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_passbook}}</td>
                         <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_stamp}}</td>
                            <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_tube}}</td>
                             <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_lighter}}</td>
                              <!-- <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_other}}</td> -->
                               <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_date}}</td>

                             
              
                              <td ng-if="!isedit(Connection.connection_id)">

                          <button class="btn btn-danger" ng-click="deleteuser(Connection.connection_id,$index);">Delete</button>
                          <button class="btn btn-warning" ng-value="{{btnName}}" ng-click="setedit(Connection.connection_id);">Edit</button>
                        </td>

                            <ng-form name="updateconnectionform">
                   <td ng-if="isedit(Connection.connection_id)">
                   {{Connection.gcustomer_name}}</td>


                            

                             <td ng-if="isedit(Connection.connection_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="Connection.connection_cylinder_deposit" ng-model="Connection.connection_cylinder_deposit" name="connection_cylinder_deposit" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.connection_cylinder_deposit.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.connection_cylinder_deposit.$error.required && subForm.connection_cylinder_deposit.$invalid"> accept digits only.</p>
                          </td>

                           <td ng-if="isedit(Connection.connection_id)">
                          YES: <input type="radio" ng-model="Connection.connection_depreciation" name=" connection_depreciation" style="width:auto;" value="Yes">
                          NO: <input type="radio" ng-model="Connection. connection_depreciation" name="connection_depreciation" style="width:auto;" value="No">
                          </td>


                        <td ng-if="isedit(Connection.connection_id)">
                          YES: <input type="radio" ng-model="Connection.connection_hotplate" name="connection_hotplate" style="width:auto;" value="Yes">
                          NO: <input type="radio" ng-model="Connection.connection_hotplate" name="connection_hotplate" style="width:auto;" value="No">
                          </td>


                          <td ng-if="isedit(Connection.connection_id)">
                          YES: <input type="radio" ng-model="Connection.connection_passbook" name="connection_passbook" style="width:auto;" value="Yes">
                          NO: <input type="radio" ng-model="Connection.connection_passbook" name="connection_passbook" style="width:auto;" value="No">
                          </td>

                           <td ng-if="isedit(Connection.connection_id)">
                          <input type="text" ng-value="Connection.connection_stamp" ng-model="Connection.connection_stamp" name="connection_stamp" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.connection_stamp.$error.required"> required field.</p>
                          </td>


                          <td ng-if="isedit(Connection.connection_id)">
                          YES: <input type="radio" ng-model="Connection.connection_tube" name=" connection_tube" style="width:auto;" value="Yes">
                          NO: <input type="radio" ng-model="Connection. connection_tube" name=" connection_tube" style="width:auto;" value="No">
                          </td>

                           <td ng-if="isedit(Connection.connection_id)">
                          YES: <input type="radio" ng-model="Connection.connection_lighter" name=" connection_lighter" style="width:auto;" value="Yes">
                          NO: <input type="radio" ng-model="Connection. connection_lighter" name=" connection_lighter" style="width:auto;" value="No">
                          </td>


                           <td ng-if="isedit(Connection.connection_id)">{{Connection. connection_date}}</td>



                      <td ng-if="isedit(Connection.connection_id)"><button class="btn btn-success" ng-click="updategasconnection(Connection);"><i class="fa fa-check"></i></button> 

                              <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit(Connection.connection_id);"><i class="fa fa-close"></i></button>

                               </td>




                           <ng-form>
                       </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
</div>