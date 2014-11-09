<!DOCTYPE html>
<html ng-app="myTodos" lang="en">
  <head>
     <meta charset="utf-8">
     <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <div ng-controller="todosController">
      <table class="table table-striped table-bordered">
        <thead>
         <th>Customer Name&nbsp;</th>
         <th>Email&nbsp;</th>
         <th>Address&nbsp;</th>
         <th>City&nbsp;</th>
         <th>Country&nbsp;</th>
         <th>Action&nbsp;</th>
       </thead>
       <tbody>
        <tr ng-repeat="x in names">
          <td>
            <input type="checkbox" ng-model="value1" >
          </td>
          <td>{{ x.id }}</td>
          <td>{{ x.task }}</td>
        </tr>
       </tbody>
      </table>
    </div>

    <script src="node_modules/angular/angular.min.js"></script>
    <script src="app/app.js"></script>
  </body>
</html>
