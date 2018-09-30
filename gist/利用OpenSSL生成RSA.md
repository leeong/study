1. 生成私钥
    > openssl genrsa -out mykey.pem 1024
1. 生成公钥
    > openssl rsa -in mykey.pem -pubout > mykey.pub
    
    或者
    
    > openssl rsa -in mykey.pem -pubout > mykey.pem
