<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>实现内容不断更改的情况</title>
    <script type="text/javascript" src="../jquery-1.8.3.js"></script>
    <script type="text/javascript">
        $(function() {
            function run() {
              for(var i=1; i<10000;i++) {
                var html = "<div></div>"
              }  
            }
                $(document).click(function()  {
                    run()
                })
            })
    </script>
</head>
<body>
        <div class="box">0</div>
</body>
</html>