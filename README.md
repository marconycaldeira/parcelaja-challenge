## Parcela Já Challenge

The especifications of this challenge is present in file <a href="/EXERCICIO - BACKEND ROLE.pdf" >EXERCICIO - BACKEND ROLE.pdf </a>

### First part

#### Pre-requisites
- PHP >=7.3 

#### How execute

To execute first part of this challenge, call command in terminal

```shell
php -q PHPPOOChallenge/index.php
```

### Second part (Symfony Shape Project)

#### Pre-requisites

- Docker
- Docker Compose

#### How execute

- First configure your `.env` and configure ports of `docker-compose.yml`
- If you use Windows, then add in your `C:\Windows\System32\drivers\etc\hosts` the follow content `127.0.0.1    parcelaja.local`
- If you use UNIX (Linux/MAC), then add in your `/etc/hosts` the follow content `127.0.0.1    parcelaja.local`

After, execute:

```shell
cd SymfonyShapeChallenge
docker-compose up -d
docker exec -it symfony_parcelaja bash -c 'php bin/console doctrine:migrations:migrate'
docker exec -it symfony_parcelaja bash -c 'php bin/console app:seed-shape'
docker exec -it symfony_parcelaja bash -c 'php ./vendor/bin/phpunit'
```

To access in browser, open the `http://parcelaja.local/shapes/list`