<div class="listaquaorder" ng-controller="Listaquaorder">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
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
                          <th>Order Status</th>
                          <th colspan="3">Action</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="aquaorder in data | filter:clisearch">
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.customer_name}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.order_delivery_address}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.order_quantity}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.order_delivery_time}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.order_delivery_date}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.vehicle_name}}</td>




                          

                              <td ng-if="!isedit(aquaorder.order_id)">


                        <button class="btn btn-danger" ng-click="deleteorder(aquaorder.order_id);">Delete</button>
                          <button class="btn btn-warning" ng-value="{{btnName}}" ng-click="setedit(aquaorder.order_id,aquaorder);">Edit</button>
                        </td>
                                 
                                <ng-form name="listordertailsform">
                               <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" ng-value="aquaorder.customer_name" ng-model="aquaorder.customer_name" name="customer_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="listordertailsform.customer_name.$invalid && !listordertailsform.customer_name.$pristine" class="help-block">  is required.</p>
                          </td>

                            <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" ng-value="aquaorder.order_delivery_address" ng-model="aquaorder.order_delivery_address" name="order_delivery_address" style="width:auto;" required>
                          <p style="color:red;" ng-show="listordertailsform.order_delivery_address.$invalid && !listordertailsform.order_delivery_address.$pristine" class="help-block">  is required.</p>
                          </td>

                         
                               <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" ng-value="aquaorder.order_quantity" ng-model="aquaorder. order_quantity" name="order_quantity" style="width:auto;" required>
                          <p style="color:red;" ng-show="listordertailsform.order_quantity.$invalid && !listordertailsform.order_quantity.$pristine" class="help-block">  is required.</p>
                          </td>

                          <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" ng-value="aquaorder.order_delivery_time" ng-model="aquaorder.order_delivery_time" name="order_delivery_time" style="width:auto;" required>
                          <p style="color:red;" ng-show="listordertailsform.order_delivery_time.$invalid && !listordertailsform.order_delivery_time.$pristine" class="help-block">  is required.</p>
                          </td>
                           
                          

                        <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" ng-value="aquaorder.order_delivery_date" ng-model="aquaorder.order_delivery_date" name="order_delivery_date" style="width:auto;" required>
                          <p style="color:red;" ng-show="listordertailsform.order_delivery_date.$invalid && !listordertailsform.order_delivery_date.$pristine" class="help-block">  is required.</p>
                          </td>

                          <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" ng-value="aquaorder.vehicle_name" ng-model="aquaorder. vehicle_name" name=" vehicle_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="listordertailsform.vehicle_name.$invalid && !listordertailsform.vehicle_name.$pristine" class="help-block">  is required.</p>
                          </td>
                             <td ng-if="isedit(aquaorder.order_id)">

                              <button class="btn btn-danger" ng-click="updateaquaorder(aquaorder,$index);">Update</button> 

                              <button class="btn btn-warning" value="{{btnName}}" ng-click="unsetedit($index);">Cancel</button>


                             <!--  <button class="btn btn-warning" ng-click="logout();">Logout</button> -->



                             <td ng-if="aquaorder.order_status==0"><button class="btn btn-danger" ng-click="setstatus(aquaorder.order_id);">Pending</button></td>
                          <td ng-if="aquaorder.order_status==1"><button class="btn btn-active" ng-click="unsetstatus(aquaorder.order_id);">Complete</button></td>
                          <td ng-if="aquaorder.order_reminder==0"><button class="btn btn-danger" ng-click="setreminder(aquaorder.order_id,$index);"><i class="fa fa-bell"></i></button></td>
                          <td ng-if="aquaorder.order_reminder==1"><button class="btn btn-active" ng-click="unsetreminder(aquaorder.order_id);"><i class="fa fa-bell-slash"></i></button></td>
                                      
                          </td>

                          <ng-form>







                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

