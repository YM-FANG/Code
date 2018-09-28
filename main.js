var router = require("./router");
var http = require("./http");

// http.start(router.route);
function printHello(){
    console.log(Date());
}

setInterval(printHello,2000);
// var events = require("events");
//
// var eventEmitter = new events.EventEmitter();
//
// var connectHandler = function connected(){
//     console.log('connect success');
//     eventEmitter.emit('data_received');
// }
// eventEmitter.on('connection',connectHandler);
// eventEmitter.on('data_received',function () {
//     console.log("数据接收成功");
// });
//
// eventEmitter.emit('connection');
//
// console.log("exec over");