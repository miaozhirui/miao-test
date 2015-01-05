<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>thenjs的使用</title>
</head>
<body>
    <script type="text/javascript">
        function run() {
            console.log(111)
            return run1;
        }
        function run1() {
            console.log(222)
        }
        run()()
    </script>
    <script type="text/javascript">
    function bar() {
        foo()
    }
try {
 console.log(arr)
} catch (e) {
    var obj = {
        name:  e.name,
        message: e.message,
        lineNumber: e.lineNumber,
        fileName: e.fileName,
        stack: e.stack
    }
console.log(obj) 

}
document.writeln("开始执行try块语句 ---> ")
</script>
</body>
</html>