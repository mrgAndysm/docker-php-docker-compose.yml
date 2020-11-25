基于docker-compose 搭建 php7.1 
===========================
### 环境依赖
    安装 Docker和docker-composer
### 部署步骤
    1.在根目录下直接 docker-compose up
    可以在
        ├── nginx             
        │       └── vhost   
    下配server

### 基础镜像该镜像已 push 到阿里容器镜像库
        ├── php7.1             
        │       └── Dockerfile   
### 目录结构描述

    ├── Readme.md                     // help   
    ├── nginx                     
    │       └── conf.d     // nginx配置
    │       └── vhost   
    ├── php                      
    │   ├── conf.d	 // php配置
    │        └── php.ini       
    └── docker-compose.yml

### php扩展 包括（phalcon，swoole，grpc，protobuf）
    bz2
    Core
    ctype
    curl
    date
    dom
    fileinfo
    filter
    ftp
    gd
    grpc
    hash
    iconv
    json
    libxml
    mbstring
    mongodb
    mysqlnd
    openssl
    pcre
    PDO
    pdo_mysql
    pdo_sqlite
    phalcon
    Phar
    posix
    protobuf
    psr
    readline
    redis
    Reflection
    session
    SimpleXML
    SPL
    sqlite3
    standard
    swoole
    tokenizer
    xml
    xmlreader
    xmlwriter
    yaml
    zip
    zlib
  

