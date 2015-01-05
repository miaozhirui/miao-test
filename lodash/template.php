<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>template</title>
    <script type="text/javascript" src="lodash.js"></script>
    <script type="text/javascript">
        var template = _.template('<%=   ag   %>');

        var result = template({'name': 'miaozhirui', 'age': 23});
        console.log(result)
        //<![CDATA[
        // console.log(template)
       //]]>
    </script>
</head>
<body>
    
</body>
</html>