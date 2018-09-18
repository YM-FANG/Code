package main

import (
		"database/sql"
		"fmt"
		_ "github.com/go-sql-driver/mysql"
)

func main(){
	db, err := sql.Open("mysql", "")
	if err != nil {
		fmt.Println(err)
		return
	}
	// rows,err := db.Query("select * from room_0")
	// if err !=nil {
	// 	fmt.Println(err)
	// }

	var name1,name2,name3,name4,name5 string
	var a =1138971
	err = db.QueryRow("select * from room_1 where room=?",a).Scan(&name1,&name2,&name3,&name4,&name5)
	if err != nil{
		fmt.Println("queryrow fail",err)
	}
	// for rows.Next(){
	// 	var name1,name2,name3,name4,name5 string
	// 	if err := rows.Scan(&name1,&name2,&name3,&name4,&name5);err != nil {
	// 		fmt.Println("scan fail",err)
	// 	}
		fmt.Println("info",name1,name2,name3,name4,name5)
	// }
	defer db.Close()
}
