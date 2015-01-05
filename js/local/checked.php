<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>点击别的地方时候，然点选按钮选中</title>
    <script type="text/javascript" src="../jquery-1.8.3.js"></script>
    <script type="text/javascript">
    var kaiguan= "on";
        $(function() {
            $(document).click(function() {
                $("input[type='checkbox']")[0].setAttribute("checked","checked")
            })
        })
    </script>
</head>
<body>
    <input type="checkbox" >
</body>
</html>