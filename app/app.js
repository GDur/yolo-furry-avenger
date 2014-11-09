var app = angular.module('myTodos', []);

app.controller("todosController", function($scope, $http) {
    var params = "full_table_name=todo_list_1";
    var page = "/yolo-furry-avenger/php_api/get_table.php?" + params;
    $http.get(page).success(function(response) {
      $scope.names = response;
    });
});
