<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>过滤所需要的元素</title>
	<script type="text/javascript" src="underscore-min.js"></script>
	<script type="text/javascript">
	// _.reject返回不满足条件的集合
		// var arr = [1,2,3,4]
		// var result = _.reject(arr,function(num) {//返回所有不满足条件的集合
		// 	return num>2;
		// })		
		// console.log(result);
	//_.every如果list里面的数据都通过了测试，则返回真,反之返回假
		// var arr = [1,2,3]
		// var result = _.every(arr)
		// console.log(result)
	//_.contains
	 	// var arr = [1,2,3]
	 	// var obj = [{'a':1}, {'b':2}]
	 	// var result = _.contains(arr, {'a':1});
	 	// console.log(result);
	 //_.union
	 	var arr =[1,2,3,1,1,2,3];
	 	var result = _.uniq(arr);
	 	var result1 = _.union(arr);
	 	console.log(arr);
	 	console.log(result);
	 	console.log(result1)
	</script>
</head>
<body>
	
</body>
</html>