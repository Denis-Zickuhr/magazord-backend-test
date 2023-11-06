# Para iniciar basta 

Ter docker instalado (versão não especificada - utilizei a 24.0.5^)
Ter php instalado (versão não especificada - utilizei a 8^)

Nisso:

#root/ docker compose up -d

Para migrar e criar o banco, acesse: config\EntityManager.php
Altere onde há comentário ('db'  -> 'localhost')

Migre atraves dê: 

#root/ php vendor/bin/doctrine --force orm:schema-tool:update

Altere onde há comentário ('localhost' -> 'db')

acesse localhost:8000/home ou localhost:8000

** Não corrigi um bug sobre o uso do EntityManager, logo o sistema vai ficar bem lento até eu corrigir **
** Essa mensagem está sujeita a ser apagada **