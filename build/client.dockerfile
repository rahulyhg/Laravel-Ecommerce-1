FROM nhieunguyen1510/lemphp5.6

COPY ./Laravel/ /var/www/html/Laravel/

COPY ./build/client /etc/nginx/sites-available/site1
RUN ["/bin/bash", "-c", "service nginx restart"]
