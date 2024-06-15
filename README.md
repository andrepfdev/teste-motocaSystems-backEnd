<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Teste Motoca BackEnd
## API Laravel 10

Este README detalha a aplicação back-end desenvolvida para o desafio de contratação da Motoca Systems, na vaga de Desenvolvedor Back-End. A aplicação segue as especificações fornecidas, utilizando Laravel e PostgreSQL para implementar uma API CRUD para as entidades "Produtos" e "Categorias".

### Funcionalidades

#### Entidades:
- Produtos
- Categorias

#### Operações CRUD:    
##### Produtos:
- Criar
- Ler (todos os produtos e por ID)
- Atualizar
- Deletar
   
##### Categorias:
- Criar
- Ler (todas as categorias e por ID)
- Atualizar
- Deletar

#### Relacionamento:

Cada produto pertence a uma categoria (chave estrangeira **categoria_id** na tabela produtos).
Cada categoria pode ter vários produtos.    

## Instalação

Para este projeto usou-se Docker Sail

1.  Clone este repositório: `git clone https://github.com/andrepfdev/teste-motocaSystems-backEnd`;
2.  Entre no diretório do projeto localmente: `cd teste-motocaSystems-backEnd`;
3.  Incie o ambiente Docker com o comando: `./vendor/bin/sail up`;
4.  Execute as migrations do banco de dados: `./vendor/bin/sail artisan migrate`;
5.  Popule o banco de dados com os dados iniciais: `./vendor/bin/sail artisan db:seed`.

Observe os dados configurados nos arquivos `docker-compose.yml` e `.env` que possui, além do PostgreSQL, o gerenciador `pgAdmin4`.

|  nº  | Images     |
|-----:|------------|
|     1| Laravel 10 |
|     2| PostgreSQL |
|     3| pgAdmin 4  |

#### pgAdmin4
    -> URL: http://localhost:5050
    -> User: admin@admin.com
    -> Passord: admin

<p align="center"><img src="https://photos.fife.usercontent.google.com/pw/AP1GczNP2VpW9O4NjU-CRzAltcPFL7-XMgOKPBuLmssz_Weuhyy-3x9xSDca=w1710-h962-s-no?authuser=0" width="800" alt="pgAdmin 4"></p>

#### Banco de dados:
    DB_HOST=pgsql
    DB_PORT=5432
    DB_DATABASE=laravel
    DB_USERNAME=sail
    DB_PASSWORD=password

### Endpoints
    
`http://localhost/api/produtos`

`http://localhost/api/categorias`

## Decisões importantes:
-[x]  

