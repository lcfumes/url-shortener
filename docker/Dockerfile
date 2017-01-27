# Pull base image.
FROM ubuntu:14.04

ENV DEBIAN_FRONTEND noninteractive

# Install.
RUN \
  sed -i 's/# \(.*multiverse$\)/\1/g' /etc/apt/sources.list && \
  apt-get update && \
  apt-get -y upgrade && \
  apt-get install -y build-essential && \
  apt-get install -y python-software-properties && \
  apt-get install -y software-properties-common && \
  apt-get install -y nginx && \
  apt-get install -y supervisor && \
  apt-get install -y git && \
  apt-get install zip unzip

RUN apt-key adv --recv-keys --keyserver keyserver.ubuntu.com 4F4EA0AAE5267A6C
RUN add-apt-repository -y ppa:ondrej/php
RUN apt-get update
RUN apt-get -y install php5.6 php5.6-dev php5.6-fpm php5.6-curl php5.6-mcrypt php5.6-json php5.6-cli php5.6-common php-pear php5.6-common php5.6-mongodb php5.6-xml php5.6-zip

# configure NGINX as non-daemon
RUN echo "daemon off;" >> /etc/nginx/nginx.conf

# configure php-fpm as non-daemon
RUN sed -i -e "s/;daemonize\s*=\s*yes/daemonize = no/g" /etc/php/5.6/fpm/php-fpm.conf

# clear apt cache and remove unnecessary packages
RUN apt-get autoclean && apt-get -y autoremove

COPY supervisord.conf /etc/supervisord.conf
COPY nginx.conf /etc/nginx/nginx.conf

RUN service php5.6-fpm start

CMD ["/usr/bin/supervisord", "-n"]