var http = require('http');
var url = require('url');

function start(){
    function onRequest(request,response){
        var pathname = url.parse(request.url).pathname;
        console.log(pathname);
        response.writeHead(200,{"content-type":"text/plain"});
        response.write("hello world");
        response.end();
    }
    console.log(__filename);
    http.createServer(onRequest).listen(8081);
}
exports.start = start;

// http.createServer(function(request,response){
//     response.writeHead(200,{'Content-Type':'text/plain'});
//
//     response.end("hello ,this is a demo");
// }).listen(8080);
//
// console.log("server running at 10.20.6.98:8080")