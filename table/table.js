var table={
	url: 'chart.php',
	tableData: [],
	init: function() {
		$.proxy(this.getTableData(this.regroupTableData),this)
	},
	getTableData: function(callback) {
		$.ajax(this.url, {
			dataType: 'json',
			success: function(data) {
				callback(data)
			}
		})
	},
	param: {
		time: 'month',
		type: 'type',
		amount: 'amount',
		rowTotal: false,
		colTotal: true
	},
	regroupTableData: function(data) {
		var months = _.chain(data).pluck('month').uniq().value();
		var groupData = _(data).groupBy('type');
		 _.each(groupData, function(value, key) {
		 	// 类型下面的各个月份
			 var typeMonth = _.groupBy(value, 'month');
			 statusSum = _.map(typeMonth, function(val, ke) {
			 	var sum =  _.reduce(_.pluck(val ,'amount'));
				console.log(sum)			 	
			 })
			  groupData[key] = typeMonth
		})

		 regroupTableData = _.map(groupData, function(value, key) {

		 })

		console.log(months)
		console.log(groupData)
		// return regroupTableData;
	}
}





