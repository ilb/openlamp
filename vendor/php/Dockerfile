FROM ilbru/openserver-core

MAINTAINER "Vjacheslav Borisov <slavb18@gmail.com>"
LABEL description="use this image to host your php apps"

COPY setup /tmp/setup
RUN cd /tmp/setup && ./install.sh \
 # create welcome file for apache service
 && echo "Welcome to ilbru/openlamp-php, copy your apps /srv/www/htdocs" > /srv/www/htdocs/index.html

# start apache2 service
CMD ["apache2ctl", "-D FOREGROUND"]
