<div class="listnew-conn">
<div class="connectionlist" ng-controller="Listrefilcylinderctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <div class="item form-group">
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..."  name="clisearch" >
                          
                        </div>
                      </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Customer Name</th>
                          <th>Cylinder Type</th>
                          <th>Payment Details</th>
                          <th>Refil Amount</th>
                          <th>Refil Date</th> 
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="refil in refildata | filter:clisearch">
                          <td ng-if="!isedit(refil.connection_id)">{{refil.gcustomer_name}}</td>
                          <td ng-if="refil.refil_cylinder_type==1">2 Kg</td>
                          <td ng-if="refil.refil_cylinder_type==2">5 Kg</td>
                          <td ng-if="refil.refil_cylinder_type==3">12 Kg</td>
                          <td>{{refil.refil_payment_details}}</td>
                          <td>{{refil.refil_amount}}</td>
                          <td>{{refil.refil_date}}</td>
                         

                             
              
                              <td ng-if="!isedit(refil.connection_id)">

                          <button class="btn btn-danger" ng-click="deleterefil(refil.refil_id,$index);">Delete</button>
                          <button class="btn btn-warning" ng-value="{{btnName}}" ng-click="setedit(refil.connection_id);">Edit</button>
                        </td>

                            <ng-form name="updateconnectionform">
                   <td ng-if="isedit(refil.connection_id)">{{refil.gcustomer_name}}</td>


                            

                             <td ng-if="isedit(Connection.connection_id)">
                          <input type="text" ng-value="Connection.connection_cylinder_deposit" ng-model="Connection.connection_cylinder_deposit" name="connection_cylinder_deposit" style="width:auto;" required>
                          <p style="color:red;" ng-show="updateconnectionform.connection_cylinder_deposit.$invalid && !updateconnectionform.connection_cylinder_deposit.$pristine" class="help-block"> fullname is required.</p>
                          </td>

                          <td ng-if="isedit(Connection.connection_id)">
                          <input type="text" ng-value="Connection.connection_depreciation" ng-model="Connection.connection_depreciation" name="connection_depreciation" style="width:auto;" required>
                          <p style="color:red;" ng-show="updateconnectionform.connection_depreciation.$invalid && !updateconnectionform.connection_depreciation.$pristine" class="help-block"> fullname is required.</p>
                          </td>


                        <td ng-if="isedit(Connection.connection_id)">
                          <input type="text" ng-value="Connection.connection_hotplate" ng-model="Connection.connection_hotplate" name="connection_hotplate" style="width:auto;" required>
                          <p style="color:red;" ng-show="updateconnectionform.connection_hotplate.$invalid && !updateconnectionform.connection_hotplate.$pristine" class="help-block"> fullname is required.</p>
                          </td>


                          <td ng-if="isedit(Connection.connection_id)">
                          <input type="text" ng-value="Connection.connection_passbook" ng-model="Connection.connection_passbook" name="connection_passbook" style="width:auto;" required>
                          <p style="color:red;" ng-show="updateconnectionform.connection_passbook.$invalid && !updateconnectionform.connection_passbook.$pristine" class="help-block"> fullname is required.</p>
                          </td>

                           <td ng-if="isedit(Connection.connection_id)">
                          <input type="text" ng-value="Connection.connection_stamp" ng-model="Connection.connection_stamp" name="connection_stamp" style="width:auto;" required>
                          <p style="color:red;" ng-show="updateconnectionform.connection_stamp.$invalid && !updateconnectionform.connection_stamp.$pristine" class="help-block"> fullname is required.</p>
                          </td>


                          <td ng-if="isedit(Connection.connection_id)">
                          <input type="text" ng-value="Connection. connection_tube" ng-model="Connection.connection_tube" name="connection_tube" style="width:auto;" required>
                          <p style="color:red;" ng-show="updateconnectionform.connection_tube.$invalid && !updateconnectionform.connection_tube.$pristine" class="help-block"> fullname is required.</p>
                          </td>

                           <td ng-if="isedit(Connection.connection_id)">
                          <input type="text" ng-value="Connection.connection_lighter" ng-model="Connection.connection_lighter" name="connection_lighter" style="width:auto;" required>
                          <p style="color:red;" ng-show="updateconnectionform.connection_lighter.$invalid && !updateconnectionform.connection_lighter.$pristine" class="help-block"> fullname is required.</p>
                          </td>
                           <td ng-if="isedit(Connection.connection_id)">{{Connection. connection_date}}</td>



                      <td ng-if="isedit(Connection.connection_id)"><button class="btn btn-success" ng-click="updategasconnection(Connection);"><i class="fa fa-check"></i></button> 

                              <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit(Connection.connection_id);"><i class="fa fa-close"></i></button>

                               </td>




                           <ng-form>
                       </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
</div>