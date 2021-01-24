FROM ilbru/openlamp-core

MAINTAINER "Vjacheslav Borisov <slavb18@gmail.com>"
LABEL description="use this image to host your php apps"

RUN mkdir /usr/share/php
RUN cd /usr/share/php && git clone https://github.com/ilb/phplib.git .phplib-1 && ln -s .phplib-1/classes phplib-1
RUN cd /usr/share/php && git clone https://github.com/ilb/happymeal.git .happymeal-1 && ln -s .happymeal-1/classes happymeal-1


# create welcome file for apache service
RUN echo "Welcome to ilbru/openlamp-php, copy your apps /srv/www/htdocs" > /srv/www/htdocs/index.html 

# start apache2 service
CMD ["apache2ctl", "-D FOREGROUND"]

