
<div class="userlist" ng-controller="Productstatusctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Of Product Status</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="item form-group">
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..." name="clisearch">
                          
                        </div>
                      </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Available Quantity</th>
                          <th>Modified Date</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr ng-repeat="pstatus in productstatus | filter:clisearch">
                          <td>{{pstatus.product_name}}</td>
                          <td>{{pstatus.tproduct_quantity}}</td>
                          <td>{{pstatus.transaction_date}}</td>
                          <td><span ng-if="pstatus.tproduct_quantity <= 0">Out Of Stock</span>
                          <span ng-if="pstatus.tproduct_quantity > 0">In Stock<span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

