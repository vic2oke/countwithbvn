
<div class="row">
<div class="col-sm-6 col-sm-offset-3" >


    <div class="panel box wow fadeInRight animated" id="box" style="margin-top: 10%;">
         
    <div align='center'>
     <img id="schoolLogo" src="<?php echo $appLogo; ?>" class="img img-circle img-responsive" />
     <h3>System Login</h3>
     </div>
      
        
    <div class="row"> 
     <div class="col-sm-12">
      <div class="col-sm-8 col-sm-offset-2">
                    
       <!--response on login-->  
       <div class="alert alert-danger text-center" ng-show="adminNotFound"> 
                        <div ng-show="adminNotFound">
                            {{ adminNotFound }}
                        </div>
       </div>
          
          <form id="loginForm" name="myForm" class="form-horizontal" novalidate>

            <div class="row">
              <div class="col-sm-12">
              <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input id='userLoginInput' type="text" name="email" ng-model="email"  required placeholder="Official Email Address"  class="form-control"/>                 
             </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-sm-12">
             <div style="font-size:14px;"   ng-show="myForm.$submitted || myForm.email.$touched || myForm.email.$dirty">
                    <span class="text-center text-danger" ng-show="myForm.email.$error.required">Email Address Required</span>
                     <span class="text-center text-danger" ng-show="myForm.email.$error.invalid"> Invalid Email Address</span>
             </div>
              </div>
            </div>

            <br>
            
            
             <div class="row">
              <div class="col-sm-12">
               <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input id='userLoginInput' type="password" name="password" ng-model="password" ng-minlength="3" required placeholder="Given Password in here.."  class="form-control"/>
               </div> 
               </div>
             </div>             
             <div class="row">
              <div class="col-sm-12">
              <div style="font-size:14px;"   ng-show="myForm.$submitted || myForm.password.$touched || myForm.password.$dirty ">
                    <span class="text-center text-danger" ng-show="myForm.password.$error.required"> Password Required</span>
              </div>
              </div>
             </div>
              <br>
   
              
                  <div class="col-sm-8 col-sm-offset-2"> 
                      <button id="userLoginBtn" ng-disabled="myForm.emaill.$error.required  ||  myForm.emaill.$error.invalid ||  myForm.password.$error.required || loading" type="submit" 
                              ng-click="loginAdmin(email,password)" class="btn form-control" style="background-color: #005b96">
                          <img ng-if="loading" src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA=="/>
                          <span ng-if="!loading" style="color:#fff">Submit</span>
                                <span ng-if="loading" style="color:#fff">Verifying..</span>
                      </button>
                  </div>
                 
                 
        </form>
       
    </div>
    </div>
  </div>
    
    
  
   
    
<br><br><br><br>
    </div>
    
    
  
   
    
</div>
</div>