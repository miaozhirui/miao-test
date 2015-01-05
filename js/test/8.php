<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <script type="text/javascript">
        (function add() {
            // console.log(11)
         }
        )
        // add()
    </script>
    <script type="text/javascript">
    // console.log(a)
        // var a=10;
        // console.log(a)
        // var a=20;
        // function a() {}
        // console.log(a)
    </script>

    <script type="text/javascript">
        if(true) {
            // var a=1;
        }else {
            // var b=2;
        }
        // console.log(b)
    </script>
    <script type="text/javascript">
    // console.log(a)
        var b  = 1;
        // 只有在执行的过程中才会执行这段代码
        a=2;
    </script>

    <script type="text/javascript">
    var x=20;
        function add() {
            var y = 10;
            console.log(y+x)
        }
        // add()
    </script>
    
</head>
<body>
    <script type="text/javascript">
        var obj = {name:'miaozhirui'}
    </script>
    <script type="text/javascript">
        // console.log(obj.name)
    </script>
    <script type="text/javascript">
        function add() {

        }
        // console.log(add[[Scope]])
    </script>
    <script type="text/javascript">
        // console.log([1].concat([2,3,4]))
    </script>
    <script type="text/javascript">
        function run() {}
        run.prototype.add1=function(){}
        run.prototype.add2=function(){}
        var obj = new run()
    </script>
</body>
</html>














