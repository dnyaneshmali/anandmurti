<h1>Add Jar details</h1>
<div class="addjardetails" ng-controller="Addjardetailsctrl">
<form name="addjardetailsform" class="form-horizontal form-label-left" nonvalidate>
                      <span class="section">Jar Info</span>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select jar type<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" ng-model="addjardetails.jar_type" name="jar_type"class="{'has-errors' : addjardetailsform.jar_type.$invalid, 'no-errors' : addjardetailsform.jar_type.$valid}" ng-required="true">
                            <option value="" selected>Jar Type</option>
                            <option value="normal-jar">Normal jar </option>
                            <option value="cool-jar">Cool jar</option>
                              <option value="only-water">Only water</option>
                          </select>
                            <div class="error-container" ng-show="addjardetailsform.jar_type.$dirty && addjardetailsform.jar_type.$invalid" ng-messages="addjardetailsform.jar_type.$error">
                         <div style="color:red;" class="error" ng-message="required">select Jar type </div>
                          </div>
                         
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addjardetails.jar_price" ng-pattern="/^\d+$/" id="jar_price" class="form-control" name="jar_price" required />
                            <p style="color:red;" ng-show="addjardetailsform. jar_price.$invalid && !addjardetailsform.jar_price.$pristine" class="help-block"> Prize required accept only digits.</p>
                        </div>
                      </div>
                        
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit"  class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(addjardetails)" ng-disabled="!addjardetailsform.$valid" id="send" type="submit" class="btn btn-success">save</button>
                        </div>
                      </div>
                      {{msg}}
                    </form>
                     </div>
