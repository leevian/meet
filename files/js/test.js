var http=require('http');

http.createServer(function (request,response){

    // 发送HTTP头部
    // HTTP状态值：200：OK
    // 内容类型：text/plain
    response.writeHead(200,{'Content-Type':'text/plain'});

    // 发送相应数据
    
    response.end('这是第一个测试');
}).listen(8888);

//终端打印如下信息
console.log('Server running at http://127.0.0.1:8888/');
