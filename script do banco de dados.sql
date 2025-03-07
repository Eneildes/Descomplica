-- This script was generated by the ERD tool in pgAdmin 4.
-- Please log an issue at https://redmine.postgresql.org/projects/pgadmin4/issues/new if you find any bugs, including reproduction steps.
BEGIN;


CREATE TABLE IF NOT EXISTS public.usuario
(
    id_user serial,
    nome character varying(45) NOT NULL,
    senha character varying(20) NOT NULL,
    cpf character varying(11) NOT NULL,
    regime_trabalhista character varying(20) NOT NULL,
    telefone_1 character varying(11) NOT NULL,
    telefone_2 character varying(11),
    cidade character varying(25) NOT NULL,
    bairro character varying(25) NOT NULL,
    logradouro character varying(25) NOT NULL,
    numero_residencial integer NOT NULL,
    data_nascimento date NOT NULL,
    nivel_formacao character varying(25) NOT NULL,
    status character varying(15) NOT NULL,
    papel character varying(15) NOT NULL,
    PRIMARY KEY (id_user),
    UNIQUE (cpf)
);

CREATE TABLE IF NOT EXISTS public.orgao
(
    id_orgao serial,
    nome character varying NOT NULL,
    cidade character varying NOT NULL,
    bairro character varying NOT NULL,
    logradouro character varying NOT NULL,
    PRIMARY KEY (id_orgao)
);

CREATE TABLE IF NOT EXISTS public.alocacao
(
    id_alocacao serial,
    id_usuario_fk integer NOT NULL,
    id_orgao_fk integer NOT NULL,
    data_alocacao date NOT NULL,
    data_alocacao_fim date,
    funcao character varying(25) NOT NULL,
    PRIMARY KEY (id_alocacao,id_usuario_fk,id_orgao_fk)
);

ALTER TABLE IF EXISTS public.alocacao
    ADD FOREIGN KEY (id_usuario_fk)
    REFERENCES public.usuario (id_user) MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION
    NOT VALID;


ALTER TABLE IF EXISTS public.alocacao
    ADD FOREIGN KEY (id_orgao_fk)
    REFERENCES public.orgao (id_orgao) MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION
    NOT VALID;

END;