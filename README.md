### require

- selenium-hub
- composer

### setup

```
composer install
```

### usage

```
php screenshot.php http://example-0000.vagrantshare.com/wd/hub # use provided it
``` 

### example to setup selenium-hub

use docker on coreos-vagrant

- ref: <https://github.com/coreos/coreos-vagrant>

```
$ vagrant login
$ vagrant ssh
# docker run -d -p 4444:4444 --name selenium-hub selenium/hub
# docker run -docker run -d --link selenium-hub:hub selenium/node-firefox-debug
# docker run -docker run -d --link selenium-hub:hub selenium/node-chrome-debug
# exit
$ vagrant share --http 4444 # note the hostname
```


