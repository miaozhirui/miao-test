<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="../angular.js"></script>
</head>
<body>
    <div ng-app='' ng-controller="myController">
        <input type="text" ng-model="person.firstName">
        <input type="text" ng-model='person.lastName'>
        全屏：
        <p>{{person.fullName()}}</p>
        {{log()}}
        <ul>
            <li ng-repeat='x in class'>{{x.name | currency}}</li>
        </ul>
        <ul>
            <li ng-repeat='x in class | orderBy: "name"'>{{x.name}}</li>
        </ul>
        <ul>
            <table>
                <!-- 对数组里面的多个对象按照那个键排序做一个定义 -->
                <tr ng-repeat="x in name |orderBy:'Name'">
                    <td ng-show='hide'>{{ x.Name }}</td>
                    <td>{{ x.City | uppercase }}</td>
                    <td>{{x.Country | lowercase}}</td>
                </tr>
            </table>

        </ul>
    </div>
    <script type="text/javascript" src="../js/2.js"></script>
</body>
</html>