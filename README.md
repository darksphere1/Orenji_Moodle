# Orenji_Moodle
Plugin para Wordpress utilizando dados do Moodle

Este Plugin irá realizar consultas ao BD do Moodle, e trazer informações para o Wordpress.

Informações importantes:

Existe uma tabela que foi introduzida ao bd do moodle com informações dos cursistas para que realizem uma validação em nosso site, e utilizamos esta informação para gerar os relatórios (mariadb):

[Arquivo para referência](SQL/preinsc.sql)

Esta tabela é alimentada por importação de dados de planilhas de excel e cadastramos, usando ela, cursistas no sistema do Moodle.

`id`.`mdl_enrol` está diretamente ligado ao `id_curso`.`mdl_user_preinsc` onde `enrol`.`mdl_enrol` = "manual".
