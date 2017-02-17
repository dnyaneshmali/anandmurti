<div class="listaquaorder" ng-controller="Listaquaorder">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" >
                  <div class="x_title">
                    <h2>List Aqua Order</h2>
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
                          <th>Order Address</th>
                          <th>Quantity</th>
                          <th>Order time</th>
                          <th>Order Date</th>
                          <th>Vehicle Name</th>
                          <th>Action</th>
                          <th>Order Status</th>
                                 <th>Reminder</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="aquaorder in data | filter:clisearch" ng-form="subForm">
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.acustomer_name}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.order_delivery_address}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.order_quantity}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.order_delivery_time}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.order_delivery_date}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.vehicle_name}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">
                       <a data-toggle="tooltip" title="Delete"> <button class="btn btn-danger" ng-click="deleteorder(aquaorder.order_id);"><i class="fa fa-trash"></i></button></a>
                         <a data-toggle="tooltip" title="Edit"> <button class="btn btn-warning" ng-value="{{btnName}}" ng-click="setedit(aquaorder.order_id,aquaorder);"><i class="fa fa-edit"></i></button></a>
                        </td>
                                 
                                <ng-form name="listordertailsform">
                               <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" class="form-control" ng-value="aquaorder.customer_name" ng-model="aquaorder.customer_name" name="customer_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.customer_name.$error.required"> Name is required.</p>

                          </td>

                            <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" ng-value="aquaorder.order_delivery_address" ng-model="aquaorder.order_delivery_address" class="form-control" name="order_delivery_address" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.order_delivery_address.$error.required"> Destination Address is required.</p>

                          </td>

                         
                               <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" class="form-control" ng-pattern="/^\d+$/"  ng-value="aquaorder.order_quantity" ng-model="aquaorder.order_quantity" name="order_quantity" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.order_quantity.$error.required"> quantity is required.</p>
                           <p style="color:red;" ng-show="!subForm.order_quantity.$error.required && subForm.order_quantity.$invalid"> accept digits only.</p>
                          </td>

                          <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" class="form-control" ng-value="aquaorder.order_delivery_time" ng-model="aquaorder.order_delivery_time" name="order_delivery_time" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.order_delivery_time.$error.required">time is required.</p>
                          </td>
                           
                          

                        <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text"  class="form-control" ng-value="aquaorder.order_delivery_date" ng-model="aquaorder.order_delivery_date" name="order_delivery_date" style="width:auto;" required>
                         <p style="color:red;" ng-show="subForm.order_delivery_date.$error.required">time is required.</p>
                          </td>

                          <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" ng-value="aquaorder.vehicle_name" ng-model="aquaorder. vehicle_name" name=" vehicle_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="listordertailsform.vehicle_name.$invalid && !listordertailsform.vehicle_name.$pristine" class="help-block">  is required.</p>
                          </td>
                             <td ng-if="isedit(aquaorder.order_id)">

                              <a data-toggle="tooltip" title="Update"><button class="btn btn-success" ng-disabled="!subForm.$valid" ng-click="updateaquaorder(aquaorder,$index);"><i class="fa fa-check"></i></button></a> 

                              <a data-toggle="tooltip" title="Cancle"><button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button></a>


                             <!--  <button class="btn btn-warning" ng-click="logout();">Logout</button> -->



                             <td ng-if="aquaorder.order_status==0"><a data-toggle="tooltip" title="Pending"><button class="btn btn-danger" ng-click="setstatus(aquaorder.order_id);"><i class="fa fa-spinner"></i></button></a></td>
                          <td ng-if="aquaorder.order_status==1"><a data-toggle="tooltip" title="Complete"><button class="btn btn-success" ng-click="unsetstatus(aquaorder.order_id);"><i class="fa fa-check-circle"></i></button></a></td>
                          <td ng-if="aquaorder.order_reminder==0"><a data-toggle="tooltip" title="Set Reminder"><button class="btn btn-danger" ng-click="setreminder(aquaorder.order_id,$index);"><i class="fa fa-bell"></i></button></a></td>
                          <td ng-if="aquaorder.order_reminder==1"><a data-toggle="tooltip" title="Unset Reminder"><button class="btn btn-active" ng-click="unsetreminder(aquaorder.order_id);"><i class="fa fa-bell-slash"></i></button></a></td>
                                      
                          </td>

                          <ng-form>







                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

