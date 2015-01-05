<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript">
    var arr = []
    var obj = {}
    console.log(arr instanceof Array)    
    console.log(obj instanceof Object)
        function run() {
        }
        console.log(typeof run != "function" ? '我不是一个函数' : '我是一个函数')
    </script>
    <script type="text/javascript">
        function run(){
            this.name="miaozhirui";
            this.age = "23";
            this.shengao="175cm";
            this.see=function() {
                console.log('i want to sleep')
            }
        }
        run.prototype.eat=function() {
            console.log('i have a lunch');
        }
        var obj = new run();
        for(var i in obj) {
            if(obj.hasOwnProperty(i)) {//会把原型上面的属性过滤掉
                console.log(i)
            }
        }
        console.log(obj);
    </script>
</head>
<body>
    
</body>
</html>