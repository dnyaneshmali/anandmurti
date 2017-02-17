<div class="userlist" ng-controller="Listgogasproductctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Gas Inwards</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
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
                        <tr ng-repeat="inwardsentry in gasinwards">
                          <td>{{inwardsentry.product_name}}</td>
                          <td>{{inwardsentry.product_quantity}}</td>
                          <td>{{inwardsentry.total_price}}</td>
                          <td>{{inwardsentry.distributor_name}}</td>
                          <td>{{inwardsentry.gvehicle_owner_name}}</td>
                          <td>{{inwardsentry.product_date}}</td>
                          <td><button class="btn btn-danger" ng-click="deleteinwards(inwardsentry.inwards_id);">Delete</button></td>
                          <td><button class="btn btn-warning" ng-click="edituser(aquacustomers.customer_id,aquacustomers.admin_username);">Edit</button></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

