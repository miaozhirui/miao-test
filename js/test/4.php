<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>js的单线程</title>
    <script type="text/javascript">
        function run(){
            setTimeout(function(){console.log(11)}, 2000);
            while(true){}
        }
    run()
    </script>
</head>
<body>
    
</body>
</html>