# Guia de Início Rápido

## Requisitos

- Docker instalado (v24.0.5 ou superior)
- PHP instalado (v8.2.12 ou superior)
- Composer instalado (v2.6.5 ou superior)

## Instalação

1. Clonar este repositório:

    ```bash
    git clone https://github.com/Denis-Zickuhr/magazord-backend-test.git
    ```

2. Após a clonagem, execute:

    ```bash
    composer install
    ```

## Executando o Sistema

1. Inicie o ambiente Docker:

    ```bash
    # No diretório raiz
    docker compose up -d
    ```

2. Migrando e Criando o Banco de Dados

   - Acesse o arquivo de configuração `config/EntityManager.php` e faça a seguinte alteração onde há um comentário ('db' -> 'localhost').

   - Em seguida, migre o banco de dados executando:

     ```bash
     php vendor/bin/doctrine --force orm:schema-tool:update
     ```

   - Mais uma vez, altere onde há um comentário ('localhost' -> 'db').

## Acessando o Sistema

- Agora você pode acessar o sistema pelo seu navegador em:

  - [localhost:8000/home](http://localhost:8000/home)

## Observações

- Não corrigi um bug relacionado ao uso do EntityManager; portanto, o sistema pode estar mais lento até a correção.
- Esta mensagem está sujeita a ser apagada.