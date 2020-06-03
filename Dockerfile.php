ARG CLI_IMAGE
FROM ${CLI_IMAGE} as cli

FROM amazeeio/php:7.3-fpm

ENV APP_ENV=${LAGOON_ENVIRONMENT_TYPE}
COPY --from=cli /app /app
