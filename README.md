## Parcela Já Challenge

The specifications for this challenge are present in the file. <a href="/EXERCICIO - BACKEND ROLE.pdf" >EXERCICIO - BACKEND ROLE.pdf </a>

### First part

#### Prerequisites
- PHP >=7.3 

#### How execute it

To run the first part of this challenge, call the command in the terminal

```shell
php -q PHPPOOChallenge/index.php
```

### Second part (Symfony Shape Project)

#### Prerequisites

- Docker
- Docker Compose

#### How execute it

- First configure your `.env` and configure the container ports inside the `docker-compose.yml` file
- If you use Windows, add in your `C:\Windows\System32\drivers\etc\hosts` the following content `127.0.0.1    parcelaja.local`
- If you use UNIX (Linux/MAC), add in your `/etc/hosts` the following content `127.0.0.1    parcelaja.local`

The, run:

```shell
cd SymfonyShapeChallenge
docker-compose build
docker-compose up -d
docker exec -it symfony_parcelaja bash -c 'composer install'
docker exec -it symfony_parcelaja bash -c 'php bin/console doctrine:migrations:migrate'
docker exec -it symfony_parcelaja bash -c 'php bin/console app:seed-shape'
docker exec -it symfony_parcelaja bash -c 'php ./vendor/bin/phpunit'
```

To access in the browser, open the `http://parcelaja.local/shape/list`

*Note.:* If this doesn't work, review the .env content and port definitions in docker-composer.yml
