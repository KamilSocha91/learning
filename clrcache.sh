#!/bin/bash

php bin/console assetic:dump  && rm -rf bin/cache/dev && rm -rf bin/cache/prod
