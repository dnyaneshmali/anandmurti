<div class="listvehiclectrl " ng-controller="Listgasvehiclectrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Vehicle Details</h2>
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
                          <th>Vehicle Owner Name</th>
                          <th>Vehicle Number</th>
                          <th>Vehicle Contact Number</th>
                          <th colspan="3">Action</th>
                          
                        </tr>
                      </thead>
              <tbody>
                        <tr ng-repeat="listvehicle in data | filter:clisearch" ng-form="subForm">

                          <td ng-if="!isedit(listvehicle.gvehicle_id)">{{listvehicle.gvehicle_owner_name}}</td>
                          <td ng-if="!isedit(listvehicle.gvehicle_id)" >{{listvehicle.gvehicle_number}}</td>
                          <td ng-if="!isedit(listvehicle.gvehicle_id)">{{listvehicle.gvehicle_contact_number}}</td>

                              <td ng-if="!isedit(listvehicle.gvehicle_id)">
                            <a data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deletevehicle(listvehicle.gvehicle_id);"><i class="fa fa-trash"></i></button></a>

                          <a data-toggle="tooltip" title="Edit"><button class="btn btn-warning" ng-value="{{btnName}}" ng-click="setedit(listvehicle.gvehicle_id,listvehicle);"><i class="fa fa-edit"></i></button></a>
                              </td>

                                <ng-form name="updatevehicleform">
                                <td ng-if="isedit(listvehicle.gvehicle_id)">
                          <input type="text"  ng-value="listvehicle.gvehicle_owner_name" ng-model="listvehicle.gvehicle_owner_name" name="gvehicle_owner_name" style="width:auto;" required>
                           <p style="color:red;" ng-show="subForm.gvehicle_owner_name.$error.required"> required field.</p>
                          </td>

                          <td ng-if="isedit(listvehicle.gvehicle_id)">
                          <input type="text"  ng-value="listvehicle.gvehicle_number" ng-model="listvehicle.gvehicle_number" name="gvehicle_number" style="width:auto;" required>
                           <p style="color:red;" ng-show="subForm.gvehicle_number.$error.required"> required field.</p>
                          </td>

                          <td ng-if="isedit(listvehicle.gvehicle_id)">
                          <input type="text"  ng-value="listvehicle.gvehicle_contact_number" ng-pattern="/^[0-9]{10}$/" ng-model="listvehicle.gvehicle_contact_number" name="gvehicle_contact_number" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.gvehicle_contact_number.$error.required"> Number is required.</p>
                           <p style="color:red;" ng-show="!subForm.gvehicle_contact_number.$error.required && subForm.gvehicle_contact_number.$invalid"> accept 10 digits only.</p>
                          </td>


                                      <td ng-if="isedit(listvehicle.gvehicle_id)">

                              <a data-toggle="tooltip" title="Update"><button class="btn btn-danger" ng-disabled="!subForm.$valid" ng-click="updatevehicle(listvehicle,$index);"><i class="fa fa-check"></i></button> </a>

                              <a data-toggle="tooltip" title="Cancle"><button class="btn btn-warning" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button></a>
                          </td>
                          <ng-form>
                 </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>

