<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>桥接模式</title>
    <script type="text/javascript">
        // 桥接模式实现的是抽象与具体分离，抽象提供一个接口，抽象的改变不依赖于具体的实现
        function Class1() {
            this.a=1;
            this.b=2;
            this.c=3;
        }
        function Class2() {
            this.d=4;
        }
        function shiXian() {
            this.one = new Class1()
            this.two = new Class2()
        }
        var obj = new shiXian()
        // console.log(obj)
        //这样做的好处是将抽象分离出去，有利于修改，解耦
    </script>
</head>
<body>
    <script type="text/javascript">
    // 用桥接模式来处理事件监听回调函数
    // 不好的方式
    addEvent(element, 'click', getBeerById);
    function getBeerById(e) {
        var id = this.id;
        asyncRequest('GET', 'url', function (resp) {
            console.log(resp.responseText);
        })
    }
    // 如果对这段代码进行单元测试，显然具有一定的难度（why? 下面有一定的难度）

    //对于api开发来说，最好从一个优良的api开始，不要将它和任何的具体的实现混合在一起
    function BeerById(id, callback) {
        asyncRequest('GET', 'url'+id, function(resp) {
            callback(resp.responseText)
        })
    }
    </script>
    
    <script type="text/javascript">
        //桥接模式对前端而言，最典型的就是事件监控
        
        //使用场景二：特权函数
        
        //使用场景三：实现组合
        
    </script>
</body>
</html>