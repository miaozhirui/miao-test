<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>prototype</title>
    <script type="text/javascript" src="../jquery-1.8.3.js"></script>
    <script type="text/javascript">
        function run() {}
        // 定义实例方法，就是实例化之后，每个元素都有这样的方法和属性
        $.extend(run.prototype, {
            name:'缪志瑞',
            age: '144',
            init: function() {
                alert(1)
            },
            add: function() {

            },
            deletes: function() {

            },
            console: function() {

            },
            noPrototype: function() {
                alert("prototype")
            }
        })

        // 定义这个函数的方法，实例化的实例是没有这些方法的
        $.extend(run, {
            defaults: {},
            insert: function(child, parent) {
           function ctor() {
                this.constructor = child;
            }
            ctor.prototype = parent.prototype;
            child.prototype = new ctor();
            child.__super__ = parent.prototype;
            // console.log(child.constructor)
            return child;
            }
        })
        // console.log(run.prototype)
        // console.log(run.insert("p", 'div'))
    // var a = false;
    // if(!a) {
    //     b = "b is not undefined"
    //     throw new error(b)
    //     // console.error(b)
    // }
    // console.log(b)
    // 
    var arr = [1,2,3];
    // for (var i in arr) {
    //     console.log(arr[i].prototype)
    // }
    var result = arr.unshift({});
    console.log(arr)
    </script>
</head>
<body>
    
</body>
</html>