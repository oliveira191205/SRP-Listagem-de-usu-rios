# — SRP: Listagem de usuários
SRP diz respeito a um sistema que lista os usuários cadastrados em um arquivo de texto.  
Desenvolvido por:
- *Larissa Vitória Custódio de Carvalho RA: 1995354*
- *Marcela Buzzo de Oliveira RA: 2014340*
## Funcionalidades do Sistema  
O sistema permite visualizar todos os usuários cadastrados, lendo os dados diretamente do arquivo “storage/users.txt”. A listagem exibe todos os usuários em uma tabela com colunas de Nome e E-mail, caso não haja usuários cadastrados, o sistema exibe a mensagem “Nenhum usuário cadastrado.”

## Casos de Teste 
- Teste 1 — Lista com usuários válidos: incluir manualmente algumas linhas no arquivo “storage/users.txt”, como:  
{"name": "João Silva", "email": "joao@example.com"}  
{"name": "Maria Souza", "email": "maria@example.com"}  
Ao acessar a página “users.php”, o sistema deve exibir uma tabela com os nomes e e-mails dos dois usuários.
- Teste 2 — Arquivo vazio: deixar o arquivo “users.txt” sem conteúdo e acessar a página “users.php”. O sistema deve exibir a mensagem “Nenhum usuário cadastrado.”
  
## Expectativa de Resultado
O sistema deve exibir corretamente todos os usuários válidos presentes no arquivo “storage/users.txt”. Quando não houver registros, a mensagem “Nenhum usuário cadastrado” deve aparecer. 

## Limitações
O sistema não possui funcionalidade de cadastro, edição ou exclusão de usuários nem  paginação, autenticação e nem filtragem. Servindo apenas para listagem de usuários e seu cadastro manual.

## Como rodar o projeto
```
1.Certifique-se de ter o XAMPP e o Apache instalados na máquina.
2-Baixe e extraia a pasta do projeto chamada “SRP-Listagem-de-usu-rios”.
3. Renomeie para SRP.
4.Coloque a pasta extraída dentro do diretório “C:\xampp\htdocs\”.
5.Abra o terminal dentro da pasta do projeto e execute os comandos “composer install” e “composer dump-autoload”.
6.Verifique se o arquivo “storage/products.txt” existe. Caso não exista, crie-o manualmente como um arquivo de texto vazio.
7.Inicie o Apache no painel do XAMPP.
8.No navegador, acesse "http://localhost/SRP/public" para cadastrar os usuários.
9.No navegador, acesse “http://localhost/SRP/public/users.php” para visualizar a listagem de usuários. 
```






