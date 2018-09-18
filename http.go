package main

import(
	"fmt"
	"net/http"
	_"strings"
	"io/ioutil"
)

func handler(w http.ResponseWriter, req *http.Request) {
	fmt.Println(w,"hello server")
}

type MyHandler struct{}

func (mh MyHandler) ServeHTTP(w http.ResponseWriter,r *http.Request){
	body,err := ioutil.ReadAll(r.Body)
	if err !=nil{
		fmt.Println("read all fail")
		w.WriteHeader(500)
		return
	}
	w.Write([]byte(body))
	// r.ParseForm()
	// values := r.Form["abc"]
	// fmt.Println("abc",strings.Join(values,","))
	value1 := r.FormValue("abc")
	value2 := r.FormValue("bcd")
	w.Write([]byte("GET:abc="+value1+":"+value2))
	fmt.Println("Method:",r.Method)
	fmt.Println("URL:",r.URL,"URL.Path:",r.URL.Path)
	fmt.Println("RemoteAddress",r.RemoteAddr)
	fmt.Println("RemoteAddress",r.UserAgent())
	fmt.Println("RemoteAddress",r.Header.Get("Accept"))


	if r.URL.Path == "/abc" {
		w.Write([]byte("abc"))
		return
	}
	if r.URL.Path == "/def" {
		w.Write([]byte("def"))
		return
	}
	if r.URL.Path == "/hig" {
		w.Write([]byte("hig"))
		return
	}
}

func main(){

	// http.HandleFunc("/",func (w http.ResponseWriter, r *http.Request) {
	// 	w.Write([]byte("hello,Go http server"))	
	// })
	// http.HandleFunc("/abc",func(w http.ResponseWriter,r * http.Request){
	// 	w.Write([]byte("abc"))
	// 	})
	// 	
	mux := http.NewServeMux()
	mux.HandleFunc("/",handler)
	if err:= http.ListenAndServe(":12345",MyHandler{});err!=nil{
		fmt.Println("http fial",err)
	}
}