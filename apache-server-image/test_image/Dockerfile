FROM ksidock/apache-server:v2
RUN apt-get update \
&& apt-get install -y curl \
&& apt-get install -y git \
&& apt-get install -y vim
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get -y install php libapache2-mod-php
WORKDIR /var/www/html
RUN apt-get install -y mysql-client
RUN apt-get install -y php-mysql
CMD /usr/sbin/apache2ctl -D FOREGROUND
RUN git clone https://github.com/shehryarkn/PHP-MySQL-CRUD-Web-Application/
