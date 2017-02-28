<div class="userlist" ng-controller="Listgogasproductctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Go Gas Products</h2>
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
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..." name="clisearch" >
                          
                        </div>
                      </div>
                   <!--  <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p> -->
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>product name</th>
                          <th>product price</th>
                          <th>Product category</th>
                          <th>Product company</th>
                          <th>product tax in %</th>    
                        
                          <th>product date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="gogasproduct in gasproducts   | filter:clisearch" ng-form="subForm">
                          <td ng-if="!isedit(gogasproduct.product_id)">{{gogasproduct.product_name}}</td>
                          <td ng-if="!isedit(gogasproduct.product_id)">{{gogasproduct.product_price}}</td>
                          <td ng-if="!isedit(gogasproduct.product_id)">{{gogasproduct.product_category}}</td>
                          <td ng-if="!isedit(gogasproduct.product_id)">{{gogasproduct.product_company}}</td>
                    <td ng-if="!isedit(gogasproduct.product_id)">{{gogasproduct.product_tax}}</td>
                          <td ng-if="!isedit(gogasproduct.product_id)">{{gogasproduct.product_date}}</td>


                            <td ng-if="!isedit(gogasproduct.product_id)">
                        <a data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleteproduct(gogasproduct.product_id,$index);"><i class="fa fa-trash"></i></button></a>
                          <a data-toggle="tooltip" title="Edit"><button class="btn btn-warning" value="{{btnName}}"  ng-click="setedit(gogasproduct.product_id,gogasproduct);"><i class="fa fa-edit"></i></button></a>
                        </td>

                         <ng-form name="listproductsform">
                         <td ng-if="isedit(gogasproduct.product_id)">{{gogasproduct.product_name}}</td>


                        <td ng-if="isedit(gogasproduct.product_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="gogasproduct.product_price" ng-model="gogasproduct.product_price" name="product_price" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.product_price.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.product_price.$error.required && subForm.product_price.$invalid"> accept digits only.</p>
                          </td>

                             <td ng-if="isedit(gogasproduct.product_id)">{{gogasproduct.product_category}}</td>



                               <td ng-if="isedit(gogasproduct.product_id)">
                          <input type="text"  ng-value="gogasproduct.product_company" ng-model="gogasproduct.product_company" name="product_company" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.product_company.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.product_company.$error.required && subForm.product_company.$invalid"> accept digits only.</p>
                          </td>

                           <td ng-if="isedit(gogasproduct.product_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="gogasproduct.product_tax" ng-model="gogasproduct.product_tax" name="product_tax" style="width:auto;" required>%
                          <p style="color:red;" ng-show="subForm.product_tax.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.product_tax.$error.required && subForm.product_tax.$invalid"> accept digits only.</p>
                          </td>

                               <td ng-if="isedit(gogasproduct.product_id)">{{gogasproduct.product_date}}</td>




                             <td ng-if="isedit(gogasproduct.product_id)">

                              <a data-toggle="tooltip" title="Edit"><button class="btn btn-success"  ng-disabled="!subForm.$valid" ng-click="updategasproduct(gogasproduct);"><i class="fa fa-check"></i></button></a> 

                              <a data-toggle="tooltip" title="Edit"><button class="btn btn-danger" value="{{btnName}}"  ng-click="unsetedit($index);"><i class="fa fa-close"></i></button></a>


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

