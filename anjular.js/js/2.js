       function myController($scope, $http) {
        $http.get('../test.php').success(function(response) {
            $scope.name = response;
            console.log(response)
        })
        $scope.hide=false;
        //     $scope.person={
        //         firstName:'miaozhirui',
        //         lastName:'yuanyuan',
        //         fullName: function() {
        //             return this.firstName+" !!!!!"+this.lastName
        //         }
          
        //     }
        //       $scope.log=function() {
        //         var x = $scope.person;
        //         return x.firstName;
        //     }
        //     $scope.class = [
        //         {name:'3'},
        //         {name:'1'},
        //         {name:'2'},
        //         {name:'6'},
        //         {name:'9'},
        //         {name:'8'}
        //     ]
        }