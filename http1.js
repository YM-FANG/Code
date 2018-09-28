var http = require("http");
var url = require("url");
var util = require("util");

http.createServer(function (req,res) {
    res.writeHead(200,{'Content-Type':'text/plain;charset=utf-8'});

    var params = url.parse(req.url,true).query;
    res.write(params.name);
    res.write("\n");
    res.write(params.sex);
    res.end();
    // console.log(params.name);
    // console.log(params.url);
    // res.end(util.inspect(url.parse(req.url,true)));
}).listen(8081);

