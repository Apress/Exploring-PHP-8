FROM php:8.4-cli

RUN pear update-channels \
    && pear install PHP_CodeSniffer

ENTRYPOINT ["phpcs"]
CMD ["--version"]
