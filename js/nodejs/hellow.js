
var http = require('http');
　　http.createServer(function (req, res) {
　　  res.writeHead(200, {'Content-Type': 'text/plain'});
 　　 res.end('今天的天气真的是不错啊，哈哈 World\n');
　　}).listen(1337, "127.0.0.1");
　　console.log('Server running at http://www.houdunwang.com/');