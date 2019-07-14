
<style>
.link:hover{
        color: #fff;
}
      
.picture:hover{
    border-color: #2ca8ff;
}

.picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
}

.picture-src{
    width: 100%;
    
}
h5{
    margin-bottom:0px;
    margin-top:5px;
}
</style>


<div class="container panel box  wow animated fadeInRight" id="box">     
    <br>
    <h2 class="text-center text-info">Citizen Profile Registration (BVN)</h2>
    <div class="line"></div>
    
                 <form class="form-horizontal" name="form" novalidate>
                    
                     <div class="row">
                    <div class="col-sm-8 col-sm-offset-2"> 
                         <h3>BIO DATA</h3>  
                     </div>
                     </div>



                     <div class="row">
                    <div class="col-sm-3 col-sm-offset-2"> 
                     <div class="">
                         <h5>Passport</h5>
                          <div class="picture">
                              <img src="public/assets/img/default.png" class="picture-src" id="PicturePreview" title="" style="width:100%;"/>
                              <input type="file" ng-model="form.image" accept="image/*" onchange="angular.element(this).scope().uploadedFile(this)"  id="picture" required ng-click="passport=true">
                         </div> 
                        </div>
                   </div>
                         
                        
                         
                    <div class="col-sm-5">
                    <div class="col-sm-12"> 
                     <div class="">
                         <h5>Last Name</h5>
                         <input type="text" class="form-control" name="lname" ng-model="lname.text" required style="border:1px solid #000;" />
                    </div>
                     <div ng-show="form.$submitted || form.lname.$touched || form.lname.$dirty">   
                        <span style="color:red" ng-show="form.lname.$error.required"> Last name is required</span>
                     </div>
                    </div>
                      
                        <br>
                        
                      <div class="col-sm-12"> 
                     <div class="">
                         <h5>First Name</h5>
                         <input type="text" class="form-control" name="fname" ng-model="fname.text" required style="border:1px solid #000;" />
                    </div>
                     <div ng-show="form.$submitted || form.fname.$touched || form.fname.$dirty">   
                        <span style="color:red" ng-show="form.fname.$error.required"> First name is required</span>
                     </div>
                    </div>
                        
                     <br>
                     
                     <div class="col-sm-12"> 
                     <div class="">
                         <h5>Other Names</h5>
                         <input type="text" class="form-control" name="oname" ng-model="oname.text" required style="border:1px solid #000;" />
                    </div>
                     <div ng-show="form.$submitted || form.oname.$touched || form.oname.$dirty">   
                        <span style="color:red" ng-show="form.oname.$error.required"> Other name is required</span>
                     </div>
                    </div>
                        
                       <br>  
                        
                    <div class="col-sm-12"> 
                     <div class="">
                         <h5>BVN Number</h5>
                         <input type="text" class="form-control" name="bvn" ng-model="bvn.text" required style="border:1px solid #000;" />
                    </div>
                     <div ng-show="form.$submitted || form.bvn.$touched || form.bvn.$dirty">   
                        <span style="color:red" ng-show="form.bvn.$error.required"> BVN is required</span>
                     </div>
                      </div>
                    <br>
                     
                    </div>
                    
                    </div>
            
          
                   <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        
                    <div class="col-sm-4"> 
                     <div class="">
                         <h5>Gender</h5>
                         <select class="form-control" name="sex" ng-model="sex.text" required style="border:1px solid #000;" >
                             <option value='Male'>Male</option>
                             <option value='Female'>Female</option>
                         </select>    
                    </div>
                     <div ng-show="form.$submitted || form.status.$touched || form.status.$dirty">   
                        <span style="color:red" ng-show="form.status.$error.required"> Marrital status is required</span>
                     </div>
                    </div>
                        
                   <div class="col-sm-4"> 
                     <div class="">
                         <h5>Marital Status</h5>
                         <select class="form-control" name="status" ng-model="status.text" required style="border:1px solid #000;" >
                             <option value='Married'>Married</option>
                             <option value='Single'>Single</option>
                             <option value="Divorced">Divorced</option>
                         </select>    
                    </div>
                     <div ng-show="form.$submitted || form.status.$touched || form.status.$dirty">   
                        <span style="color:red" ng-show="form.status.$error.required"> Marrital status is required</span>
                     </div>
                    </div>
                      
                        
                      <div class="col-sm-4"> 
                     <div class="">
                         <h5>Year of Birth</h5>
                         <input type="text" class="form-control"  name="byear" ng-model="byear.text"  id="byear" ng-change="bthyear=true" required style="border:1px solid #000;" />
                    </div>
                     <span class="k-invalid-msg" data-for="byear"></span> 
            <script>
            $(document).ready(function(){
            $("#byear").kendoDatePicker({
                value: new Date(2000, 10, 10, 10, 0, 0),
                min: new Date(1950, 0, 1, 8, 0, 0),
                max: new Date(2049, 11, 31, 18, 0, 0),
                format: "yyyy-MM-dd" 
            });
                 var validator = $("#start").kendoValidator({
             rules: {
            datepicker: function(input) {
              if (input.is("[data-role=datepicker]")) {
                return input.data("kendoDatePicker").value();
              } else {
                return true;
                }
              }
             },
               messages: {
                  datepicker: "Please enter valid date!"
               }
                }).data("kendoValidator");
            });
          </script>
 
          
                    </div>
                        
                        
                
                        
                    </div>
                    </div>
                    <br>
                    
                    
                    <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                    <div class="col-sm-6"> 
                     <div class="">
                         <h5>Father's Occupation</h5>
                         <input type="text" class="form-control" name="fatheroccupation" ng-model="fatheroccupation.text" required style="border:1px solid #000;" />
                    </div>
                   
                     <div ng-show="form.$submitted || form.fatheroccupation.$touched || form.fatheroccupation.$dirty">   
                        <span style="color:red" ng-show="form.fatheroccupation.$error.required"> Father's occupation is required</span>
                     </div>
                     </div>  
                    
                    <div class="col-sm-6"> 
                     <div class="">
                         <h5>Mother's Occupation</h5>
                         <input type="text" class="form-control" name="motheroccupation" ng-model="motheroccupation.text" required style="border:1px solid #000;" />
                    </div>
                     <div ng-show="form.$submitted || form.motheroccupation.$touched || form.motheroccupation.$dirty">   
                        <span style="color:red" ng-show="form.motheroccupation.$error.required"> Mother's occupation is required</span>
                     </div>
                    </div>
                    </div>
                    </div>
                   
                    <br>
                    
                       
                    
                    <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                    <div class="col-sm-6"> 
                     <div class="">
                         <h5>Nos. of Male Children</h5>
                         <input type="number" class="form-control" name="malekids" ng-model="malekids.text" required style="border:1px solid #000;" />
                    </div>
                     <div ng-show="form.$submitted || form.malekids.$touched || form.malekids.$dirty">   
                        <span style="color:red" ng-show="form.malekids.$error.required"> Nos. of male children</span>
                        <span style="color:red" ng-show="!form.malekids.$error.required && form.malekids.$invalid"> Invalid Input</span>
                     </div>
                    </div>
                      
                        
                      <div class="col-sm-6"> 
                     <div class="">
                         <h5>Nos. of Female Children</h5>
                         <input type="number" class="form-control" name="femalekids" ng-model="femalekids.text" required style="border:1px solid #000;" />
                    </div>
                     <div ng-show="form.$submitted || form.femalekids.$touched || form.femalekids.$dirty">   
                        <span style="color:red" ng-show="form.femalekids.$error.required"> Nos. of female children</span>
                        <span style="color:red" ng-show="!form.femalekids.$error.required && form.femalekids.$invalid"> Invalid Input</span>
                      </div>
                    </div>
                        
                        
                    </div>
                    </div>
                    <br>
                    
                    
                    
                      
                    
                    <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                    <div class="col-sm-6"> 
                     <div class="">
                         <h5>State of Origin</h5>
                         <input type="text" class="form-control" name="stateoforigin" ng-model="stateoforigin.text" required style="border:1px solid #000;" />
                    </div>
                   
                     <div ng-show="form.$submitted || form.stateoforigin.$touched || form.stateoforigin.$dirty">   
                        <span style="color:red" ng-show="form.stateoforigin.$error.required"> State of origin is required</span>
                     </div>
                     </div>  
                    
                    <div class="col-sm-6"> 
                     <div class="">
                         <h5>LGA of Origin</h5>
                         <input type="text" class="form-control" name="lgaoforigin" ng-model="lgaoforigin.text" required style="border:1px solid #000;" />
                    </div>
                     <div ng-show="form.$submitted || form.lgaoforigin.$touched || form.lgaoforigin.$dirty">   
                        <span style="color:red" ng-show="form.lgaoforigin.$error.required"> LGA of origin is required</span>
                     </div>
                    </div>
                    </div>
                    </div>
                    <br>
                    
                    
                    
                    <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                    <div class="col-sm-6"> 
                     <div class="">
                         <h5>State of Residence</h5>
                         <input type="text" class="form-control" name="stateofres" ng-model="stateofres.text" required style="border:1px solid #000;" />
                    </div>
                   
                     <div ng-show="form.$submitted || form.stateofres.$touched || form.stateofres.$dirty">   
                        <span style="color:red" ng-show="form.stateofres.$error.required"> State of residence is required</span>
                     </div>
                     </div>  
                    
                    <div class="col-sm-6"> 
                     <div class="">
                         <h5>LGA of Residence</h5>
                         <input type="text" class="form-control" name="lgaofres" ng-model="lgaofres.text" required style="border:1px solid #000;" />
                    </div>
                     <div ng-show="form.$submitted || form.lgaofres.$touched || form.lgaofres.$dirty">   
                        <span style="color:red" ng-show="form.lgaofres.$error.required"> LGA of residence</span>
                     </div>
                    </div>
                    </div>
                    </div>
                    <br>
      
                                        
                   <div class="row"> 
                   <div class="col-sm-8 col-sm-offset-2"> 
                         <h5>Place of Birth</h5>
                         <input type="text" class="form-control" name="placeofbirth" ng-model="placeofbirth.text" required style="border:1px solid #000;" />
                     <div ng-show="form.$submitted || form.placeofbirth.$touched || form.placeofbirth.$dirty">   
                        <span style="color:red" ng-show="form.placeofbirth.$error.required"> Place of birth is required</span>
                     </div>
                    </div>
                   </div>
                    
                    <br> <br><br>
                    
                   
                    
                   <div class="row">
                    <div class="col-sm-8 col-sm-offset-2"> 
                         <h3>ASSETS AND LIABILITIES</h3>  
                     </div>
                     </div>
                    
                  
                      
                    
                    
                            
                    <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                    <div class="col-sm-4"> 
                     <div class="">
                         <h5>Nos. of Owned Cars</h5>
                         <input type="number" class="form-control" name="cars" ng-model="cars.text" required style="border:1px solid #000;" />
                    </div>
                   
                     <div ng-show="form.$submitted || form.cars.$touched || form.cars.$dirty">   
                        <span style="color:red" ng-show="form.cars.$error.required"> Nos. of owned cars is required</span>
                        <span style="color:red" ng-show="!form.cars.$error.required && form.cars.$invalid"> Invalid Input</span>
                     </div>
                     </div>  
                    
                    <div class="col-sm-4"> 
                     <div class="">
                         <h5>Nos. of Owned Houses</h5>
                         <input type="number" class="form-control" name="houses" ng-model="houses.text" required style="border:1px solid #000;" />
                    </div>
                     <div ng-show="form.$submitted || form.houses.$touched || form.houses.$dirty">   
                        <span style="color:red" ng-show="form.houses.$error.required"> Nos. of owned houses is required</span>
                        <span style="color:red" ng-show="!form.houses.$error.required && form.houses.$invalid"> Invalid Input</span>
                     </div>
                    </div>
                      
                        
                      <div class="col-sm-4"> 
                     <div class="">
                         <h5>Nos. of Owned Business</h5>
                         <input type="number" class="form-control" name="biz" ng-model="biz.text" required style="border:1px solid #000;" />
                    </div>
                     <div ng-show="form.$submitted || form.biz.$touched || form.biz.$dirty">   
                        <span style="color:red" ng-show="form.biz.$error.required"> Nos. of owned businesses is required</span>
                        <span style="color:red" ng-show="!form.biz.$error.required && form.biz.$invalid"> Invalid Input</span>
                     </div>
                    </div>
                        
                        
                    </div>
                    </div>
                    <br>
                    
                    
                    
                    
                    
                    <br><br>
                    <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">  
                        <button type="button"  style="font-size:18px;width:100%;height:50px;"
                               ng-disabled="
                                 !passport || !bthyear || form.bvn.$error.required || form.lname.$error.required || form.fname.$error.required
                                || form.oname.$error.required || form.status.$error.required || form.byear.$error.required
                                || form.placeofbirth.$error.required || form.fatheroccupation.$error.required|| form.motheroccupation.$error.required
                                || form.malekids.$error.required || form.malekids.$invalid || form.femalekids.$error.required || form.femalekids.$invalid
                                || form.stateoforigin.$error.required || form.lgaoforigin.$error.required || form.stateofres.$error.required || form.lgaofres.$error.required
                                || form.cars.$error.required || form.cars.$invalid || form.houses.$error.required || form.houses.$invalid || form.biz.$error.required || form.biz.$invalid"
                               ng-click="registerCitizen()" class="btn btn-success" >
                        <img ng-if="loading" src="data:image/gif;base64,R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA=="/> 
                        <span  ng-if="!loading" style="color:#fff">SUBMIT DATA</span>
                        <span  ng-if="loading" style="color:#fff">SUBMITTING...</span>
                        </button>
                    </div>
                    </div>
                      
                </form>

     
</div>






 <img ng-show="img" ng-src="{{image_source}}" style="width:300px;">


 <script>
     
   
// Prepare the preview for profile picture
$("#picture").change(function () {
        readURL(this);    
});
    
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#PicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}    
 </script>
                