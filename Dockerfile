FROM bitnami/moodle:4

ENV MOODLE_DATABASE_TYPE=pgsql \
    MOODLE_DATABASE_HOST=turntable.proxy.rlwy.net \
    MOODLE_DATABASE_PORT_NUMBER=11670 \
    MOODLE_DATABASE_USER=postgres \
    MOODLE_DATABASE_NAME=moodlea \
    MOODLE_DATABASE_PASSWORD=JFFIVnQJvZzvaZVJgcWhHZJfvBndJbpd

EXPOSE 8080

CMD ["httpd", "-f", "/opt/bitnami/apache/conf/httpd.conf", "-DFOREGROUND"]
