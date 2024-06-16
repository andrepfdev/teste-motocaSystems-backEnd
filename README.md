<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Teste Motoca BackEnd
## API Laravel 10

Este README detalha a aplicação back-end desenvolvida para o desafio de contratação da Motoca Systems, na vaga de Desenvolvedor Back-End. A aplicação segue as especificações fornecidas, utilizando Laravel e PostgreSQL para implementar uma **API CRUD** para as entidades "Produtos" e "Categorias".

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

Para este projeto usou-se **Docker Sail**

1.  Clone este repositório: `git clone https://github.com/andrepfdev/teste-motocaSystems-backEnd`;
2.  Entre no diretório do projeto localmente: `cd teste-motocaSystems-backEnd`;
3.  Instale as dependências do projeto: `composer install`;
4.  Incie o ambiente Docker com o comando: `./vendor/bin/sail up -d`;
5.  Execute as migrations do banco de dados: `./vendor/bin/sail artisan migrate`;
6.  Popule o banco de dados com os dados iniciais: `./vendor/bin/sail artisan db:seed`.

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

![pgadmin4](https://github.com/andrepfdev/teste-motocaSystems-backEnd/assets/49399742/f74ba3dc-fb2d-4a76-bcb8-e7c77a2606bc)

#### Banco de dados:
    DB_HOST=pgsql
    DB_PORT=5432
    DB_DATABASE=laravel
    DB_USERNAME=sail
    DB_PASSWORD=password

### Endpoints
    
```
http://localhost/api/produtos

http://localhost/api/categorias
```

## Postman Teste

![postman doc](https://github.com/andrepfdev/teste-motocaSystems-backEnd/assets/49399742/7d46c864-acb8-4c62-92e2-c4248f18b9ef)

Link para o arquivo de testes: <a href="https://drive.google.com/file/d/1kvp6Ztr2UTurF2-JYouufn83pWGMgyax/view?usp=sharing" target="_blank"> Download </a>

## Observações sobre o projeto:

### Models
Foram definidos os models:
```
 - Category
 - Product
```
Onde em Category existe a função `products` que possibilita a relação um para muitos (`hasMany`). E em Product, há a função `category`, estabelecendo a relação `belongsTo`, possibilitando a relação entre o produto e a categoria.

### Migrations
As migrations para Categorias e Produtos foram definidas usando apenas o essencial proposto no desafio, organizado e claro para que se possa fazer alterações sem perda de produtividade.

 - create_categories_table
 - create_products_table

### Seeders
Para popular o banco de dados corretamente e possibilitar usar e entender melhor como este projeto funciona, seeders foram criados:

 - CategorySeeder
 - ProductSeeder

### Controllers
Há dois controllers, sendo eles:

 - CategoryController
 - ProductController

Na branch **master** as regras estão definidas no controller, enquanto que na branch **dev** as regras estão em Services.

### Routes
Seguindo a documentação Laravel 10, optou-se por definir as rotas da seguinte maneira:

 Route::apiResource('/produtos',ProductController::class);
 Route::apiResource('/categorias', CategoryController::class);

Desta forma, além do código fica mais simples e produtivo, apiResource se encarrega de devolver o status code correto para cada requisição solicitada.

### Requests
Para facilicar o processo de validação dos dados, usou-se requests, sendo eles:

 - StoreCategoryRequest
 - StoreProductRequest

### API Resources
Como sugere a documentação do Laravel, usou-e API Resources para que os modelos do Eloquent trabalhe com as respostas JSON de forma mais acertiva.

 - CategoryResource
 - ProductResource

Fico feliz em ter participado deste processo seletivo. Meus números de contato são: (98) 98569-4325 e (99) 99193-2001

Tenho bastante vontade de aprender mais. Desejo trabalhar com uma equipe que me ajude a crescer na área. Aceito, inclusive, vaga de estágio.