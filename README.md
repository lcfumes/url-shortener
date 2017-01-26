## Virtual Machine ##

### Install Docker ###

```
$ sudo apt-get install apt-transport-https \ 
       ca-certificates


$ curl -fsSL https://yum.dockerproject.org/gpg | sudo apt-key add -

$ apt-key fingerprint 58118E89F3A912897C070ADBF76221572C52609D
  pub   4096R/2C52609D 2015-07-14
        Key fingerprint = 5811 8E89 F3A9 1289 7C07  0ADB F762 2157 2C52 609D
  uid                  Docker Release Tool (releasedocker) <docker@docker.com>

$ sudo add-apt-repository \
       "deb https://apt.dockerproject.org/repo/ \
       ubuntu-$(lsb_release -cs) \
       main"

$ sudo apt-get update

$ sudo apt-get -y install docker-engine

$ sudo usermod -aG docker ${USER}
```

More instructions:
https://docs.docker.com/engine/installation/linux/ubuntu/


### Install Docker Compose ###

```
$ sudo curl -L "https://github.com/docker/compose/releases/download/1.9.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose

$ sudo chmod +x /usr/local/bin/docker-compose
```

### Hosts ###

```
$ sudo vim /etc/hosts

```

Add hosts

```
127.0.0.1 fum.es mongodb.dev

```
