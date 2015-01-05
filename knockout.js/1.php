<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="knockout-3.2.0.js"></script>
    <title></title>
</head>
<body>
    <div id="content3" data-bind="foreach: collection">
        <span data-bind="text: name"></span> <span data-bind="click: remove">删除</span> <br/>
    </div>
     <script type="text/javascript">
        function viewModel() {
            var self = this;
            this.collection = ko.observableArray([
                {name:'张三', id:"52"},
                {name:'李四'},
                {name: '王五'}
                ]);
            this.remove = function(item) {
                console.log(item)
                self.collection.remove(item);
            }
        }
        ko.applyBindings(viewModel, document.getElementById('content3'));
     </script>
    <div id="content1">
        <h3>Meal upgrades</h3>
        <p>
            Make your flight more bearable by selecting a meal to match your social and economic status.
        </p>
        Chosen meal:
        <select data-bind="options: availableMeals,
                                                          optionsText: 'mealName',
                                                          value: chosenMeal"></select>

        <p>
            You've chosen: <b data-bind="text: chosenMeal().description"></b>
            (price:
            <span data-bind='text: formater(chosenMeal().extraCost)'></span>
            )
        </p>
    </div>
    <script type="text/javascript">
    var availableMeals = [
        { mealName: 'Standard', description: 'Dry crusts of bread', extraCost: 0.000 },
        { mealName: 'Premium', description: 'Fresh bread with cheese', extraCost: 9.950 },
        { mealName: 'Deluxe', description: 'Caviar and vintage Dr Pepper', extraCost: 18.50 },
      ];


  var viewModel = {
    availableMeals: availableMeals,
    chosenMeal: ko.observable(availableMeals[0]),
    formater: function(value) {
        return value ==0 ? 'free' : '$' + value.toFixed(2);
    }
  }

  ko.applyBindings(viewModel, document.getElementById('content1'));


    </script>

    <!-- // 依赖监控属性 -->
    <div id="content2">
        <span data-bind="text: firstName"></span><br/>
        <span data-bind="text: lastName"></span>
        <br/>
        <input type="text" data-bind="value: fullName, valueUpdate: 'keyup'"></div>
    <script type="text/javascript">
  function viewModel () {
    // this.console = ko.computefunction() {
    //     console.log(11)
    // }
    this.firstName = ko.observable("miao");
    this.lastName = ko.observable("zhirui");
    // this.fullName = ko.computed(function() {
    //     return this.firstName() +' '+ this.lastName();
    // }, this);
    this.fullName = ko.computed({

    read: function () {
        return this.firstName() + " " + this.lastName();
    },
    write: function (value) {
        var lastSpacePos = value.lastIndexOf(" ");
        if (lastSpacePos > 0) { // Ignore values with no space character
            this.firstName(value.substring(0, lastSpacePos)); // Update "firstName"
            this.lastName(value.substring(lastSpacePos + 1)); // Update "lastName"
        }
    },
    owner: this
    })

  }
  ko.applyBindings(new viewModel(), document.getElementById('content2'))
  </script>




</body>
</html>