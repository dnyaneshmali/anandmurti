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
                          <th>product tax</th>
                        
                          <th>product date</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="gogasproduct in gasproducts">
                          <td>{{gogasproduct.product_name}}</td>
                          <td>{{gogasproduct.product_price}}</td>
                          <td>{{gogasproduct.product_category}}</td>
                          <td>{{gogasproduct.product_company}}</td>
                          <td>{{gogasproduct.product_tax}}</td>
                          <td>{{gogasproduct.product_date}}</td>
                          <td><a data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleteproduct(gogasproduct.product_id);"><i class="fa fa-trash"></i></button></a></td>
                          <td><a data-toggle="tooltip" title="Edit"><button class="btn btn-warning" ng-click="edituser(aquacustomers.customer_id,aquacustomers.admin_username);"><i class="fa fa-edit"></i></button></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

