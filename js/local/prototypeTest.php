<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>prototype的定义</title>
</head>
<body>
    <script type="text/javascript">
        // function Run() {}
        // var run1 = new Run();

        // Run.prototype.a=function() {
        //     console.log(1)
        // }
        // run1.a()
        // console.log(run1)
        // function run() {}
        // run.prototype.init=function() {
        //     console.log(this.color)
        // }
    // var run1 = new run()
    // run1.color="red"
    // var run2 = new run()
    // run2.color="blue"
    // run1.init();
    // run2.init();
    // function run(){console.log(this.color)}

// function run(){}
// run.prototype.a=function(){console.log(this.color)}
// var run1 = new run();
// console.log(run1)



// function b() {}
// b.prototype.init=function() {console.log(this)}
// b.prototype.color='b'

// function run(middle) {
//     var instance = new middle();
//     instance.init()
//     // console.log(instance.init())
// }
// run(a)
// run(a)
// run(b)

// a.prototype.color="b"
// var a1 = new a();
// var a2 = new a();
// a1.init([1,2])
// a2.init.apply(a2, [3,4,5]);

// a1.init(3, 4);
function run(){
  this.color="blue"
}
a.init()
    </script>
</body>
</html>















