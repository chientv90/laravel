FROM centos:7

# Install EPEL Repo
#RUN curl https://getfedora.org/static/fedora.gpg | gpg --import
#RUN rpm -Uvh https://dl.fedoraproject.org/pub/epel/epel-release-latest-7.noarch.rpm \
# && rpm -Uvh http://rpms.remirepo.net/enterprise/remi-release-7.rpm

RUN yum install -y --enablerepo=extras epel-release && \
    yum -y install http://rpms.remirepo.net/enterprise/remi-release-7.rpm
RUN yum update -y
RUN yum install -y nginx && \
        yum clean all

#RUN yum --enablerepo=extras -y install epel-release
RUN yum -y install --enablerepo=remi-php74 php-fpm php php-bcmath php-cli php-common php-gd php-intl php-ldap php-mbstring \
    php-mysqlnd php-pear php-soap php-xml php-xmlrpc php-zip

RUN yum reinstall -y glibc-common  or  yum update -y glibc-common
RUN localedef -f UTF-8 -i ja_JP ja_JP.UTF-8
ENV LANG ja_JP.UTF-8
ENV LC_ALL ja_JP.UTF-8
ENV LANGUAGE ja_JP:ja
ENV TZ Asia/Tokyo

RUN yum install php-pecl-xdebug.x86_64 --skip-broken
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
ENV PATH $PATH:/root/.composer/vendor/bin

COPY php.ini /usr/local/etc/php/php.ini

COPY ./php-fpm.conf /etc/php-fpm.d/www.conf

EXPOSE 80

STOPSIGNAL SIGTERM

WORKDIR /var/www

CMD ["nginx", "-g", "daemon off;"]

