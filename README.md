# Orenji_Moodle
Plugin for Wordpress using Moodle Data

Este Plugin irá realizar consultas ao BD do Moodle, e trazer informações para o Wordpress.

Informações importantes:

Existe uma tabela que foi introduzida ao bd do moodle com informações dos cursistas para que realizem uma validação em nosso site, e utilizamos esta informação para gerar os relatórios (mariadb):

CREATE TABLE `mdl_user_preinsc` (
  `id` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL DEFAULT '0' COMMENT 'chave primaria dupla na validacao',
  `cpf` varchar(20) NOT NULL DEFAULT '0' COMMENT 'chave primaria dupla na validacao',
  `nome` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `institution` varchar(1000) NOT NULL,
  `ambiente` int(1) UNSIGNED ZEROFILL NOT NULL COMMENT 'valor padrao ''zero'' ',
  `valid` int(1) UNSIGNED ZEROFILL NOT NULL COMMENT 'valor padrao ''zero'' para user nao validado. update valor ''um'' para user validado',
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

Esta tabela é alimentada por importação de dados de planilhas de excel e cadastramos, usando ela, cursistas no sistema do Moodle.

`id`.`mdl_enrol` está diretamente ligado ao `id_curso`.`mdl_user_preinsc` onde enrol = "manual".
