<div class="listaqua-cust">
<div class="userlist" ng-controller="Aquaorderinvoice">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List of Aqua Order Invoice</h2>
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
                          <th>Order Id</th> 
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
                        <tr ng-repeat="invoicedata in aquainvoicedata | filter:clisearch" ng-form="subForm">
                          <td>{{invoicedata.invoice_id}}</td>
                          <td>{{invoicedata.order_id}}</td>
                          <td>{{invoicedata.acustomer_id}}</td>
                          <th>{{invoicedata.acustomer_name}}</th>
                          <td>{{invoicedata.invoice_tax}}</td>
                          <td>{{invoicedata.invoice_amount}}</td>
                          <td>{{invoicedata.invoice_date}}</td>
                          <td ng-if="invoicedata.invoice_status==0"><a data-toggle="tooltip" ng-click="setistatus(invoicedata.invoice_id);" title="Pending"><button class="btn btn-danger"><i class="fa fa-spinner"></i></button></a></td>
                          <td ng-if="invoicedata.invoice_status==1"><a data-toggle="tooltip" ng-click="unsetistatus(invoicedata.invoice_id);" title="Complete"><button class="btn btn-success"><i class="fa fa-check-circle"></i></button></a></td>
                          <td>
                            <a data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleteinvoice(invoicedata.invoice_id,$index);"><i class="fa fa-trash"></i></button></a>
                        </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
        </div>
