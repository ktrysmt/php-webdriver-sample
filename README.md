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
# docker run -d --link selenium-hub:hub selenium/node-firefox-debug
# docker run -d --link selenium-hub:hub selenium/node-chrome-debug
# exit
$ vagrant share --http 4444 # note the hostname
```

### to take screenshot..

Need to install IPA font in linux.

- ref: http://aqafiam.github.io/blog/how-to-install-phantomjs-casperjs/

```
sudo yum -y install mkfontdir mkfontscale
wget "http://sourceforge.jp/frs/redir.php?m=osdn&f=%2Fmix-mplus-ipa%2F59021%2Fmigmix-medium-20130702.tar.xz" -O migmix.tar.xz
tar Jxf migmix.tar.xz
mkdir -p /usr/share/fonts/ipa/TrueType
cd migmix-medium-20130702/
cp migmix-* /usr/share/fonts/ipa/TrueType/
mkfontdir
mkfontscale
```

