<div class="listaqua-cust">
<div class="userlist" ng-controller="Listaquactrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Aqua customers</h2>
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
                    <!-- <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p> -->
                    <div class="item form-group">
                        <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12">Search for <span class="required">*</span>
                        </label> -->
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..." name="clisearch" >
                          
                        </div>
                      </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Customer Name</th>
                          <th>Customer Email</th>
                          <th>Customer Number</th>
                          <th>customer Address</th>
                          <th>customer Type</th>
                        <!--    <th>customer Role</th> -->
                          <th>Start Date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="aquacustomer in data | filter:clisearch">
                          <td ng-if="!isedit(aquacustomer.acustomer_id)">{{aquacustomer.acustomer_name}}</td>
                          <td ng-if="!isedit(aquacustomer.acustomer_id)">{{aquacustomer.acustomer_email}}</td>
                          <td ng-if="!isedit(aquacustomer.acustomer_id)">{{aquacustomer.acustomer_number}}</td>
                          <td ng-if="!isedit(aquacustomer.acustomer_id)">{{aquacustomer.acustomer_address}}</td>
                          <td ng-if="!isedit(aquacustomer.acustomer_id)">{{aquacustomer.acustomer_type}}</td>
                          <!-- <td>{{aquacustomer.customer_role}}</td> -->
                          <td ng-if="!isedit(aquacustomer.acustomer_id)">{{aquacustomer.acustomer_date}}</td>
                          <td ng-if="!isedit(aquacustomer.acustomer_id)">
                            <button class="btn btn-danger" ng-click="deleteuser(aquacustomer.acustomer_id,$index);">Delete</button>
                          <button class="btn btn-warning" value="{{btnName}}"  ng-click="setedit(aquacustomer.acustomer_id,aquacustomer);">Edit</button>
                        </td>

                          <ng-form name="listaquacustomerform">

                             <td ng-if="isedit(aquacustomer.acustomer_id)">
                          <input type="text" ng-value="aquacustomer.acustomer_name" ng-model="aquacustomer.acustomer_name" name="acustomer_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="listaquacustomerform.acustomer_name.$invalid && !listaquacustomerform.acustomer_name.$pristine" class="help-block"> fullname is required.</p>
                          </td>

                             <td ng-if="isedit(aquacustomer.acustomer_id)">{{aquacustomer.acustomer_email}}</td>

                            <td ng-if="isedit(aquacustomer.acustomer_id)">
                          <input type="text" ng-value="aquacustomer.acustomer_number" ng-model="aquacustomer.acustomer_number" name="acustomer_number" style="width:auto;" required>
                          <p style="color:red;" ng-show="listaquacustomerform.acustomer_number.$invalid && !listaquacustomerform.acustomer_number.$pristine" class="help-block"> fullname is required.</p>
                          </td>

                          <td ng-if="isedit(aquacustomer.acustomer_id)">
                          <input type="text" ng-value="aquacustomer.acustomer_address" ng-model="aquacustomer.acustomer_address" name="acustomer_address" style="width:auto;" required>
                          <p style="color:red;" ng-show="listaquacustomerform.acustomer_address.$invalid && !listaquacustomerform.acustomer_address.$pristine" class="help-block"> fullname is required.</p>
                          </td>
                           
                           <td ng-if="isedit(aquacustomer.acustomer_id)">
                          <input type="text" ng-value="aquacustomer.acustomer_type" ng-model="aquacustomer.acustomer_type" name=" acustomer_type" style="width:auto;" required>
                          <p style="color:red;" ng-show="listaquacustomerform.acustomer_type.$invalid && !listaquacustomerform.acustomer_type.$pristine" class="help-block"> fullname is required.</p>
                          </td>
                           




                              <td ng-if="isedit(aquacustomer.acustomer_id)">{{aquacustomer.acustomer_date}}</td>







                             <td ng-if="isedit(aquacustomer.acustomer_id)">

                              <button class="btn btn-danger" ng-click="updateaquacustomer(aquacustomer,$index);">Update</button> 

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
        </div>
