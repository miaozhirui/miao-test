<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>实例对象的_proto_的属性</title>
    <script type="text/javascript">
        function run(){}
        function add(){}
        var obj1 = new run();
        run.prototype.add=function(){}
        // __proto__就是访问的是原型引用
        // obj1.__proto__="11";
        // console.log(obj1);
        
        function add(){}
        // 每个函数在定义的时候都会给这个函数加上prototype的这个属性，并且初始化这个对象，然后这个对象里面会有一个constructor的这个属性指向这个构造函数
        // console.log(add.prototype.constructor);
        
        function add1(){}
        // console.log(add1.__proto__==Function.prototype);
        
        function add2(){}
        var obj2 = new add2()
        // 通过这种方式就可以原型添加方法和属性   
        obj2.__proto__.add=function() {
            // console.log(11333)
        }
        obj2.add()
        var obj3 = new add2()
        obj3.add()
        // 原型上面添加了这个属性之后，最后就可以原型上面的属性个删掉
        delete(obj2.__proto__.add);
    </script>
</head>
<body>
    <script type="text/javascript">
    // 函数也是对象，非常的棒啊
        function load(){}
        load.wo="我是load啦";
        load.shengao="我是身高啦，请不要打扰我啦";
        load.add=function(){console.log(11)}
        // load.add()
        // console.log(load.wo)
        // console.log(load.shengao)
        // 
        // function add(){}
        // console.log(typeof add.name)
        function add1(){}
        // console.log(add1.length)
        // console.log(load.length)

    </script>
    <script type="text/javascript">
        // bind函数的使用
        function add() {console.log(this)}
        var add1 = add.bind('1');//add1里面的this指向对象1{0='1'}
        // add()
        // add1()
    </script>

    <script type="text/javascript">
        // 手动给对象添加__proto__的这个属性(这个对象就拥有了obj的属性)
        var obj = {}
        obj.add=function() {console.log("今天的天气是不错的")}
        var obj2={}
        obj2.__proto__=obj;
        // console.log(obj2)
    </script>

    <script type="text/javascript">
        // 实现继承
        function add() {console.log(11)}
        // add()
    </script>
    <script type="text/javascript">
        function add() {console.log(11333)}
        // add()
    </script>
    <script type="text/javascript">
        function add(){}
        // console.log(add.prototype)
    </script>

    <script type="text/javascript">
        //定义的函数初始化的时候有一个__proto__指向Function.prototype的对象
       function add(){}
       // console.log(add.__proto__==Function.prototype);
    </script>

    <script type="text/javascript">
        //定义的函数初始化的时候有一个__proto__指向Function.prototype的对象
       function add(){}
       var obj = {name:"hou",
                        add: function() {console.log("add");}
    }
       add.__proto__=obj;//通过这种方式可以实现继承(通过这种方式可以很完美的实现继承)
       // console.log(add.add());
    </script>

    <script type="text/javascript">
        // var obj = {}
        // console.log(obj.__proto__==Object.prototype);
        // var str = "";
        // console.log(str.__proto__==String.prototype);
        
        // function add(){}
        // console.log(add.__proto__==Function.prototype)
    </script>

    <script type="text/javascript">
        function add(){}
        // console.log(add.prototype.__proto__==Object.prototype)
    </script>

    <script type="text/javascript">
        function add() {
            this.format=function(){
                this.name()
            }
        }
        var obj1 = new add()
        obj1.name=function() {console.log(11)}
        // console.log(obj1.format())
    </script>
    <script type="text/javascript">
    function add() {
        this.add1=function() {
            this.pre();
        }
    }
    var concrete = new add();
    console.log(concrete.add1)
    </script>
</body>
</html>









