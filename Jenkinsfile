
// 代码仓库地址
def repositoryUrl = 'git@github.com:YM-FANG/Code.git'
def branch="${branch}"


//部署
node {
    String currentDir =pwd()
    properties([

    ])


    stage ('ready go') {
        sh ("cd /home && rm -rf Code")
  
    }

    stage('pull code') {
      
         sh ("cd /home && git clone ${repositoryUrl} &&  cd Code/ && git checkout  ${branch}")
      
     
    }
     stage('push code') {
 
         sh ("cd /home/Code/ && scp -r Code neil@172.26.0.108:/Users/admin/code/jenkens")
    }


    stage ("echo version") {
        println("hahah")
    }



}
