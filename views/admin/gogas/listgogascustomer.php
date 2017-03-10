<div class="listgogas-cust">
<div class="userlist" ng-controller="Listgogasctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Go Gas Customer</h2>
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

                   <!--  <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p> -->
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
                          <th>Customer Name</th>
                          <th>Customer Type</th>
                          <th>Customer Email</th>
                          <th>Customer Number</th>
                          <!-- <th>customer DOB</th> -->
                          <!-- <th>customer State</th> -->
                          <th>customer City</th>
                         <!--  <th>customer Pincode</th> -->
                          <th>customer Landmark</th>
                           <!-- <th>customer Proof</th> -->
                          <th> Date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="gogascustomer in data | filter:clisearch" ng-form="subForm">
                          <td ng-if="!isedit(gogascustomer.gcustomer_id)">{{gogascustomer.gcustomer_name}}</td>
                          <td ng-if="!isedit(gogascustomer.gcustomer_id)">
                            <span ng-if="gogascustomer.gcustomer_type==1">Connection User</span><span ng-if="gogascustomer.gcustomer_type==2">Simple User</span></td>
                          <td ng-if="!isedit(gogascustomer.gcustomer_id)">{{gogascustomer.gcustomer_email}}</td>
                          <td ng-if="!isedit(gogascustomer.gcustomer_id)">{{gogascustomer.gcustomer_number}}</td>
                          <!-- <td>{{gogascustomer.gcustomer_dob}}</td>
                          <td>{{gogascustomer.gcustomer_state}}</td> -->
                          <td ng-if="!isedit(gogascustomer.gcustomer_id)">{{gogascustomer.gcustomer_city}}</td>
                          <!-- <td>{{gogascustomer.gcustomer_pincode}}</td> -->
                          <td ng-if="!isedit(gogascustomer.gcustomer_id)">{{gogascustomer.gcustomer_landmark}}</td>
                          <!-- <td>{{gogascustomer.gcustomer_proof}}</td>
 -->                          <td ng-if="!isedit(gogascustomer.gcustomer_id)">{{gogascustomer.gcustomer_date}}</td>

                                <td ng-if="!isedit(gogascustomer.gcustomer_id)">
                       <a data-toggle="tooltip" title="Update"> <button class="btn btn-danger" ng-click="deleteuser(gogascustomer.gcustomer_id,$index);"><i class="fa fa-trash"> </i></button></a>
                        <a data-toggle="tooltip" title="Edit"><button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(gogascustomer.gcustomer_id,gogascustomer);"><i class="fa fa-edit"></i></button></a>
                      </td>

                          <ng-form name="updategogascustomer">
                                <td ng-if="isedit(gogascustomer.gcustomer_id)">
                          <input type="text" ng-value="gogascustomer.gcustomer_name" ng-model="gogascustomer.gcustomer_name" name="gcustomer_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.gcustomer_name.$error.required"> Name is required.</p>
                          </td>
                          
                           <td ng-if="isedit(gogascustomer.gcustomer_id)">{{gogascustomer.gcustomer_type}}</td>

                              

                          
                           <td ng-if="isedit(gogascustomer.gcustomer_id)">{{gogascustomer.gcustomer_email}}</td>

                           <td ng-if="isedit(gogascustomer.gcustomer_id)">
                          <input type="text" ng-value="gogascustomer.gcustomer_number" ng-model="gogascustomer.gcustomer_number" ng-pattern="/^[0-9]{10}$/" name="gcustomer_number" style="width:auto;" required>
                         <p style="color:red;" ng-show="subForm.gcustomer_number.$error.required"> Number is required.</p>
                           <p style="color:red;" ng-show="!subForm.gcustomer_number.$error.required && subForm.gcustomer_number.$invalid"> accept 10 digits only.</p>
                          </td>
                            
                              <td ng-if="isedit(gogascustomer.gcustomer_id)">
                          <input type="text" ng-value="gogascustomer. gcustomer_city" ng-model="gogascustomer.  gcustomer_city" name="  gcustomer_city" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm. gcustomer_city.$error.required"> City is required.</p>
                          </td>


                              <td ng-if="isedit(gogascustomer.gcustomer_id)">
                          <input type="text" ng-value="gogascustomer.gcustomer_landmark" ng-model="gogascustomer.gcustomer_landmark" name="gcustomer_landmark" style="width:auto;" required>
                         <p style="color:red;" ng-show="subForm.gcustomer_landmark.$error.required"> required.</p>
                          </td>
                           
                           <td ng-if="isedit(gogascustomer.gcustomer_id)">{{gogascustomer.gcustomer_date}}</td>

                           <td ng-if="isedit(gogascustomer.gcustomer_id)">

                             <a data-toggle="tooltip" title="Update"> <button class="btn btn-success" ng-disabled="!subForm.$valid" ng-click="updategogascustomers(gogascustomer,$index);"><i class="fa fa-check"></i></button> </a>

                              <a data-toggle="tooltip" title="Update"><button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button></a>

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
