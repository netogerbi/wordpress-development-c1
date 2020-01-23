FROM wordpress:latest

RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini && \
    sed -i 's/post_max_size = 80M/max_execution_time = 50M/g' /usr/local/etc/php/php.ini && \
    sed -i "s/max_execution_time = 30/max_execution_time = 500/g" /usr/local/etc/php/php.ini && \
    sed -i "s/upload_max_size = 2M/max_execution_time = 50M/g" /usr/local/etc/php/php.ini