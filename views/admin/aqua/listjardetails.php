<div class="listjardetails" ng-controller="Listjardetailsctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Jar Details</h2>
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
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002;Search for ..." name="clisearch" >
                          
                        </div>
                      </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Jar Type</th>
                          <th>Price</th>
                          <th colspan="2">Action</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="listjar in data | filter:clisearch"  ng-form="subForm">
                          <td ng-if="!isedit(listjar.jar_id)">{{listjar.jar_type}}</td>
                          <td ng-if="!isedit(listjar.jar_id)">{{listjar.jar_price}}</td>

                          <td ng-if="!isedit(listjar.jar_id)">
                            <button class="btn btn-danger" ng-click="deletejar(listjar.jar_id,$index);"><i class="fa fa-trash"></i></button>      
                          <button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(listjar.jar_id,listjar);"><i class="fa fa-edit"></i></button>
                        </td>

                         <ng-form name="listjardetailsform">
                            <td ng-if="isedit(listjar.jar_id)">
                          <input type="text" ng-value="listjar.jar_type" ng-model="listjar.jar_type" name="jar_type" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.jar_type.$error.required"> jartype is required.</p>
                          </td>
                          
                            <td ng-if="isedit(listjar.jar_id)">
                          <input type="text" ng-value="listjar.jar_price" ng-pattern="/^\d+$/" ng-model="listjar.jar_price" id="jar_price"  class="form-control" name="jar_price" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.jar_price.$error.required"> jarprice is required.</p>
                           <p style="color:red;" ng-show="!subForm.jar_price.$error.required && subForm.jar_price.$invalid"> accept digits only.</p>
                          </td>


                           <td ng-if="isedit(listjar.jar_id)">

                              <button class="btn btn-success" ng-click="updatejardetails(listjar,$index);"><i class="fa fa-check"></i></button> 

                              <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button>


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

