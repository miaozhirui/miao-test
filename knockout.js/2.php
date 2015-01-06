<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="knockout-3.2.0.js"></script>
</head>
<body>
    <div id="content2" data-bind = "slideVisible: self">red</div>
    <script type="text/javascript">
        ko.bindingHandlers.slideVisible = {
            //自定义绑定时候如果该绑定的值view model发生改变的时候进行的操作
            update: function(element , viewAccessor, allBindings, viewModel) {
                var value = ko.utils.unwrapObservable(viewAccessor());
                var element = document.querySelector('body');
                if(value) {
                   element.style.background='red';
                } else {
                    element.style.background = "green"
                }
            }
        }
        viewModel2 = {
            self : ko.observable(true)
        }
        ko.applyBindings(viewModel2, document.getElementById('content2'))

       
    </script>
    <div data-bind="slideVisible: age, name:200, age:age" id="content1">green</div>
    <script type="text/javascript">
        ko.bindingHandlers.slideVisible = {
            //自定义绑定的时候初始化的值
            init: function(element, currentValue, allBindings, viewModel) {
                console.log(element)//获得当前所绑定的元素
                console.log(currentValue) //获得当前绑定的属性值，是一个函数，运行之后currentValue()可以获得当前的viewmodel里面绑定的值，如果这个值设置了observable的话，那么就无法得到了，不许通过下面的方式来获得
                console.log(ko.utils.unwrapObservable(currentValue()))//获得当前属性绑定的值，无论有没有observable都可以得到
                console.log(allBindings())//获得在这个元素上面所有的绑定
                console.log(viewModel)//获得在该区域的viewmodel
            }
        }
        var viewModel = {
            name: ko.observable('miaozhirui'),
            age: 22,
            city: '南京'
        }
        ko.applyBindings(viewModel,document.getElementById('content1'))
    </script>
    <script type="text/javascript">
   window.onload = function() {
             document.querySelector('#content1').onclick= function() {
                console.log(1)
            viewModel2.self(false);
            }
            document.querySelector('#content2').onclick = function() {
                viewModel2.self(true)
            }
        }
    </script>
  
</body>
</html>