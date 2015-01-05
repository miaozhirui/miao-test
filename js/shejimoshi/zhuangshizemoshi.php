<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>装饰者模式</title>
    <script type="text/javascript">
    //如果想添加类的功能，但是不想改原对象，又不想通过继承来实现，这个时候就可以通过装饰者模式来修改
        function Run(){
        }
        Run.prototype.add=function(){
            console.log("add")
        }
        function Extend(actor) {
            this.actor = actor;
        }
        Extend.prototype.add=function () {
            
        }
        var obj = new Run()
        var newObj = new Extend(obj);
        newObj.add()
    </script>
</head>
<body>
    <span onclick="javascript:if(!confirm('您确定删除吗？')){return false}" style="cursor:pointer;">今天的天气真的是不错的啊</span>
</body>
</html>