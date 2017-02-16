<div class="userlist" ng-controller="Listsalegasproductctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Sold Gas Products</h2>
                    <div class="clearfix"></div>
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
                        <tr ng-repeat="soldproduct in soldproducts">
                          <td>{{soldproduct.product_name}}</td>
                          <td>{{soldproduct.sale_product_quantity}}</td>
                          <td>{{soldproduct.sale_product_price}}</td>
                          <td>{{soldproduct.sale_total_price}}</td>
                          <td>{{soldproduct.sale_product_date}}</td>
                          <td><button class="btn btn-danger" ng-click="deletesoldproduct(soldproduct.sale_product_id);">Delete</button></td>
                          <td><button class="btn btn-warning" ng-click="edituser(aquacustomers.customer_id,aquacustomers.admin_username);">Edit</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

