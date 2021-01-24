FROM opensuse/leap:15.2

MAINTAINER "Vjacheslav Borisov <slavb18@gmail.com>"
LABEL description="use this image to host your php apps"

# install apache2 using zypper
RUN zypper -n update && zypper -n install apache2 php7 php7-mysql php7-curl php7-xsl xhtml-dtd mathml-dtd php7-tidy php7-mbstring apache2-mod_php7 php7-posix git

# create welcome file for apache service
RUN echo "Welcome to ilbru/openlamp-core, copy your apps /srv/www/htdocs" > /srv/www/htdocs/index.html 

# start apache2 service
CMD ["apache2ctl", "-D FOREGROUND"]

