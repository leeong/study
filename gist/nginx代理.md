# 图片资源重定向
location ^~ /upload/ {
    add_header 'Access-Control-Allow-Origin' '*'; #允许来自所有的访问地址
    add_header 'Access-Control-Allow-Credentials' 'true';
    add_header 'Access-Control-Allow-Methods' 'GET, PUT, POST, DELETE, OPTIONS'; #支持请求方式
    add_header 'Access-Control-Allow-Headers' 'Content-Type,*';
    proxy_pass http://host/upload/;
}
