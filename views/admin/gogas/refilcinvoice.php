<div class="listaqua-cust">
<div class="userlist" ng-controller="Refilinvoicectrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Refil Cylinder Invoice</h2>
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
                          <th>Transaction Id</th> 
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
                        <tr ng-repeat="refildata in refilinvoicedata | filter:clisearch" ng-form="subForm">
                          <td>{{refildata.rinvoice_id}}</td>
                          <td>{{refildata.refil_id}}</td>
                          <td>{{refildata.gcustomer_id}}</td>
                          <th>{{refildata.gcustomer_name}}</th>
                          <td>{{refildata.rinvoice_tax}}</td>
                          <td>{{refildata.rinvoice_amount}}</td>
                          <td>{{refildata.rinvoice_date}}</td>
                          <td ng-if="refildata.rinvoice_status==0"><a data-toggle="tooltip" ng-click="setrstatus(refildata.rinvoice_id);" title="Pending"><button class="btn btn-danger"><i class="fa fa-spinner"></i></button></a></td>
                          <td ng-if="refildata.rinvoice_status==1"><a data-toggle="tooltip" ng-click="unsetrstatus(refildata.rinvoice_id);" title="Complete"><button class="btn btn-success"><i class="fa fa-check-circle"></i></button></a></td>
                          
                          <td>
                            <a data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleterefilinvoice(refildata.rinvoice_id,$index);"><i class="fa fa-trash"></i></button></a>
                        </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
        </div>
