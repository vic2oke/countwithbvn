

  <!--Student Courses Modal-->
 <div class="modal fade" id="passform" role="dialog">
 	<div class="modal-dialog">
            <div class="modal-content">
                
                <button class="btn pull-right" type="button" data-dismiss="modal" >
                         <i class="fa fa-times-circle fa-2x"></i>
               </button>

    <br><br> 
    
    <h4 class="text-center">Set New Password</h4>
   
    
    <form name="Form" class="form-horizontal" novalidate>
   <div class="row">
        <div class="col-sm-10 col-sm-offset-1"> 
         <div class="input-group">
                    <span class="input-group-addon" style="border:1px solid #428bca;color:#fff;background:#428bca;"><i class="fa fa-lock"></i> Old Password</span>
                    <input type="password" name="oldpassword" ng-model="oldpassword" required class="form-control" style="color:#000;font-size:16px;border-top-right-radius:5px;border-bottom-right-radius:5px;height:50px;border:1px solid #428bca;"/>                 
         </div>
         <div class="col-sm-12" style="font-size:14px;"   ng-show="Form.$submitted || Form.oldpassword.$touched || Form.oldpassword.$dirty">
                    <span style="color:red" class="text-center text-warning" ng-show="Form.oldpassword.$error.required"><i class="fa fa-info-circle"></i> Please Enter Old Password</span>
         </div>
        </div>
   </div>
      <br>
         
       <div class="row">    
        <div class="col-sm-10 col-sm-offset-1"> 
         <div class="input-group">
                    <span class="input-group-addon" style="border:1px solid #428bca;color:#fff;background:#428bca;"><i class="fa fa-lock"></i> New Password</span>
                    <input type="password" name="newpassword" ng-model="newpassword" required class="form-control" style="color:#000;font-size:16px;border-top-right-radius:5px;border-bottom-right-radius:5px;height:50px;border:1px solid #428bca;"/>                 
         </div>
         <div class="col-sm-12" style="font-size:14px;"   ng-show="Form.$submitted || Form.newpassword.$touched || Form.newpassword.$dirty">
                    <span style="color:red" class="text-center text-warning" ng-show="Form.newpassword.$error.required"><i class="fa fa-info-circle"></i> Please Enter New Password</span>
         </div>
         </div>
       </div>
          <br> 
          
          
         <div class="row">
           <div class="col-sm-10 col-sm-offset-1"> 
          <div class="input-group">
                    <span class="input-group-addon" style="border:1px solid #428bca;color:#fff;background:#428bca;"><i class="fa fa-lock"></i> Confirm Password</span>
                    <input type="password" name="cnewpassword" ng-model="cnewpassword" required class="form-control" style="color:#000;font-size:16px;border-top-right-radius:5px;border-bottom-right-radius:5px;height:50px;border:1px solid #428bca;"/>                 
         </div>
         <div class="col-sm-12" style="font-size:14px;"   ng-show="Form.$submitted || Form.cnewpassword.$touched || Form.cnewpassword.$dirty">
                    <span style="color:red" class="text-center text-warning" ng-show="Form.cnewpassword.$error.required"><i class="fa fa-info-circle"></i> Please Confirm New Password</span>
                    <br>
                    <span style="color:red" class="text-center text-warning" ng-if="newpassword != cnewpassword"><i class="fa fa-info-circle"></i> Password Don't Match</span>
         </div>
         </div>
         </div>
         
          <br>
       
         <div class="row">
           <div class="col-sm-8 col-sm-offset-2">
               <button style="background-color: #2196F3" ng-disabled="Form.oldpassword.$error.required || 
                       Form.newpassword.$error.required  || 
                       Form.cnewpassword.$error.required || 
                       newpassword != cnewpassword"  ng-click="savePassword(oldpassword,newpassword)" class="btn form-control">
              <img ng-if="loading" src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA=="/> 
               <span ng-if="!loading"><i class="fa fa-save"></i> Save</span>
               <span ng-if="loading">Saving..</span> 
          </button>
          </div>
         </div>
          
          
         </form>
    
</div>
</div>
           
 </div>
  
  
<div class="container" id="box" style="padding:0px;"> 
        <button id="topBtn" data-toggle="modal" data-target="#passform"  class="btn btn-danger pull-right">
              <i class="fa fa-lock"></i> Change Password
        </button>
  </div>  
<div class="container panel box wow animated fadeInRight" id="box">   
 <br>
        
<div class="row" style="padding:0px;">
                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color: #ED8D00;color: #FFF">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" ng-repeat="male in males">{{male.tmales}}</div>
                                    <div>People</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color: #f9ce1d;color: #FFF">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-briefcase fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" ng-repeat="female in females">{{female.tfemales}}</div>
                                    <div>Businesses</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color: #0f0;color: #FFF">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-car fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" ng-repeat="car in cars">{{car.tcars}}</div>
                                    <div>Cars</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6">
                    <div class="panel" style="background-color: #2196F3;color: #FFF">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-home fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge" ng-repeat="house in houses">{{house.houses}}</div>
                                    <div>Houses</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
    
    
 <br>
</div>



<!--<div class="container panel box wow animated fadeInRight" id="box">   
 <br>
 <div class="progress progress-sm m-t-sm">
      <div class="progress-bar bg-primary" data-toggle="tooltip" data-original-title="20%" style="width:20%"></div>
</div>
 <br>
</div>-->


<div class="container panel box wow animated fadeInRight" id="box">    
    <div class="row">
     <div class="col-sm-6">
            <div id="chart2" style="width:100%; height: 300px;"></div>
      </div>
      <div class="col-sm-6">
             <div id="chart3" style="width:100%; height: 300px;"></div>
      </div>
    </div>            
 <br><br>
</div>




<div class="container panel box wow animated fadeInRight" id="box"> 
  <div class="row">
        <div class="col-sm-12">
                <div id="chart" style="width:100%; height: 300px"></div>        
                <br><br>
        </div>
  </div>  
</div>



<div class="container panel box wow animated fadeInRight" id="box"> 
  <div class="row">
        <div class="col-sm-12">
                <div id="chart4" style="width:100%; height: 300px"></div>        
                <br><br>
        </div>
  </div>  
</div>




<div class="container panel box wow animated fadeInRight" id="box"> 
  <div class="row">
        <div class="col-sm-12">
                <div id="chart5" style="width:100%; height: 300px"></div>        
                <br><br>
        </div>
  </div>  
</div>