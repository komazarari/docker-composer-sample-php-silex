PHP sample app with docker-compose development and the GKE deployments
==============

PHP Silex で MySQL, Redis を使うアプリケーションの例です。
開発環境を docker-compose で作成します。


開発環境
--------

### 立ち上げ

    $ docker-compose up

### composer

    $ docker run --rm -it -v ${PWD}:/app composer install

### Web Access

http://localhost:3000


### CLI

    $ docker-compose exec app bin/console list

### UnitTest

    $ docker-compose exec app vendor/bin/phpunit
