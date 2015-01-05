<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>对数据进行叠加，最终返回一个和</title>
	<script type="text/javascript" src="underscore-min.js"></script>
	<script type="text/javascript">
	   var arr = [1,2,3];
	   var sum=_.reduce(arr, function(memo, num) {return memo+num}, 10)
	  	console.log(sum)
	</script>
</head>
<body>
	
</body>
</html>