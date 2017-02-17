<div class="userlist" ng-controller="Listgogasproductctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Gas Inwards</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="item form-group">
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..." name="clisearch" >
                          
                        </div>
                      </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Total Quantity</th>
                          <th>Total Amount</th>
                          <th>Distributor Name</th>
                          <th>Vehicle Name</th>
                          <th>Inwards Date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="inwardsentry in gasinwards | filter:clisearch" ng-form="subForm">
                          <td ng-if="!isedit(inwardsentry.inwards_id)">{{inwardsentry.product_name}}</td>
                          <td ng-if="!isedit(inwardsentry.inwards_id)">{{inwardsentry.product_quantity}}</td>
                          <td ng-if="!isedit(inwardsentry.inwards_id)">{{inwardsentry.total_price}}</td>
                          <td ng-if="!isedit(inwardsentry.inwards_id)">{{inwardsentry.distributor_name}}</td>
                          <td ng-if="!isedit(inwardsentry.inwards_id)">{{inwardsentry.gvehicle_owner_name}}</td>
                          <td ng-if="!isedit(inwardsentry.inwards_id)">{{inwardsentry.product_date}}</td>
                                   
                                    <td ng-if="!isedit(inwardsentry.inwards_id)">

                           <a data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleteinwards(inwardsentry.inwards_id,$index);"><i class="fa fa-trash"></i></button></a>
                           <a data-toggle="tooltip" title="Edit"><button class="btn btn-warning" ng-value="{{btnName}}" ng-click="setedit(inwardsentry.inwards_id,inwardsentry);"><i class="fa fa-edit"></i></button></a>

                              </td>
                              <ng-form name="updategasinwardsform"> 
               <td ng-if="isedit(inwardsentry.inwards_id)">{{inwardsentry.product_name}}</td>

               <td ng-if="isedit(inwardsentry.inwards_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="inwardsentry.product_quantity" ng-model="inwardsentry.product_quantity" name="product_quantity" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.product_quantity.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.product_quantity.$error.required && subForm.product_quantity.$invalid"> accept digits only.</p>
                          </td>
                         <td ng-if="isedit(inwardsentry.inwards_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="inwardsentry.total_price" ng-model="inwardsentry.total_price" name="total_price" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.total_price.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.total_price.$error.required && subForm.total_price.$invalid"> accept digits only.</p>
                          </td>

                           <td ng-if="isedit(inwardsentry.inwards_id)">
                          <input type="text" ng-value="inwardsentry.inwards_id" ng-model="inwardsentry.  distributor_name" name="distributor_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.distributor_name.$error.required"> Distributer name is required.</p>
                          </td>

                          <td ng-if="isedit(inwardsentry.inwards_id)">{{inwardsentry.gvehicle_owner_name}}</td>
                         <td ng-if="isedit(inwardsentry.inwards_id)">{{inwardsentry.product_date}}</td>

                         <td ng-if="isedit(inwardsentry.inwards_id)">
                        <button class="btn btn-success" ng-disabled="!subForm.$valid" ng-click="updateinwards(inwardsentry,$index);"><i class="fa fa-check"></i></button> 

                              <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit(inwardsentry.inwards_id);"><i class="fa fa-close"></i></button>

                               </td>




                           <ng-form>
                       

               
                               

                    































                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

