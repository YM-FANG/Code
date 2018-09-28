var util = require('util');
function Base(){
    this.name = 'base';
    this.base = 1991;
    this.sayHello = function(){
        console.log('hello' + this.name );
    }
}

Base.prototype.showName = function(){
    console.log(this.name);
};

function Sub(){
    this.name = 'sub';
}
//util.inherits  继承
//sub不继承Base在构造函数中的属性，方法
util.inherits(Sub,Base);
var objBase = new Base();
objBase.showName();
objBase.sayHello();
console.log(objBase);
var objSub = new Sub();
objSub.showName();
console.log(objSub);
//////////////////////////////////////////////
function person(){
    this.name = 'fang ';
    this.toString = function(){
        return this.name;
    };
}
//util.inspect  将一个对象转成字符串
var obj = new person();
console.log(util.inspect(obj));
console.log(util.inspect(obj,true,null,true));

//util.isArray(object);  判断参数是不是数组
console.log(util.isArray([]));
//util.isDate(object)      判断是不是时间类型
//util.isRegExp(object)  判断参数是否是正则表达式
//util.isError(object)   是否错误对象
