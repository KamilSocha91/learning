#!/bin/bash

gulp sass && php bin/console cache:clear && rm -rf var/cache/dev && rm -rf var/cache/prod && php bin/console assetic:dump
