//Define an angular module for our app
var app = angular.module('myApp', []);

app.controller('tasksController', function($scope, $http) {
  getTask(); // Load all available tasks

  function getTask() {
    $http.post("php_ajax/getTask.php").success(function(data) {
      $scope.tasks = data;
    });
  };

  $scope.addTask = function(task) {
    $http.post("php_ajax/addTask.php?task=" + task).success(function(data) {
      getTask();
      $scope.taskInput = "";
    });
  };

  $scope.deleteTask = function(id) {
    if (confirm("Are you sure to delete this line?")) {
      $http.post("php_ajax/deleteTask.php?taskID=" + id).success(function(data) {
        getTask();
      });
    }
  };

  $scope.toggleStatus = function(item, status) {
    if (status == '2') {
      status = '0';
    } else {
      status = '2';
    }
    $http.post("php_ajax/updateTask.php?taskID=" + item + "&status=" + status).success(function() {
      getTask();
    });
  };
});