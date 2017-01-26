# Pull base image.
FROM ubuntu:14.04

# Install.
RUN \
  sed -i 's/# \(.*multiverse$\)/\1/g' /etc/apt/sources.list && \
  apt-get update && \
  apt-get -y upgrade && \
  apt-get install -y build-essential && \
  apt-get install -y python-software-properties && \
  apt-get install -y software-properties-common && \
  apt-get install -y nginx && \
  apt-get install -y supervisor

RUN apt-get -y install php5 php5-fpm php5-curl php5-mcrypt php5-json php5-cli php5-common php-pear 

RUN pecl install mongodb
RUN echo extension=mongodb.so > /etc/php5/cli/conf.d/mongodb.ini
RUN echo extension=mongodb.so > /etc/php5/fpm/conf.d/mongodb.ini

RUN sed -i 's/;daemonize = yes/daemonize = no/g' /etc/php5/fpm/php-fpm.conf

COPY supervisord.conf /etc/supervisord.conf
COPY nginx.conf /etc/nginx/nginx.conf

CMD ["/usr/bin/supervisord", "-n"]
