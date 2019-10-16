# ProjetoLab3D

Instruçoes
verificar se a pasta /storage, dentro da pasta /public não existe
(ela será criada posteriormente)
se existir, apague

criar um banco chamado senailab no SGBD

--------------------------------------------------------------
comandos

php artisan migrate
(cria as tabelas do banco com os dados dos 3 projetos principais)

php artisan storage:link
(cria o link entre a pasta app/storage com a pasta public/storage)

php artisan serve
(inicia o servidor)
