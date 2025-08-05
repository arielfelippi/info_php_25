abrir vscode
ver se ta logado ubuntu (canto inferior esquerdo)
file open folder: seleciona tudo e apaga
 - /var/www/html e da um ok
 terminal novo terminal 
 - git clone LINK_GITHUB da um enter
 file open folder: seleciona tudo e apaga
 - /var/www/html/info_php_25 e da um ok
 terminal novo terminal 
  verifica se esta em: /var/www/html/info_php_25

# Configurar MariaDB:

```
    SHOW DATABASES;

    CREATE DATABASE IF NOT EXISTS curso_php_25;

    USE curso_php_25;

    CREATE USER 'aluno'@localhost IDENTIFIED BY '1234';

    GRANT ALL PRIVILEGES ON *.* TO 'aluno'@localhost IDENTIFIED BY '1234';

    FLUSH PRIVILEGES;

    SELECT User FROM mysql.user;
```

https://phoenixnap.com/kb/how-to-create-mariadb-user-grant-privileges#:~:text=To%20create%20a%20new%20MariaDB,to%20a%20local%20MySQL%20server.
