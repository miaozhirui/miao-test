<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>js中的prototype</title>
    <script type="text/javascript">
    //
        function run() {};
        run.prototype.delete = function() {console.log("delete")}
        run.prototype.create= function() {console.log("create")}
        run.prototype.update= function() (console.log("update"));
        run.prototype.read=function() {console.log("read")};

        var run1 = new run();
        //会继承原型里面的方法和属性，就是说现在这个实例也有原型里面的属性和方法了，但是不要理解成在这个实例里面创建了这样的属性和方法，而是从原型继承过来的，（之所以会出现误解是因为在构造函数里面定义方法和属性的话，形如例2，就会实例里面创建和构造函数里面一模一样的属性和方法，这涉及到内存了）
        // run1.read=function() {console.log("reads")}
        // console.log(run1.read())
        run1.dd=function() {}
        // console.log(run1)
        var run2 = new run();
        // run2.read=function() {console.log("reads")}
        // console.log(run2.read == run1.read) 
        // 例2：
        function load() {
            this.delete = function() {console.log("delete")}
            this.create = function () {console.log("create")}
            this.update = function() {console.log("update")}
            this.read = function() {console.log("read")}
        }
        // var load1 = new load();
        // var load2 = new load();
    </script>
</head>
<body>
    
</body>
</html>