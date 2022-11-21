
// 代码仓库地址
def repositoryUrl = 'git@github.com:YM-FANG/Code.git'
def branch="${branch}"


//部署
node {
    String currentDir =pwd()
    properties([

    ])


    stage ('ready go') {
        sh ("cd /home")
         sh ("rm -rf Code")
    }

    stage('pull code') {
         sh ("cd /home")
         sh ("git clone ${repositoryUrl}")
     
    }
     stage('push code') {
         sh ("cd /home")
         sh ("scp -r Code neil@172.26.0.108:/Users/admin/code/jenkens")
    }


    stage ("echo version") {
        println("hahah")
    }



}
