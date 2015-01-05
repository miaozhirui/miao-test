<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <script type="text/javascript">
        var statics = (function() {
            var i =0;
            return function() {
                this.number = ++i;
            }
        }())
        var g = new statics;
        console.log(g)
         var g = new statics;
           console.log(g)
          var g = new statics;
            console.log(g)
    </script>
    <script type="text/javascript">
       // ~function () {console.log(11)}()
       // ({
       //      add: function() {
       //          console.log(222)
       //      },
       //      init: function() {
       //          this.add()
       //      }
       // }).init()
    </script>
</body>
</html>