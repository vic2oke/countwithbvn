<?php 
include '../app.php';
 ?>




<div class="container panel box wow animated fadeInRight" id="box"> 

<div  id="box" ng-repeat="person in persons">  
   <div class="panel"> 
       <h1 class="text-center text-danger">Result Found</h1>
       <h2 class="text-center">NAME: {{person.title}} {{person.lname}} {{person.fname}} {{person.othernames}}</h2>
                   
                <div class="row">
                <div class="col-sm-1 col-sm-offset-3">
                    <img class="img img-circle" src="{{person.image}}" style="width:100%" />
                </div>
                <div class="col-sm-8">
                <div class="col-sm-4">
                    <p class="text-left" style="font-size: 18px;">
                        <i class="fa fa-user"></i> Gender: {{person.sex}}<br>
                        <i class="fa fa-globe"></i>  State of Origin: {{person.stateoforigin}}<br>
                        <i class="fa fa-globe"></i>  LGA of Origin: {{person.stateoforigin}}<br>
                        <i class="fa fa-qrcode"></i>  BVN: {{person.bvn}}<br>
                    </p>
                </div>
                  <div class="col-sm-4">
                   <p class="text-left" style="font-size: 18px;">
                        <i class="fa fa-car"></i> Owned Cars: {{person.cars}}<br>
                        <i class="fa fa-home"></i>  Owned Houses: {{person.houses}}<br>
                        <i class="fa fa-briefcase"></i>  Owned Businesses: {{person.businesses}}<br>
                    </p>                  
                  </div>
                </div>
               </div>
       <br>
   </div>
</div>
    
    <br>
    <h2 class="text-center text-info">Confirm Enumeration with BVN</h2>
    <div class="line"></div>    
   
    <div class="row">  
      <div class="col-sm-8 col-sm-offset-2">
          
       <!--response on login-->  
       <div class="alert alert-danger text-center" ng-show="bvnNotFound"> 
                        <div ng-show="bvnNotFound">
                            {{ bvnNotFound }}
                        </div>
       </div>
          
       <form id="loginForm" name="myForm" class="form-horizontal" novalidate>

        <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
              <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                    <input type="text" name="bvn" ng-model="bvn"  required placeholder="Enter BVN Number"  class="form-control" style="border:1px solid #000;"/>                 
             </div>
     
             <div style="font-size:14px;"   ng-show="myForm.$submitted || myForm.bvn.$touched || myForm.bvn.$dirty">
                    <span class="text-center text-danger" ng-show="myForm.bvn.$error.required">BVN Number Required</span>
             </div>
              </div>
         </div>
     
              <br>
              
        <div class="col-sm-8 col-sm-offset-2"> 
                      <button id="userLoginBtn" ng-disabled="myForm.bvn.$error.required || loading" type="submit" 
                              ng-click="verifyCitizen(bvn)" class="btn form-control">
                          <img ng-if="loading" src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA=="/>
                                <span ng-if="!loading" style="color: #fff">Confirm Enumeration</span>
                                <span ng-if="loading" style="color: #fff">Verifying..</span>
                      </button>
         </div>
                 
              
      </form>
    </div>
    </div>  
        
    <br><br><br><br>

</div>



