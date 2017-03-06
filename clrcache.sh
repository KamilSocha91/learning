#!/bin/bash

gulp sass && php bin/console assetic:dump  && php bin/console cache:clear && rm -rf var/cache/dev && rm -rf var/cache/prod
