# AeroSul - Revenda Aeronaves
>Configurar o .env
ENVIO DE E-AMIL
MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=laravelprova@gmail.com
MAIL_PASSWORD=123456789mmr
MAIL_ENCRYPTION=tls



Criar um banco de dados seguindo estes padrões:

> nome do banco de dados: "revendaaeronaves"
>
>  Collation: utf8mb4_general_ci


Rodar o comando migrate para executar a criação das tabelas.

>```php artisan migrate```

Rodar o comando storage:link para gerar uma pasta de armazenamento pública, a qual irá armazenar as imagens dos produtos cadastrados.
>```php artisan storage:link```

Criar a pasta "fotos" dentro do diretório:
>```public/storage```

Copiar as imagens para dentro da pasta criada.
(você pode baixaxr as imagens através do link a baixo)
>www.encurtador.com.br/bpzT0


Gerar base de dados para testes:
>```php artisan db:seed```

A criação da base de testes já inclui um cadastro de usuário administrador a fim de facilitar o acesso, as credenciais são:
>email: teste@teste.com
>
>senha: 123456789

Bibliotecas utilizadas:
DOM PDF
AdminLTE
