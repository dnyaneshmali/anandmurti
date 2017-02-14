<div class="refill-cy">
<h1>Refil Cylinder</h1>
<div class="refilform" ng-controller="Refilcylinderctrl">
<form name="refilform" class="form-horizontal form-label-left" nonvalidate>
                     <!--  <span class="section">Personal Info</span> -->

  
  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Customer <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="refil.customer" name="customer">
                            <option ng-repeat="clist in connectiondetails" value="{{clist.gcustomer_id}}">{{clist.gcustomer_name}}</option>
                          </select>
                        </div>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Connection Type <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="refil.type" name="type" >
                            <option ng-repeat="uconn in userconnections" ng-if="uconn.connection_type==1" value="{{uconn.connection_type}}">2 Kg</option>
                            <option ng-repeat="uconn in userconnections" ng-if="uconn.connection_type==2" value="{{uconn.connection_type}}">5 Kg</option>
                            <option ng-repeat="uconn in userconnections" ng-if="uconn.connection_type==3" value="{{uconn.connection_type}}">12 Kg</option>
                          </select>
                        </div>
                        </div>
                      </div>


                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="      connection_cylinder_deposit">Refil Payment Details<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" ng-model="refil.connection_cylinder_deposit" id="    connection_cylinder_deposit" class="form-control" name="connection_cylinder_deposit" />
                        </div>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="      connection_depreciation"> Refil Amount<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" ng-model="refil.amount" id="amount" class="form-control" name="amount"/>
                        </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(refil)" id="send" type="submit" class="btn btn-success">Submit</button>
                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
</div>