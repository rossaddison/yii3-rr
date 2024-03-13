# yii3-rr
A Yiisoft RoadRunner Server installation illustrated with Google Remote Procedure Call (gRPC) and Windows Command Prompt

## Windows 11 php8.1 Preparation ##
C:\wamp64\bin\php\php8.1.13\phpForApache.ini (approx line 940) extension=php-grpc.dll

Search Environment Variables...System Variables...path

Path 1: C:\wamp64\bin\php\php8.1.13

https://github.com/protocolbuffers/protobuf/releases/download/v25.3/protoc-25.3-win64.zip
````
C:\yii3-rr>php ./vendor/bin/rr download-protoc-binary
````

Search Environment Variables...System Variables...path

Path 2: C:\protoc-25.3-win64\bin  

````
C:\yii3-rr>php --version
````

PHP 8.1.13 (cli) (built: Nov 22 2022 15:49:14) (ZTS Visual C++ 2019 x64)
Copyright (c) The PHP Group
Zend Engine v4.1.13, Copyright (c) Zend Technologies
    with Zend OPcache v8.1.13, Copyright (c), by Zend Technologies
    with Xdebug v3.1.6, Copyright (c) 2002-2022, by Derick Rethans

## Useful commands ##
````
C:\>cd yii3-rr
````

````
C:\yii3-rr>composer require yiisoft/yii-runner-roadrunner
````

````
Do you trust "yiisoft/config" to execute code and wish to enable it now? 
(writes "allow-plugins" to composer.json) [y,n,d,?] y
````

````
C:\yii3-rr>php ./vendor/bin/rr get
````

 Environment:
   - Version:          2023.*
   - Stability:        stable
   - Operating System: windows
   - Architecture:     amd64

  - roadrunner-server/roadrunner (v2023.3.12): Downloading...
RoadRunner (v2023.3.12) has been installed into C:\yii3-rr/rr.exe

 Do you want create default ".rr.yaml" configuration file? (yes/no) [yes]:
 > yes

 [OK] Your project is now ready in C:\yii3-rr


````
C:\yii3-rr>md generated
````
**Create a proto file in proto directroy (#Protoc-plugin)[https://roadrunner.dev/docs/plugins-grpc#protoc-plugin]**
````
C:\yii3-rr>protoc --plugin=protoc-gen-php-grpc.exe --php_out=./generated --php-grpc_out=./generated proto/pinger.proto
````

````
C:\>cd yii3-rr\generated
````

````
C:\yii3-rr\generated>dir /p
````

13/03/2024  16:17    <DIR>          GRPC

## Copy rossaddison/yii3-rr/generated/GRPC Pinger.php & PingerHttpClient.php into GRPC directory ##

## Update composer.json with the following to ensure that rr.exe can pick up the generated files: ##

````
"autoload": {
        "psr-4": {
          "GRPC\\": "generated/GRPC"  
        }
    },
````

````
C:\yii3-rr>composer update
````

Edit rr.yaml line 3 and 4 commands interchangeably.

## server: command: 'php DotRrYii3ServerCommandWorker.php' #

##  server: command: 'php DotRrSpiralServerCommandWorker.php' #
