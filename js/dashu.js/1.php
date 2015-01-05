<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<script type="text/javascript">
   var a = 1;
</script>
<script type="text/javascript">
   var a=2;
</script>
<script type="text/javascript">
//后面的定义的会覆盖前面的
    // console.log(a)
</script>
<body>
    <script type="text/javascript">
        var man = {
            a:"1",
            b:"2",
            c:"3"
        }
        // Object.prototype.clone=function(){}
        // 这种方式会把原型上面的方法和属性给遍历出来
        for(var i in man) {
            // console.log(i)
        }

        // 可以判断一些属性是不是自己的，是
        for(var i in man ) {
           if(man.hasOwnProperty(i)){
            // console.log(i)
           }
        }
    </script>

    <script type="text/javascript">
  function foo(){
    return bar();
  }
  var bar = (function(){
    if (window.addEventListener) {
      return function bar(){
        return baz();
      };
    }
    else if (window.attachEvent) {
      return function bar() {
        return baz();
      };
    }
  })();
  function baz(){
    debugger;
  }
  // foo();
  // foo();

  // Call stack
  // baz
  // bar() //看到了么？ 
  // foo
  // expr_test.html()
    </script>

    <script type="text/javascript">
        // ({
        //     name:"miaozhirui",
        //     age: 100,
        //     init: function() {
        //         console.log(this.name);
        //         console.log(this.age)
        //     } 
        // }).init()
    </script>

    <script type="text/javascript">
        var obj = {
            run1: function() {
                console.log("run1");
                return obj;
            },
            run2: function() {
                console.log("run2");
                return obj;
            },
            run3: function() {
                console.log("run3");
                return obj;
            },
            run4: function() {
                console.log("run4")
            }
        }
        obj.run1().run2().run3().run4()
    </script>
</body>
</html>














