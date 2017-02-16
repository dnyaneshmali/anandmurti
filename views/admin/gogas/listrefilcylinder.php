<div class="listnew-conn">
<div class="connectionlist" ng-controller="Listrefilcylinderctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Refill Cylinder</h2>
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
                        <th>refil_cylinder_type</th>
                          <th>refil_payment_details</th>
                          <th>refil_amount</th>
                          
                          <th>refil_date</th>
                        <!--    <th>customer Role</th> -->
                         <!--  <th>Start Date</th> -->
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>




                      <tbody>
                        <tr ng-repeat="refil in refildata | filter:clisearch" ng-form="subForm">
                          <td ng-if="!isedit(refil.refil_id)">{{refil.gcustomer_name}}</td>
                                <td ng-if="!isedit(refil.refil_id)">{{refil.refil_cylinder_type}}</td>
                            <td ng-if="!isedit(refil.refil_id)">{{refil.refil_payment_details }}</td>
                          <td ng-if="!isedit(refil.refil_id)">{{refil.refil_amount}}</td>
                          <td ng-if="!isedit(refil.refil_id)">{{refil.refil_date}}</td>
                        



                          <td ng-if="!isedit(refil.refil_id)">
<!-- <<<<<<< HEAD
                          <a data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleterefil(refil.refil_id,$index);"><i class="fa fa-trash"></i></button></a>
                          <a data-toggle="tooltip" title="Edit"><button class="btn btn-warning" ng-value="{{btnName}}" ng-click="setedit(refil.refil_id,refil);"><i class="fa fa-edit"></i></button></a>
=======
 -->
                          
                          <a data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleterefil(refil.refil_id,$index);"><i class="fa fa-trash"></i></button></a>
                          <a data-toggle="tooltip" title="Edit"><button class="btn btn-warning" ng-value="{{btnName}}" ng-click="setedit(refil.refil_id,refil);"><i class="fa fa-edit"></i></button></a>

                        </td>

                          <ng-form name="updaterefilform">
                            <td ng-if="isedit(refil.refil_id)">{{refil.gcustomer_name}}</td>

                         <td ng-if="isedit(refil.refil_id)">{{refil.refil_cylinder_type}}</td>

                          <td ng-if="isedit(refil.refil_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="refil.refil_payment_details" ng-model="refil.refil_payment_details" name="refil_payment_details" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.refil_payment_details.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.refil_payment_details.$error.required && subForm.refil_payment_details.$invalid"> accept digits only.</p>
                          </td>






                            <td ng-if="isedit(refil.refil_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="refil.refil_amount" ng-model="refil.  refil_amount" name="refil_amount" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.refil_amount.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.refil_amount.$error.required && subForm. refil_amount.$invalid"> accept digits only.</p>
                          </td>



                           <td ng-if="isedit(refil.refil_id)">{{refil.refil_date}}</td>
<<<<<<< HEAD
                         <td ng-if="isedit(refil.refil_id)">
                               <a data-toggle="tooltip" title="Cancle"> <button class="btn btn-success"  ng-disabled="!subForm.$valid" ng-click="updaterefil(refil,$index);"><i class="fa fa-check"></i></button> </a>
                               <a data-toggle="tooltip" title="Cancle"> <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button></a>
                            </td>
                            <ng-form>
                       
=======
>>>>>>> 7d54da58adc7196490ab8a39a4490768584f0c91


                       <td ng-if="isedit(refil.refil_id)">
                        <button class="btn btn-success" ng-disabled="!subForm.$valid" ng-click="updategasrefil(refil);"><i class="fa fa-check"></i></button> 

                              <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit(refil.refil_id);"><i class="fa fa-close"></i></button>

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