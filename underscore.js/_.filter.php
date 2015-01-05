<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>过滤所需要的元素</title>
	<script type="text/javascript" src="underscore-min.js"></script>
	<script type="text/javascript">
		var result = []
		var obj = [{"type":"Plug-In@Blk71","month":"April","status":"less than 1 year","amount":"15"},{"type":"Plug-In@Blk71","month":"April","status":"1year to 2 year","amount":""},{"type":"Plug-In@Blk71","month":"April","status":"more than 2 year","amount":"35"},{"type":"Plug-In@Blk71","month":"April","status":"vacant","amount":""},{"type":"Garag3","month":"April","status":"less than 1 year","amount":""},{"type":"Garag3","month":"April","status":"1year to 2 year","amount":""},{"type":"Garag3","month":"April","status":"more than 2 year","amount":"55"},{"type":"Garag3","month":"April","status":"vacant","amount":""},{"type":"FOE","month":"April","status":"less than 1 year","amount":""},{"type":"FOE","month":"April","status":"1year to 2 year","amount":"25"},{"type":"FOE","month":"April","status":"more than 2 year","amount":""},{"type":"FOE","month":"April","status":"vacant","amount":"43"},{"type":"Blk71 03-14","month":"April","status":"less than 1 year","amount":"18"},{"type":"Blk71 03-14","month":"April","status":"1year to 2 year","amount":""},{"type":"Blk71 03-14","month":"April","status":"more than 2 year","amount":"35"},{"type":"Blk71 03-14","month":"April","status":"vacant","amount":""},{"type":"PGP5","month":"April","status":"less than 1 year","amount":""},{"type":"PGP5","month":"April","status":"1year to 2 year","amount":"5"},{"type":"PGP5","month":"April","status":"more than 2 year","amount":"55"},{"type":"PGP5","month":"April","status":"vacant","amount":"13"}]
		// var result = _.findWhere(obj, {"type":'Blk71 03-14'});
		// var result = _.where(obj, {"type": "Blk71 03-14"})
		// var result = _.filter(obj, function(value) {
		// 	return value['type'] == 'PGP5'
		// })
		// console.log(result);
		var result = _.flatten(obj)
		console.log(result);
	</script>
</head>
<body>
	
</body>
</html>