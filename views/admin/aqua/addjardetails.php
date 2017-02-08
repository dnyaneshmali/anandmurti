<h1>Add Jar details</h1>
<div class="addjardetails" ng-controller="Addjardetailsctrl">
<form name="addjardetailsform" class="form-horizontal form-label-left" nonvalidate>
                      <span class="section">Jar Info</span>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select jar type<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" ng-model="addjardetails.jar_type" name="jar_type">
                            <option value="" selected>Jar Type</option>
                            <option value="normal-jar">Normal jar </option>
                            <option value="cool-jar">Cool jar</option>
                              <option value="only-water">Only water</option>
                          </select>
                         
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addjardetails.jar_price" id="jar_price" class="form-control" name="jar_price" required />
                        </div>
                      </div>
                        
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(addjardetails)" ng-disabled="!addjardetailsform.$valid" id="send" type="submit" class="btn btn-success">save</button>
                        </div>
                      </div>
                      {{msg}}
                    </form>
                     </div>
