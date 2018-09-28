var http = require('http');
var querystring = require('querystring');
var os = require('os');
var util = require('util');
console.log(os.tmpdir());
console.log(os.endianness());
console.log(os.hostname());
console.log(os.type());
console.log(os.platform());
console.log(os.arch());
console.log(os.release());
console.log(os.uptime());
console.log(os.loadavg());
console.log(os.totalmem());
console.log(os.freemem());
console.log(os.cpus());
console.log(os.networkInterfaces());


http.createServer(function(req,res){
    res.writeHead(200,{'Content-Type':'text/plain'})
    var post = '';
    req.on('data',function(chunk){
       post += chunk;
    });

    req.on('end',function(){
       post = querystring.parse(post);
       res.end(util.inspect(post));
    });
}).listen(3000);