<div class="userlist" ng-controller="Listsalegasproductctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Sold Gas Products</h2>
                    <div class="clearfix"></div>
                  </div>
                    </p> 
                   <div class="item form-group">
                       <!--  <label class="control-label col-md-3 col-sm-3 col-xs-12">Search for <span class="required">*</span>
                        </label> -->
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..." name="clisearch" >
                          
                        </div>
                      </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Product Quantity</th>
                          <th>Product Price</th>
                          <th>Product Total Price</th>
                          <th>product Sold Date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr ng-repeat="soldproduct in soldproducts | filter:clisearch" ng-form="subForm">
                          <td  ng-if="!isedit(soldproduct.sale_product_id)">{{soldproduct.product_name}}</td>
                          <td ng-if="!isedit(soldproduct.sale_product_id)">{{soldproduct.sale_product_quantity}}</td>
                          <td ng-if="!isedit(soldproduct.sale_product_id)">{{soldproduct.sale_product_price}}</td>
                          <td ng-if="!isedit(soldproduct.sale_product_id)">{{soldproduct.sale_total_price}}</td>
                          <td ng-if="!isedit(soldproduct.sale_product_id)">{{soldproduct.sale_product_date}}</td>

                           <td ng-if="!isedit(soldproduct.sale_product_id)">
                          <button class="btn btn-danger" ng-click="deletesoldproduct(soldproduct.sale_product_id,$index);">Delete</button>
                          <button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(soldproduct.sale_product_id,soldproduct);"><i class="fa fa-edit"></i></button>
                      </td>
                           
                           <ng-form name="updatelistsaleform">
                           <td ng-if="isedit(soldproduct.sale_product_id)">{{soldproduct.product_name}}</td>

                               <td ng-if="isedit(soldproduct.sale_product_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="soldproduct.sale_product_quantity" ng-model="soldproduct.sale_product_quantity" name="sale_product_quantity" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.sale_product_quantity.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.sale_product_quantity.$error.required && subForm.sale_product_quantity.$invalid"> accept digits only.</p>
                          </td>



                         <td ng-if="isedit(soldproduct.sale_product_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="soldproduct.sale_product_price" ng-model="soldproduct.sale_product_price" name="sale_product_price" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.sale_product_price.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.sale_product_price.$error.required && subForm.sale_product_price.$invalid"> accept digits only.</p>
                          </td>


                           <td ng-if="isedit(soldproduct.sale_product_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="soldproduct.sale_total_price" ng-model="soldproduct.sale_total_price" name="sale_total_price" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.sale_total_price.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.sale_total_price.$error.required && subForm.sale_total_price.$invalid"> accept digits only.</p>
                          </td>


                         <td ng-if="isedit(soldproduct.sale_product_id)">{{soldproduct.sale_product_date}}</td>


                          



                      <td ng-if="isedit(soldproduct.sale_product_id)">
                       <button class="btn btn-success" ng-disabled="!subForm.$valid" ng-click="updatesoldproduct(soldproduct,$index);"><i class="fa fa-check"></i></button>

                              <a data-toggle="tooltip" title="Update"> <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button> </a>

                               </td>




                           <ng-form>







                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

