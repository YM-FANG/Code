var path = require('path');
var express = require('express');

var app = express();

app.get('/abc',function(req,res){
    console.log(req);
    res.end('hello abc');
})
app.get('/cde',function(req,res){
    res.end('hello cde');
})
var server = app.listen(8081,function(){
    var host = server.address().address;
    var port = server.address().port;

    console.log("%s,%s",host,port);
})