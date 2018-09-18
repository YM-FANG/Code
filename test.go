package main

import (
	"fmt"
	"strings"
)

func main(){
  s := "a"
  modify(s)
  fmt.Println(s)
   num :=[]int{1,2,3,4,5,6,7,8,9}
  fmt.Println(num,num[3:7])
  for index,number := range num{
  	if number == 3{
  		fmt.Println("index",index)
  	}
  }

  str := "abc  bcd  def"
  arr := strings.Split(str,",")
  fmt.Println(len(arr),arr)

  kvs := map[string]int{"a":123,"b":234}
  key,ok := kvs["b"]
  if(ok){
  	fmt.Println(key)
  }
  fmt.Println(kvs)

  var s1=make([]string,10)

  var s2 = []string{"a","b","c"}
  fmt.Println(s2,len(s2))
  fmt.Println(s1,len(s1))

}

func modify(s string)string{
  s = "888888888"
  return s
}