CREATE TABLE mdl_user_preinsc (
  id int(11) NOT NULL
  ,id_curso int(11) NOT NULL DEFAULT '0' COMMENT 'chave primaria dupla na validacao'
  , cpf varchar(20) NOT NULL DEFAULT '0' COMMENT 'chave primaria dupla na validacao'
  , nome varchar(1000) NOT NULL, email varchar(1000) NOT NULL
  , institution varchar(1000) NOT NULL
  , ambiente int(1) UNSIGNED ZEROFILL NOT NULL COMMENT 'valor padrao ''zero'' '
  , valid int(1) UNSIGNED ZEROFILL NOT NULL COMMENT 'valor padrao ''zero'' para user nao validado. update valor ''um'' para user validado'
  , time varchar(10) NOT NULL
) 
