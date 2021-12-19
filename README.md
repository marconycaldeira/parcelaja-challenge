## Parcela Já CHallenge


### First part

```shell
`php -q PHPPOOChallenge/index.php`
```

### Second part (Symfony Shape Project)

```shell
cd SymfonyShapeChallenge
cp .env.example .env
docker-compose up -d
docker exec -it symfony_parcelaja bash -c 'php bin/console doctrine:migrations:migrate'
```