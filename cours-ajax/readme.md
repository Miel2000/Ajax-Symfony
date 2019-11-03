
# Installation

```

# clone !
git clone https://github.com/liorchamla/cours-ajax.git

# installe les dépendances 
composer install

#  créé la base de données
php bin/console doctrine:database:create

#  exécute les migrations
php bin/console doctrine:migrations:migrate

#  exécute la fixture
php bin/console doctrine:fixtures:load --no-interaction

#  lance le serveur
php bin/console server:run

```
