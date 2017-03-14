learningApp
===========

A Symfony project created on February 21, 2017, 3:04 pm.
Personal leraning Application

PHP Symfony2, Angular,

JacaScripts structures
=================

app/Resources/public/js/
config.js
  require js libraries, runs bootstrap.js
bootsrap.js
  bootstrap angular components, runs app.js
app.js
  define angular components
routes.js
  define angular routing #to_do
/controller/
/directives/
/filters/
/services/
  module.js
    define angular, run angular module
  index.js 
    define files example. ctrl's
  files which runs files




bower install --save sass

gulp sass

composer require symfony/assetic-bundle

Tworzenie bazy
php app/console generate:doctrine:entity
php bin/console doctrine:database:create

Tworzenie Bundla
php bin/console generate:bundle --namespace=App/CreationBundle --bundle-name=AppCreationBundle
php bin/console doctrine:generate:entity --entity="AppCourseBundle:Question"

php bin/console generate:doctrine:form AppCourseBundle:Question

Updaty
php app/console doctrine:schema:update --force

php app/console assetic:dump --env=dev --no-debug

php app/console assetic:dump --env=prod --no-debug

php app/console assets:install --symlink web


mysqldump -u RemitUser -pmysqlRemitUser! RemitProduction > RemitProduction.sql

mysql -u RemitUser -pmysqlRemitUser! RemitProduction < RemitProduction.sql

php app/console server:run

Code sniffer
phpcs --standard=~/Dokumenty/Purinova/ruleset.xml app.company.form.js

Wczytanie bazy danych
php app/console doctrine:fixtures:load

tworzenie brancha
git checkout -b nazwa_branchu

Przełączenie
git checkout nazwa_branchu

git branch 

git add "plik do dodania"

git commit -m "komentarz"

git push -u origin nazwa_branchu

git fetch
git pull
choose_adres#16
