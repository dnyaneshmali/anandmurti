<div class="userlist" ng-controller="Listaquaproductctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Aqua Products</h2>
                    <ul class="nav navbar-right panel_toolbox">
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
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- <p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p> -->

                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Search for <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="clisearch" id="clisearch"  name="clisearch" style="width:100%">
                          
                        </div>
                      </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>product name</th>
                          <th>product prize</th>
                          <th>Product category</th>
                          <th>Product company</th>
                          <th>product tax</th>
                          
                          <th>product date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="aquaproduct in data |filter:clisearch">
                          <td>{{aquaproduct.product_name}}</td>
                          <td>{{aquaproduct.product_prize}}</td>
                          <td>{{aquaproduct.Product_category}}</td>
                          <td>{{aquaproduct.Product_company}}</td>
                          <td>{{aquaproduct.product_tax}}</td>
                          <td>{{aquaproduct.product_date}}</td>
                          <td><button class="btn btn-danger" ng-click="deleteuser(aquaproduct.product_id,$index);">Delete</button></td>
                          <td><button class="btn btn-warning" ng-click="edituser(aquacustomers.customer_id,aquacustomers.admin_username);">Edit</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

