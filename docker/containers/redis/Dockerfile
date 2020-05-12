FROM redis:5.0.6

# redis.conf:109 のログファイル設定を有効化したときに必要
RUN mkdir -p /var/log/redis
RUN chmod -R 777 /var/log/redis
COPY redis.conf /usr/local/etc/redis/redis.conf
