# Base Symfony

Ce projet est une base pour des projets Symfony.
Il peut permettre de développer un projet Symfony avec les focntionnalités de login, register déjà paramétrées pour gagner du temps
Environnement Docker intégré avec base de donnée MySQL, PhpMyAdmin et Webmail
Fichier pour CI avec Gitlab inclus qui teste les dernières failles de sécutité PHP + tests des standards de codage + lance les tests unitaires

## Fonctions intégrées

* Un controller home avec un template vide à compléter
* Une page login à l'adresse /login
* Une page register à l'adresse /register
* Hachage du mot de passe en place
* Visibilité sur le champ mot de passe du formulaire de login
* Activation de la fonction 'Se souvenir de moi'
* Possibilité de récupération du mot de passe avec fonction 'Mot de passe oublié ?'
* Validation de l'enregistrement avec envoi d'un mail de confirmation
* Renvoi d'un email si enregistrement non validé
* Enregistrement de la date et de l'heure du dernier login pour chaque utilisateur
* Fonction de réinitialisation du mot de passe

## Composants intégrés

* symfony/webpack-encore-bundle
* Bootstrap 5
* Symfony UX React
* symfonycasts/reset-password-bundle
* symfonycasts/verify-email-bundle
* User Entity
* User Unit Test

## Environnement de développement

### Pré-requis

* PHP 7.4
* Composer
* Symfony CLI
* Docker
* Docker-compose
* nodejs et npm

Vous pouvez vérifier les pré-requis (sauf Docker et Docker-compose) avec la commande suivante (de la CLI Symfony) :

```bash
symfony check:requirements
```

### Lancer l'environnement de développement

```bash
composer install
npm install
npm run build
docker-compose up -d
symfony serve -d
```

### Lancer des tests

```bash
php bin/phpunit --testdox
```