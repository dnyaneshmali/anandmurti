<div class="userlist" ng-controller="Listgogasexpensive">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List for Gogas Expensives</h2>
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


                      <div class="item form-group">
                       <!--  <label class="control-label col-md-3 col-sm-3 col-xs-12">Search for <span class="required">*</span>
                        </label> -->
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..." name="clisearch" >
                          
                        </div>
                      </div>



                  <div class="x_content">
                    <!-- <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p> -->
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Person Name</th>
                          <th>Expensive Description</th>
                          <th>Amount</th>
                          <th>Date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        
                        <tr ng-repeat="expensive in data | filter:clisearch"  ng-form="subForm">
                          <td ng-if="!isedit(expensive.expensive_id)">{{expensive.person_name}}</td>
                          <td ng-if="!isedit(expensive.expensive_id)">{{expensive.exp_desc}}</td>
                          <td ng-if="!isedit(expensive.expensive_id)">{{expensive.exp_amount}}</td>
                          <td ng-if="!isedit(expensive.expensive_id)">{{expensive.exp_date}}</td>
                        
                          
                          <td ng-if="!isedit(expensive.expensive_id)">
                              <a  data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleteexpensive(expensive.expensive_id,$index);"><i class="fa fa-trash"></i></button></a>
                               <a  data-toggle="tooltip" title="Edit"><button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(expensive.expensive_id,expensive);"><i class="fa fa-edit"></i></button></a>

                            <!--   <button class="btn btn-danger" ng-click="deleteuser(expensive.expensive_id,$index);">Delete</button> 
                              <button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(expensive.expensive_id, expensive);">Edit</button> -->

                             <!--  <button class="btn btn-warning" ng-click="logout();">Logout</button> -->
                          </td>
                          <ng-form name="listexpensiveform">
                          
                         <td ng-if="isedit(expensive.expensive_id)">
                          <input type="text" class="form-control" ng-value="expensive.person_name" ng-model="expensive.person_name" name="person_name" style="width:auto;" required>
                        <p style="color:red;" ng-show="subForm.person_name.$error.required"> Name is required.</p>
                          </td>



                          
                            <td ng-if="isedit(expensive.expensive_id)">
                          <input type="text" class="form-control" ng-value="expensive.exp_desc" ng-model="expensive.exp_desc" name="exp_desc" style="width:auto;" required>
                        <p style="color:red;" ng-show="subForm.exp_desc.$error.required"> Description is required.</p>
                          </td>


                             <td ng-if="isedit(expensive.expensive_id)">
                          <input type="text" class="form-control" ng-value="expensive.exp_amount" ng-model="expensive.exp_amount" name="exp_amount" style="width:auto;" required>
                        <p style="color:red;" ng-show="subForm.exp_amount.$error.required"> Amount is required.</p>
                          </td>


                          <td ng-if="isedit(expensive.expensive_id)">{{expensive.exp_date}}</td>
                          

                          <td ng-if="isedit(expensive.expensive_id)"> <a  data-toggle="tooltip" title="Update"><button class="btn btn-success" ng-click="updateexpensive(expensive);"><i class="fa fa-check"></i></button></a>

                             <a  data-toggle="tooltip" title="Cancle"> <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button></a>

                         <!--  <td ng-if="isedit(expensive.expensive_id)"> -->

                             <!--  <button class="btn btn-danger" ng-click="updateuser(expensive,$index);">Update</button> 

                              <button class="btn btn-warning" value="{{btnName}}" ng-click="unsetedit($index);">Cancel</button> -->



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

      