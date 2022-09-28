<p align="center"><img src="./public/Logo.svg" width="400" alt="Laravel Logo"></p>

## Sobre o projeto

Backend do projeto teste da [JOTACOM](https://www.jotacom.com/).

## Instalação

Para rodar o backend clone o repositório em um diretório de sua preferência.

```bash
git clone https://github.com/khalegjr/foodish.git

cd foodish
```

Renomeie ou copie o arquivo <code>.env.example</code> para <code>.env</code>. Altere as varáveis de ambiente no arquivo .env conforme a necessidade.

As seguintes variáveis devem ser setadas:
<strong>APP_DEBUG</strong>: caso necessite de mensagens de debug.
<strong>APP_PORT</strong>: especifica a porta do container app do docker.
<strong>DB_CONNECTION</strong>: especifica qual tipo de banco, suportado pelo Laravel, pretende conectar.
<strong>DB_HOST</strong>: especifica a máquina do banco.
<strong>DB_PORT</strong>: porta do banco de dados.
<strong>DB_DATABASE</strong>: nome do seu banco de dados (caso não for usar o ambiente docker incluso será necessário criar o banco de dados antes).
<strong>DB_USERNAME</strong>: usuário do banco de dados.
<strong>DB_PASSWORD</strong>: senha do usuário do banco de dados.
<strong>WWWUSER</strong>: caso for usar o ambiente docker incluso, para evitar erros de permissões.
<strong>WWWGROUP</strong>: caso for usar o ambiente docker incluso, para evitar erros de permissões.

### Executando com Docker

Se pretende utilizar em ambiente docker, após atualizar as variáveis de ambiente, execute o seguinte comando para executar em mode daemon:

```bash
docker compose up -d
```

### Preparando o ambiente

Daqui em diante mostrarei os comandos como serão em uma máquina com PHP e Composer instalados e, em seguida, a versão a partir do ambiente docker, que não muda quase nada na verdade :wink:.

Instale as dependências

```bash
composer install
```

```bash
./vendor/bin/sail composer install
```

```bash
php artisan key:generate
```

```bash
./vendor/bin/sail artisan key:generate
```

Crie a APP Key:

```bash
php artisan key:generate
```

```bash
./vendor/bin/sail artisan key:generate
```

Rode as migrations:

```bash
php artisan migrate
```

```bash
./vendor/bin/sail artisan migrate
```

Suba o servidor:

```bash
php artisan serve
```

Se estiver no docker ele já estará rodando conforme a configuração do arquivo <code>.env</code>.

## Contributing with Laravel

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
