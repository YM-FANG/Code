const buf = Buffer.from('a','ascii');

console.log(buf.toString('binary'));



var fs = require("fs");
var zlib = require("zlib");

fs.createReadStream('input.txt')
    .pipe(zlib.createGzip())
    .pipe(fs.createWriteStream("inout.txt.gz"));

console.log("文件压缩完成");

fs.createReadStream("inout.txt.gz")
    .pipe(zlib.createGunzip())
    .pipe(fs.createWriteStream('inout.txt'));

console.log('文件解压完成');
// var data = '';
// var readStream = fs.createReadStream("input.txt");
// var writeStream = fs.createWriteStream('output.txt');

// writeStream.write(data,'UTF8');
// writeStream.end();
// writeStream.on('finish',function(){
//    console.log("write over");
// });
// readStream.pipe(writeStream);
//
// readStream.setEncoding('UTF8');
//
// readStream.on('data',function(chunk){
//     data += chunk;
// });
//
// readStream.on('end',function(){
//     console.log(data);
// });
// readStream.on('error',function(err){
//     console.log(err.stack);
// });

console.log("exec over");
