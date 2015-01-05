<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>_.find()查找是否含有某个值</title>
	<script type="text/javascript" src="underscore-min.js"></script>
	<script type="text/javascript">
		var arr = [1,2,3,4];
		// 只获得第一个符合条件的元素，如果没有找到的话，返回的是underfined
		// 用来查找是否含有某一个值
		var result=_.find(arr,function(num) {return num<2});
		// if(result) {
		// 	alert('真')
		// }else{
		// 	alert('假')
		// }
	</script>
</head>
<body>
	
</body>
</html>