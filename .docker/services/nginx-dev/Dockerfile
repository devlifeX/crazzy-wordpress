FROM alpine:3.11

LABEL maintainer="NGINX Docker Maintainers <docker-maint@nginx.com>"

ENV NGINX_VERSION 1.18.0
ENV HTTP_REDIS_VERSION 0.3.8
ENV MISC_NGINX 0.32
ENV DEVEL_KIT 0.3.1
ENV REDIS_2 0.15
ENV SR_CACHE 0.31
ENV HEADERS_MORE 0.33
ENV VTS 0.1.18 
ENV ECHO 0.61 

RUN GPG_KEYS=B0F4253373F8F6F510D42178520A9993A1C052F8 \
	&& CONFIG="\
		--prefix=/etc/nginx \
		--sbin-path=/usr/sbin/nginx \
		--modules-path=/usr/lib/nginx/modules \
		--conf-path=/etc/nginx/nginx.conf \
		--error-log-path=/var/log/nginx/error.log \
		--http-log-path=/var/log/nginx/access.log \
		--pid-path=/var/run/nginx.pid \
		--lock-path=/var/run/nginx.lock \
		--http-client-body-temp-path=/var/cache/nginx/client_temp \
		--http-proxy-temp-path=/var/cache/nginx/proxy_temp \
		--http-fastcgi-temp-path=/var/cache/nginx/fastcgi_temp \
		--http-uwsgi-temp-path=/var/cache/nginx/uwsgi_temp \
		--http-scgi-temp-path=/var/cache/nginx/scgi_temp \
		--user=nginx \
		--group=nginx \
		--with-http_ssl_module \
		--with-http_realip_module \
		--with-http_addition_module \
		--with-http_sub_module \
		--with-http_dav_module \
		--with-http_flv_module \
		--with-http_mp4_module \
		--with-http_gunzip_module \
		--with-http_gzip_static_module \
		--with-http_random_index_module \
		--with-http_secure_link_module \
		--with-http_stub_status_module \
		--with-http_auth_request_module \
		--with-http_xslt_module=dynamic \
		--with-http_image_filter_module=dynamic \
		--with-http_geoip_module=dynamic \
		--with-threads \
		--with-stream \
		--with-stream_ssl_module \
		--with-stream_ssl_preread_module \
		--with-stream_realip_module \
		--with-stream_geoip_module=dynamic \
		--with-http_slice_module \
		--with-mail \
		--with-mail_ssl_module \
		--with-compat \
		--with-file-aio \
		--with-http_v2_module \
		--add-module=/usr/src/echo-nginx-module-$ECHO \
		--add-module=/usr/src/headers-more-nginx-module-$HEADERS_MORE \
		--add-module=/usr/src/nginx-module-vts-$VTS \
		--add-module=/usr/src/srcache-nginx-module-$SR_CACHE \
		--add-module=/usr/src/ngx_http_redis-$HTTP_REDIS_VERSION \
		--add-module=/usr/src/redis2-nginx-module-$REDIS_2 \
		--add-module=/usr/src/ngx_devel_kit-$DEVEL_KIT \
		--add-module=/usr/src/set-misc-nginx-module-$MISC_NGINX \
	" \
	&& addgroup -S nginx \
	&& adduser -D -S -h /var/cache/nginx -s /sbin/nologin -G nginx nginx \
	&& apk add --no-cache --virtual .build-deps \
		gcc \
		libc-dev \
		make \
		openssl-dev \
		pcre-dev \
		zlib-dev \
		linux-headers \
		curl \
		unzip \
		gnupg \
		libxslt-dev \
		gd-dev \
		geoip-dev \
	&& curl -fSL http://nginx.org/download/nginx-$NGINX_VERSION.tar.gz -o nginx.tar.gz \
	&& curl -fSL http://nginx.org/download/nginx-$NGINX_VERSION.tar.gz.asc  -o nginx.tar.gz.asc \
	&& curl -fSL https://people.freebsd.org/~osa/ngx_http_redis-$HTTP_REDIS_VERSION.tar.gz -o ngx_http_redis.tar.gz \
	&& curl -fSL https://github.com/vision5/ngx_devel_kit/archive/v$DEVEL_KIT.tar.gz -o ngx_devel_kit.tar.gz \
	&& curl -fSL https://github.com/openresty/set-misc-nginx-module/archive/v$MISC_NGINX.zip -o ngx_set_misc.zip \
	&& curl -fSL https://github.com/openresty/redis2-nginx-module/archive/v$REDIS_2.tar.gz -o redis2-nginx-module.tar.gz \
	&& curl -fSL https://github.com/openresty/srcache-nginx-module/archive/v$SR_CACHE.tar.gz -o srcache-nginx-module.tar.gz \
	&& curl -fSL https://github.com/openresty/headers-more-nginx-module/archive/v$HEADERS_MORE.tar.gz -o headers-more-nginx-module.tar.gz \
	&& curl -fSL https://github.com/vozlt/nginx-module-vts/archive/v$VTS.tar.gz -o nginx-module-vts.tar.gz \
	&& curl -fSL https://github.com/openresty/echo-nginx-module/archive/v$ECHO.tar.gz -o echo-nginx-module.tar.gz \
	&& export GNUPGHOME="$(mktemp -d)" \
	&& found=''; \
	for server in \
		ha.pool.sks-keyservers.net \
		hkp://keyserver.ubuntu.com:80 \
		hkp://p80.pool.sks-keyservers.net:80 \
		pgp.mit.edu \
	; do \
		echo "Fetching GPG key $GPG_KEYS from $server"; \
		gpg --keyserver "$server" --keyserver-options timeout=10 --recv-keys "$GPG_KEYS" && found=yes && break; \
	done; \
	test -z "$found" && echo >&2 "error: failed to fetch GPG key $GPG_KEYS" && exit 1; \
	gpg --batch --verify nginx.tar.gz.asc nginx.tar.gz \
	&& rm -r "$GNUPGHOME" nginx.tar.gz.asc \
	&& mkdir -p /usr/src \
	&& tar -zxC /usr/src -f nginx.tar.gz \
	&& rm nginx.tar.gz \
	&& tar -zxC /usr/src -f ngx_http_redis.tar.gz \
	&& tar -zxC /usr/src -f ngx_devel_kit.tar.gz \
	&& tar -zxC /usr/src -f redis2-nginx-module.tar.gz \
	&& tar -zxC /usr/src -f srcache-nginx-module.tar.gz \
	&& tar -zxC /usr/src -f headers-more-nginx-module.tar.gz \
	&& tar -zxC /usr/src -f nginx-module-vts.tar.gz \
	&& tar -zxC /usr/src -f echo-nginx-module.tar.gz \
	&& unzip ngx_set_misc.zip -d /usr/src \
	&& rm ngx_devel_kit.tar.gz \
	&& rm ngx_http_redis.tar.gz \
	&& rm ngx_set_misc.zip \
	&& rm redis2-nginx-module.tar.gz \
	&& rm srcache-nginx-module.tar.gz \
	&& rm headers-more-nginx-module.tar.gz \
	&& rm echo-nginx-module.tar.gz \
	&& rm nginx-module-vts.tar.gz \
	&& cd /usr/src/nginx-$NGINX_VERSION \
	&& ./configure $CONFIG --with-debug \
	&& make -j$(getconf _NPROCESSORS_ONLN) \
	&& mv objs/nginx objs/nginx-debug \
	&& mv objs/ngx_http_xslt_filter_module.so objs/ngx_http_xslt_filter_module-debug.so \
	&& mv objs/ngx_http_image_filter_module.so objs/ngx_http_image_filter_module-debug.so \
	&& mv objs/ngx_http_geoip_module.so objs/ngx_http_geoip_module-debug.so \
	&& mv objs/ngx_stream_geoip_module.so objs/ngx_stream_geoip_module-debug.so \
	&& ./configure $CONFIG \
	&& make -j$(getconf _NPROCESSORS_ONLN) \
	&& make install \
	&& rm -rf /etc/nginx/html/ \
	&& mkdir /etc/nginx/conf.d/ \
	&& mkdir -p /usr/share/nginx/html/ \
	&& install -m644 html/index.html /usr/share/nginx/html/ \
	&& install -m644 html/50x.html /usr/share/nginx/html/ \
	&& install -m755 objs/nginx-debug /usr/sbin/nginx-debug \
	&& install -m755 objs/ngx_http_xslt_filter_module-debug.so /usr/lib/nginx/modules/ngx_http_xslt_filter_module-debug.so \
	&& install -m755 objs/ngx_http_image_filter_module-debug.so /usr/lib/nginx/modules/ngx_http_image_filter_module-debug.so \
	&& install -m755 objs/ngx_http_geoip_module-debug.so /usr/lib/nginx/modules/ngx_http_geoip_module-debug.so \
	&& install -m755 objs/ngx_stream_geoip_module-debug.so /usr/lib/nginx/modules/ngx_stream_geoip_module-debug.so \
	&& ln -s ../../usr/lib/nginx/modules /etc/nginx/modules \
	&& strip /usr/sbin/nginx* \
	&& strip /usr/lib/nginx/modules/*.so \
	&& rm -rf /usr/src/nginx-$NGINX_VERSION \
	&& rm -rf /usr/src/ngx_http_redis-$HTTP_REDIS_VERSION \
	\
	# Bring in gettext so we can get `envsubst`, then throw
	# the rest away. To do this, we need to install `gettext`
	# then move `envsubst` out of the way so `gettext` can
	# be deleted completely, then move `envsubst` back.
	&& apk add --no-cache --virtual .gettext gettext \
	&& mv /usr/bin/envsubst /tmp/ \
	\
	&& runDeps="$( \
		scanelf --needed --nobanner /usr/sbin/nginx /usr/lib/nginx/modules/*.so /tmp/envsubst \
			| awk '{ gsub(/,/, "\nso:", $2); print "so:" $2 }' \
			| sort -u \
			| xargs -r apk info --installed \
			| sort -u \
	)" \
	&& apk add --no-cache --virtual .nginx-rundeps $runDeps \
	&& apk del .build-deps \
	&& apk del .gettext \
	&& mv /tmp/envsubst /usr/local/bin/ \
	\
	# forward request and error logs to docker log collector
	&& ln -sf /dev/stdout /var/log/nginx/access.log \
	&& ln -sf /dev/stderr /var/log/nginx/error.log

COPY nginx.conf /etc/nginx/nginx.conf

EXPOSE 80

STOPSIGNAL SIGTERM

CMD ["nginx", "-g", "daemon off;"]