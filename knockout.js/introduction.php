<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>introduction</title>
    <script type="text/javascript" src="knockout-3.2.0.js"></script>
</head>
<body>
    <!-- one -->
    <div id="one">

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
    var availableMeal = [
    { mealName: 'Standard', description: 'Dry crusts of bread', extraCost: 0 },
    { mealName: 'Premium', description: 'Fresh bread with cheese', extraCost: 9.95 },
    { mealName: 'Deluxe', description: 'Caviar and vintage Dr Pepper', extraCost: 18.50 }
  ];    
var viewModel = {
    availableMeals : availableMeal,
    chosenMeal: ko.observable(availableMeal[1]),
    formater: function(value) {
        return '$'+value;
    }
};

ko.applyBindings(viewModel, document.getElementById('one'));
</script>
    <hr/>
    <div id="two">
        <!-- two -->
        The name is
        <span data-bind="text: personName"></span>
        age is
        <span data-bind="text: personAge"></span>
        <span data-bind="text: myViewModel"></span>
    </div>

    <script type="text/javascript">
    var myViewModel = {
    personName: 'Bob',
    personAge: 123
};

ko.applyBindings(myViewModel, document.getElementById('two'));
</script>
    <hr>
    <div id="three">
        The name is
        <span data-bind="text: fullName"></span>
    </div>
    <script type="text/javascript">
    var viewModel = {
    firstName: ko.observable('Bob'),
    lastName: ko.observable('Smith'),
};
viewModel.fullName= ko.computed(function () {
    return this.firstName() + " $$ " + this.lastName();
}, viewModel)

ko.applyBindings(viewModel, document.getElementById('three'));
</script>
    <hr>
    <div id="five">
        <h2 data-bind="text: firstName"></h2>
        <h2 data-bind="text: lastName"></h2>
        <span>
            <input type="text" data-bind="value: fullName"></span>
    </div>
    <script type="text/javascript">
    var view = {
        firstName: ko.observable('miao'),
        lastName: ko.observable('zhirui')
    }
    view.fullName = ko.computed({
        read: function() {
           return this.firstName()+ " " + this.lastName();
        },
        write: function(value) {//white的时候会传入值的
            var space = value.lastIndexOf(' ');
            this.firstName(value.substring(0, space));
            this.lastName(value.substring(space));
        },
        owner: view
    })
    ko.applyBindings(view, document.getElementById('five'));
</script>
<hr>
<div id="six">
    <span data-bind='text: price'></span>
    <span><input type="text" data-bind="value: formaterPrice"></span>
<script type="text/javascript">
    var view = {
        price: ko.observable("$15")
    } 
    view.formaterPrice = ko.computed({
        read: function() {
            return this.price();
        },
        write: function(value) {
            var value = value.replace(/[^\.\d]/g, '');
           value =  parseFloat(value)
           value = value.toFixed(2)
            this.price(value)
        },
        owner: view
    })
    ko.applyBindings(view, document.getElementById('six'));
</script>
</div>
</body>
</html>