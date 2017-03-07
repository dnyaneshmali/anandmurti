<div class="listaqua-cust">
<div class="userlist" ng-controller="Connectioninvoicectrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Connection Invoice</h2>
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
                          <th>Invoice Id</th>
                          <th>Connection Id</th> 
                          <th>Customer Id</th>
                          <th>Customer Name</th>
                          <th>Invoice Tax</th>
                          <th>Invoice Amount</th>
                          <th>Invoice Date</th>
                          <th>Invoice Status</th>
                          <th colspan="2">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr ng-repeat="conndata in conninvoicedata | filter:clisearch" ng-form="subForm">
                          <td>{{conndata.cinvoice_id}}</td>
                          <td>{{conndata.connection_id}}</td>
                          <td>{{conndata.gcustomer_id}}</td>
                          <th>{{conndata.gcustomer_name}}</th>
                          <td>{{conndata.cinvoice_tax}}</td>
                          <td>{{conndata.cinvoice_amount}}</td>
                          <td>{{conndata.cinvoice_date}}</td>
                          <td ng-if="conndata.cinvoice_status==0"><a data-toggle="tooltip" ng-click="setcstatus(conndata.cinvoice_id);" title="Pending"><button class="btn btn-danger"><i class="fa fa-spinner"></i></button></a></td>
                          <td ng-if="conndata.cinvoice_status==1"><a data-toggle="tooltip" ng-click="unsetcstatus(conndata.cinvoice_id);" title="Complete"><button class="btn btn-success"><i class="fa fa-check-circle"></i></button></a></td>
                          
                          <td>
                            <a data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleteconninvoice(conndata.cinvoice_id,$index);"><i class="fa fa-trash"></i></button></a>
                        </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
        </div>
