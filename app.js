

var app = angular.module('myApp', [
    'ngRoute', 
    'angularUtils.directives.dirPagination',
     'kendo.directives'
    
]).config(['$routeProvider', function ($routeProvider) {
    
                $routeProvider.when('/', {
                    templateUrl: 'html/home.php',
                    controller: 'BodyController',
                    controllerAs: 'home'
                }).when('/home', {
                    templateUrl: 'html/home.php',
                    controller: 'BodyController',
                    controllerAs: 'home'
                }).when('/register', {
                    templateUrl: 'html/register.php',
                    controller: 'BodyController',
                    controllerAs: 'register'
                }).when('/confirm', {
                    templateUrl: 'html/confirm.php',
                    controller: 'BodyController',
                    controllerAs: 'confirm'
                }).when('/statistics', {
                    templateUrl: 'html/stats.php',
                    controller: 'BodyController',
                    controllerAs: 'stats'
                }).otherwise({
                    redirectTo: '/'
                });
                               
}]).config(['$locationProvider', function($locationProvider) {
         $locationProvider.hashPrefix('');

}]).config(['$compileProvider', function ($compileProvider) {

  $compileProvider.debugInfoEnabled(true);

}]);
    
    
    
    
       
       
        
app.controller('BodyController', function($scope, $http, $window, $timeout, $location) {

var currentpage = $location.path(); 

if(currentpage === '/' ){
    $scope.homeclass = 'activeitem';

}
else if(currentpage === '/home' ){
    $scope.homeclass = 'activeitem';
}
else if(currentpage === '/register' ){
    $scope.regclass = 'activeitem';
}
else if(currentpage === '/confirm' ){
    $scope.conclass = 'activeitem';
}

 //Password Change
$scope.savePassword = function (oldpass,newpass){
    var sure = confirm("Are You Sure?");
    if(sure){
    $scope.loading = true;
    $http.get("auth/login.php?newPassword=newPassword&oldpass="+oldpass+"&newpass="+newpass).then( function(response) {  
         if(response.data != 0){
            $window.alert("Password Saved");  
            $scope.loading = false;
            history.go(1);
         }else{
           $window.alert("Operation Failed.");
           $scope.loading = false;
         }
     }); 
    }
};

    
 $scope.loginAdmin = function (email, password) {
        $scope.loading = true;
//              $timeout(function(){
                $http.get("auth/login.php?email="+email+"&password="+password).then(function (response) {
                    if(response.data != 0){
                        $scope.loading = false; 
                        $window.location = 'index.php';
                    }else{
                        $scope.adminNotFound = "Sorry Admin Not Found"; 
                        $scope.loading = false;
                    }
                 });
//               }, 15000);
 };

$scope.homeclicked = function(){
    $scope.homeclass = 'activeitem';
    $scope.regclass = '';
    $scope.conclass = '';
};

$scope.regclicked = function(){
    $scope.homeclass = '';
    $scope.regclass = 'activeitem';
    $scope.conclass = '';
};

$scope.conclicked = function(){
    $scope.homeclass = '';
    $scope.conclass = 'activeitem';
    $scope.regclass = '';
};


    
$scope.form = [];
$scope.files = [];
 
$scope.registerCitizen = function(){
  var sure = confirm("Are You Sure?");
 if(sure){

 $scope.loading = true;
 $scope.form.image = $scope.files[0];

    $timeout(function(){
	      	$http({
			  method  : 'POST',
			  url     : 'php/processor.php',
			  processData: false,
			  transformRequest: function (data) {
			      var formData = new FormData();
			      formData.append("image", $scope.form.image);
                                                                formData.append("bvn", $scope.bvn.text);
                                                                formData.append("lname", $scope.lname.text);
                                                                formData.append("fname", $scope.fname.text);
                                                                formData.append("othernames", $scope.oname.text);
                                                                formData.append("status", $scope.status.text);
                                                                formData.append("sex", $scope.sex.text);
                                                                formData.append("byear", $scope.byear.text);
                                                                formData.append("placeofbirth", $scope.placeofbirth.text);
                                                                formData.append("fatheroccupation", $scope.fatheroccupation.text);
                                                                formData.append("motheroccupation", $scope.motheroccupation.text);
                                                                formData.append("malekids", $scope.malekids.text);
                                                                formData.append("femalekids", $scope.femalekids.text);
                                                                formData.append("stateoforigin", $scope.stateoforigin.text);
                                                                formData.append("lgaoforigin", $scope.lgaoforigin.text);
                                                                formData.append("stateofres", $scope.stateofres.text);
                                                                formData.append("lgaofres", $scope.lgaofres.text);
                                                                formData.append("cars", $scope.cars.text);
                                                                formData.append("houses", $scope.houses.text);
                                                                formData.append("businesses", $scope.biz.text);
			      return formData;  
			  },  
			  data : $scope.form,
			  headers: {
			         'Content-Type': undefined
			  }
		   }).then(function(response){
                       if(response.data != 0){
                            alert("Profile Has Been Successfully Created");
                            $scope.loading = false;
                       }else{
                           alert("Operation failed!");
                            $scope.loading = false;
                       }
		 
               });
                   
   }, 3000);
   
    }
   
   };
   
   
      $scope.uploadedFile = function(element) {
		    $scope.currentFile = element.files[0];
		    var reader = new FileReader();

		    reader.onload = function(event) {
		      $scope.image_source = event.target.result;
		      $scope.$apply(function($scope) {
		        $scope.files = element.files;
		      });
		    };
                    reader.readAsDataURL(element.files[0]);
};


    
    
    
    
    
    
    
    
    

$scope.verifyCitizen = function(bvn){
    var sure = confirm("Are You Sure");
    if(sure){
     $scope.loading = true;
     $timeout(function(){
          $http.get("php/processor.php?getCitizen=getCitizen&bvn="+bvn).then(function(response){
              if(response.data != 0){
                  $scope.loading = false;
                  $scope.persons = response.data;
              }else{
                  alert("BVN Records Not Found!");
                  $scope.loading = false;
              }
        });          
       }, 1000);
    }
};














    $scope.exportChart = function(){
        $('#chart').getKendoChart().saveAsPDF();
    };

 
     
 $http.get("php/charts.php?genderchart=genderchart").then( function(response) {  
         if(response.data != 0){
             
         var seriesData = response.data; 
    
   
    $('#chart').kendoChart({
       pdf: {
             fileName: "Report"
             //forceProxy: true,
             //proxyURL: "../storage/staffs/report/"
             },
       title: {
             text: "Male vs Female"
          },
       legend: {
                    position: "right"
        }, 
        seriesDefaults: {
            labels: {
                visible: true,
                format: "{0}"
            }
        },
        dataSource: {
            data: seriesData
        },
        series: [{
            name: "Male",
            type: "column",
            data: seriesData,
            field: "cntmale"
        },
       {
            name: "Female",
            type: "column",
            data: seriesData,
            field: "cntfemale"
        }],
        categoryAxis: {
           field: "year"
        } 
    });
      
      
          }
    




  $("#chart2").kendoChart({ 
       series: [{
            name: "Population",
            type: "column",
            data: seriesData,
            field: "cntpop"
        }],
       title: {
             text: "Population Growth"
          },
       legend: {
                    position: "right"
        }, 
        seriesDefaults: {
            labels: {
                visible: true,
                format: "{0}"
            }
        },
        dataSource: {
            data: seriesData
        },
        categoryAxis: {
           field: "year"
        }
    });
    
    
    
      $("#chart3").kendoChart({ 
       series: [{
            name: "Population",
            type: "pie",
            data: seriesData,
            field: "cntpop"
        },
       {
            name: "Population",
            type: "pie",
            data: seriesData,
            field: "year"
        }],
       title: {
             text: "Population Growth"
          },
       legend: {
                    position: "right"
        }, 
        seriesDefaults: {
            labels: {
                visible: true,
                format: "{0}"
            }
        },
        dataSource: {
            data: seriesData
        },
    });
    
    



$("#chart4").kendoChart({
      dataSource: {
            data: seriesData
        },
       title: {
            text: "Married vs Singles"
        },
        legend: {
            position: "right"
        },
        seriesDefaults: {
            type: "line",
            labels: {
                visible: true,
                format: "{0}"
            }
        },
       series: [{
            name: "Married",
            type: "line",
            data: seriesData,
            field: "cntmarried"
        },
       {
            name: "Single",
            type: "line",
            data: seriesData,
            field: "cntsingles"
        }],
        valueAxis: {
            labels: {
                format: "{0}"
            }
        },
       categoryAxis: {
           field: "year"
        }
    });






$("#chart5").kendoChart({        
    theme: "blueOpal",

      dataSource: {
            data: seriesData
        },
       title: {
            text: "Assets vs Liabilities"
        },
        legend: {
            position: "right"
        },
        seriesDefaults: {
            type: "line",
            labels: {
                visible: true,
                format: "{0}"
            }
        },
       series: [{
            name: "Cars",
            type: "line",
            data: seriesData,
            field: "cntcars"
        },
        {
            name: "Businesses",
            type: "line",
            data: seriesData,
            field: "cntbiz"
        },
       {
            name: "Houses",
            type: "line",
            data: seriesData,
            field: "cnthuz"
        }],
        valueAxis: {
            labels: {
                format: "{0}"
            }
        },
       categoryAxis: {
           field: "year"
        }
    });







 });




});











