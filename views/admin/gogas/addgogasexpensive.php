<div class="adda-order">
<h1> Add Gogas Expenses</h1>
<div class="addexpensiveform" ng-controller="Addgogasexpensive">
<form name="addexpensiveform" class="form-horizontal form-label-left" nonvalidate>

                    <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
                      <span class="section">Personal Info</span> -->

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Person Name <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addexpensiveform.person_name.$invalid && !addexpensiveform.person_name.$pristine }" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="person_name" ng-model="expensive.person_name" id="person_name" class="form-control" name="person_name" required />
                        </div>
                          <p class="val-style" ng-show="addexpensiveform.person_name.$invalid && !addexpensiveform.person_name.$pristine" class="help-block"> person name is required.</p>
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Description <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addexpensiveform.exp_desc.$invalid && !addexpensiveform.exp_desc.$pristine }" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="expensive description" ng-model="expensive.exp_desc" id="exp_desc" class="form-control" name="exp_desc" required />
                        </div>
                          <p class="val-style" ng-show="addexpensiveform.exp_desc.$invalid && !addexpensiveform.exp_desc.$pristine" class="help-block"> Description is required.</p>
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Expensive amount <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addexpensiveform.exp_amount.$invalid && !addexpensiveform.exp_amount.$pristine }" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="expensive Amount"  ng-pattern="/^\d+$/" ng-model="expensive.exp_amount" id="exp_amount" class="form-control" name="exp_amount" required />
                        </div>
                          <p class="val-style" ng-show="addexpensiveform.exp_amount.$invalid && !addexpensiveform.exp_amount.$pristine" class="help-block"> amount is required in digits.</p>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Date <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="date" placeholder="Enter date here" ng-model="expensive.exp_date" id="exp_date" class="form-control" name="exp_date" required />
                        </div>
                          <p class="val-style" ng-show="addexpensiveform.exp_date.$invalid && !addexpensiveform.exp_date.$pristine" class="help-block"> date is required.</p>
                        </div>
                      </div>

                       
                     
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" ng-click="reset()" ng-disabled="!addexpensiveform.$valid" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(expensive)"  ng-disabled="!addexpensiveform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                   
                        </div>
                      </div>
                    </form>
                     </div>

                    