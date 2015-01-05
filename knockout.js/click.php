<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>knockout.js</title>
    <script type="text/javascript" src = 'knockout-3.2.0.js'></script>

</head>
<body>
    <p>你已经点击了 <span data-bind='text: clickNumber'></span></p>
    <button  data-bind='click: registerClick, disable:hasClickTooManyTimes '>Click me</button>
    <div data-bind='visible: hasClickTooManyTimes'>
        click too many times
        <button data-bind='click: resetClicks'>resetClicks</button>
    </div>
</div>
    <script type="text/javascript">
        var viewModel= function() {
            this.clickNumber=ko.observable(0);
            this.registerClick=function() {
                this.clickNumber(this.clickNumber() + 1);
            };
           this.hasClickTooManyTimes= ko.pureComputed(function(){
                    return this.clickNumber() > 3;
           },this);
           this.resetClicks=function() {
                this.clickNumber(0);
           }
        }
        ko.applyBindings(new viewModel)

    </script>
</body>
</html>