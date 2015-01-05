<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>anjular.js</title>
    <script type="text/javascript" src="../angular.js"></script>
</head>
<body>
    <!-- person={firstName:'miaozhiru', lastName:'baobei'} -->
   <!--  <div ng-app=''  ng-init="person=[1,2,3,4]">
        <p>{{person[1]}}</p>
        <input type='text' ng-model = 'name'>
        <p>{{name+age+' !今天的天气还真的是不错啊 '}}</p>
        <p>{{name+age}}</p>
        <p ng-bind="name+age"></p>
        <p>{{person.firstName+' &nbsp;&nbsp;'+person.lastName}}</p>
    </div> -->

<!-- ng-init="amount=2; price=25" -->
<!-- ng-init="person=['miaozhirui','yuanyuan','baobao']" -->
    <div ng-app='' ng-init="person=[{name:'miaozhiuir',age:23}, {name:'yuanyuan', age:'24'}, {name:'baobie', age:25}]">
        <li ng-repeat='x in person'>{{x.name+' '+x.age}}</li>
        <li ng-repeat='x in person'>{{x}}</li>
        <input type='text' ng-model='person.age'>
        <input type="text" ng-model="price">
        <p style="color:red">{{amount*price}}</p>
    </div>
</body>
</html>