#!/bin/bash

php bin/console cache:clear && rm -rf var/cache/dev && rm -rf var/cache/prod && gulp sass && gulp js
