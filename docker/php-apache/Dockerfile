ARG DOCKER_IMAGE
#FROM php:7.0-apache
FROM $DOCKER_IMAGE
#RUN docker-php-ext-install -j4 mysqli
RUN if [ "$DOCKER_IMAGE" = "php:7.0-apache" ]; then  docker-php-ext-install -j4 mysqli; fi