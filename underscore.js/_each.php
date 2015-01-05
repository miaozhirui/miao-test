<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>_.each()</title>
	<script type="text/javascript" src="underscore-min.js"></script>
	<script type="text/javascript">
	var arr = [];
	var arr1 = [];
	var obj = {one: "1", two: "2", three: "3", four: "4", five: "5" }
		_.each(obj, function(num , key) {//如果只传递一个参数的话，代表着是值，如果有第二个参数，代表着键
			arr.push(key)
			arr1.push(num)
		});
		console.log(arr);
		console.log(arr1)
	</script>
</head>
<body>
	
</body>
</html>