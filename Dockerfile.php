ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli

FROM amazeeio/php:7.3-fpm

# Moodle requires us to install some additional php extensions
RUN apk add --no-cache php7-intl \
    php7-xmlrpc icu icu-dev icu-libs  && docker-php-ext-install -j4 intl xmlrpc

ENV APP_ENV=${LAGOON_ENVIRONMENT_TYPE}
COPY --from=cli /app /app
