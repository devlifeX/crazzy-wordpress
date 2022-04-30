FROM wordpress:cli

USER root

RUN mkdir /home/ioncube \ 
&& chmod 777 /home/ioncube

# ioncube loader
RUN curl -fSL 'http://downloads3.ioncube.com/loader_downloads/ioncube_loaders_lin_x86-64.tar.gz' -o ioncube.tar.gz \
    && mkdir -p ioncube \
    && tar -xf ioncube.tar.gz -C ioncube --strip-components=1 \
    && rm ioncube.tar.gz \
    && mv ioncube/ioncube_loader_lin_7.4.so /home/ioncube/ioncube_loader_lin_7.4.so \
    && rm -r ioncube

RUN touch /usr/local/etc/php/conf.d/docker-php-ext-ioncube.ini \
    && echo 'zend_extension = /home/ioncube/ioncube_loader_lin_7.4.so' > /usr/local/etc/php/conf.d/docker-php-ext-ioncube.ini

ENTRYPOINT ["docker-entrypoint.sh"]
USER www-data
CMD ["wp", "shell"]

