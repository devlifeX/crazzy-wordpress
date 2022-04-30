FROM wordpress:php7.4-fpm
RUN apt update -y && apt install -y libgmp-dev re2c libmhash-dev libmcrypt-dev file libxml2-dev
RUN ln -s /usr/include/x86_64-linux-gnu/gmp.h /usr/local/include/
RUN docker-php-ext-configure gmp && docker-php-ext-install gmp
ENV EXT_REDIS_VERSION=5.2.2 EXT_IGBINARY_VERSION=3.1.2

RUN docker-php-source extract \
    # igbinary
    && mkdir -p /usr/src/php/ext/igbinary \
    &&  curl -fsSL https://github.com/igbinary/igbinary/archive/$EXT_IGBINARY_VERSION.tar.gz | tar xvz -C /usr/src/php/ext/igbinary --strip 1 \
    && docker-php-ext-install igbinary \
    # redis
    && mkdir -p /usr/src/php/ext/redis \
    && curl -fsSL https://github.com/phpredis/phpredis/archive/$EXT_REDIS_VERSION.tar.gz | tar xvz -C /usr/src/php/ext/redis --strip 1 \
    && docker-php-ext-configure redis --enable-redis-igbinary \
    && docker-php-ext-install redis \
    #SOAP
    && docker-php-ext-install soap \

    # cleanup
    && docker-php-source delete

# ioncube loader
RUN curl -fSL 'http://downloads3.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz' -o ioncube.tar.gz \
    && mkdir -p ioncube \
    && tar -xf ioncube.tar.gz -C ioncube --strip-components=1 \
    && rm ioncube.tar.gz \
    && mv ioncube/ioncube_loader_lin_7.4.so /var/www/ioncube_loader_lin_7.4.so \
    && rm -r ioncube

RUN touch /usr/local/etc/php/conf.d/docker-php-ext-ioncube.ini \
    && echo 'zend_extension = /var/www/ioncube_loader_lin_7.4.so' > /usr/local/etc/php/conf.d/docker-php-ext-ioncube.ini


COPY ./docker-entrypoint.sh /bin/docker-entrypoint.sh
RUN chmod +x /bin/docker-entrypoint.sh


RUN chown -R www-data:www-data /usr/src/wordpress; 
RUN chown -R www-data:www-data /var/www/html/wp-content
RUN chmod -R 777 wp-content

ENTRYPOINT ["/bin/docker-entrypoint.sh"]
CMD ["php-fpm"]

