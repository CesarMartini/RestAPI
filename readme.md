# REST API
![GitHub repo size](https://img.shields.io/github/repo-size/CesarMartini/RestAPI?style=for-the-badge)
![GitHub language count](https://img.shields.io/github/languages/count/CesarMartini/RestAPI?style=for-the-badge)
![GitHub forks](https://img.shields.io/github/forks/CesarMartini/RestAPI?style=for-the-badge)

Uma API desenvolvida em Laravel, de acordo com o desafio disponível em `(https://github.com/molacorban/interviews/blob/main/php-challenge/REAME.md)`

### To-do

Desenvolvimento de Funcionalidades
- [ ] End-point de autenticação
- [ ] End-point de submissão de arquivo
- [x] End-point de consulta aos dados resultantes do processo

Requisitos Não Funcionais
- [ ] Cobertura de Testes
- [x] Usar PHP 7.4
- [x] Utilize um ambiente orquestrado com Docker para PHP e Postgres
- [x] Coloque isso em um repositório GIT


## Dependências de Uso
```
    - GIT
    - DOCKER
    - COMPOSER
```


## Passo a Passo para Configuração
##### .env
Copie o conteúdo do arquivo `.env.example` para `.env` file. 
Edite as configurações de banco de dados para ficarem de acordo com seu ambiente se necessário.

##### Composer Install
Por meio de linha de comando, acesse o diretório do projeto e execute o comando de instalação dos pacotes do Composer.
###### `composer install`

##### Gerar as Chaves de Ambiente
Logo após execute o comando para atualização das chaves no arquivo `.env`
###### `php artisan key:generate`
##### Executar a Migration 
A seguir execute o comando abaixo para criar as tabelas no banco
###### `php artisan migrate`
##### Instalação do Passport
Rode o próximo comando para instalar o Passport (método de autenticação das nossas APIs)
###### `php artisan passport:install`
##### Criar Sistema de Auth
Rode este comando para carregar a autenticação básica 
###### `php artisan make:auth`
##### Carga do Banco de Dados
Executar o comando final para fazer uma alimentação prévia do banco de dados, que servirá para os testes da aplicação
###### `php artisan db:seed`

## Passo a Passo para Execução

> Projeto desenvolvido utilizando Laradock ( Mais informações em https://laradock.io/ )

1. No diretório base a ser utilizado para esta aplicação, crie uma pasta com o nome `restapi` e clone o código fonte disponível deste repositório `git clone https://github.com/Laradock/laradock.git`

2. Neste mesmo diretório base, realize a clonagem do repositório do Laradock `git clone https://github.com/Laradock/laradock.git`

3. Sua estrutura de pastas deveria aparecer assim:
```
    * laradock
    * restapi
```

4. Acesse a pasta do Laradock e renomeie o arquivo `.env.example` para `.env`

5. Edite o arquivo `.env` com seu editor de texto e altere o valor das variáveis:
```
    * `PHP_VERSION=` para `7.4`
    * `APP_CODE_PATH_HOST=` para `../laravel-rest-api/`
    * `COMPOSE_PROJECT_NAME=` para `laravel-rest-api`
```

6. Execute o seguinte comando para iniciar o ambiente no container `docker-compose up -d nginx postgres`


## EndPoints da API 
##### Users
* User GET `http://localhost:8000/api/v1/user`
##### Dados
* Dados POST `http://localhost:8000/api/v1/dados` insere os registros na base
* Dados GET `http://localhost:8000/api/v1/dados` retorna todos os registros
* Dados GET `http://localhost:8000/api/v1/dados/1` retorna apenas o registro com ID informado
* Dados PUT `http://localhost:8000/api/v1/dados/1` atualiza o registro com ID informado
* Dados DELETE `http://localhost:8000/api/v1/dados/1` remove o registro com ID informado