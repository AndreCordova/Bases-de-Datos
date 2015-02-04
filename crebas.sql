/*==============================================================*/
/* DBMS name:      MYSQL50                                      */
/* Created on:     02/02/2015 10:10:08                          */
/*==============================================================*/


drop table if exists CUIDADES;

drop table if exists EXISTEN;

drop table if exists FIESTAS_POPULARES;

drop table if exists GASTRONOMIA;

drop table if exists GRUPOS_ETNICOS;

drop table if exists HABLAN;

drop table if exists LENGUAS;

drop table if exists PAISES;

drop table if exists PROVINCIAS;

drop table if exists SE_PREPARAN;

drop table if exists TIENEN;

drop table if exists TRADICIONES;

/*==============================================================*/
/* Table: CUIDADES                                              */
/*==============================================================*/
create table CUIDADES
(
   COD_CIUD             varchar(5) not null,
   COD_PROV             varchar(5),
   CUIDAD               varchar(15) not null,
   UBICACION            varchar(100) not null,
   primary key (COD_CIUD)
);

/*==============================================================*/
/* Table: EXISTEN                                               */
/*==============================================================*/
create table EXISTEN
(
   COD_PAIS             varchar(5) not null,
   COD_GRUP             varchar(5) not null,
   primary key (COD_PAIS, COD_GRUP)
);

/*==============================================================*/
/* Table: FIESTAS_POPULARES                                     */
/*==============================================================*/
create table FIESTAS_POPULARES
(
   COD_FIESTA           varchar(5) not null,
   COD_CIUD             varchar(5),
   NOM_FIESTA           varchar(30) not null,
   FECHA_CELEB          date,
   DESCRIP_FIEST        text,
   FIESTA               varchar(100),
   primary key (COD_FIESTA)
);

/*==============================================================*/
/* Table: GASTRONOMIA                                           */
/*==============================================================*/
create table GASTRONOMIA
(
   COD_GASTR            varchar(5) not null,
   NOM_PLATO            varchar(30) not null,
   INGREDIENTES         text not null,
   DESCRIPCION          text,
   IMG_PLATO            varchar(100),
   primary key (COD_GASTR)
);

/*==============================================================*/
/* Table: GRUPOS_ETNICOS                                        */
/*==============================================================*/
create table GRUPOS_ETNICOS
(
   COD_GRUP             varchar(5) not null,
   ETNIA                varchar(25) not null,
   NUM_HABITANTES       numeric(15,0),
   IMAGEN               varchar(100),
   primary key (COD_GRUP)
);

/*==============================================================*/
/* Table: HABLAN                                                */
/*==============================================================*/
create table HABLAN
(
   COD_GRUP             varchar(5) not null,
   COD_LENG             varchar(5) not null,
   primary key (COD_GRUP, COD_LENG)
);

/*==============================================================*/
/* Table: LENGUAS                                               */
/*==============================================================*/
create table LENGUAS
(
   COD_LENG             varchar(5) not null,
   NOM_LENG             varchar(15) not null,
   N_HABLANTES          varchar(15),
   primary key (COD_LENG)
);

/*==============================================================*/
/* Table: PAISES                                                */
/*==============================================================*/
create table PAISES
(
   COD_PAIS             varchar(5) not null,
   PAIS                 varchar(15) not null,
   CAPITAL              varchar(10) not null,
   IDIOMA               varchar(10) not null,
   MONEDA               varchar(10) not null,
   primary key (COD_PAIS)
);

/*==============================================================*/
/* Table: PROVINCIAS                                            */
/*==============================================================*/
create table PROVINCIAS
(
   COD_PROV             varchar(5) not null,
   COD_PAIS             varchar(5),
   PROVINCIA            varchar(25) not null,
   CUID_CAP             varchar(25) not null,
   SUPERFICIE           decimal(15,2),
   primary key (COD_PROV)
);

/*==============================================================*/
/* Table: SE_PREPARAN                                           */
/*==============================================================*/
create table SE_PREPARAN
(
   COD_PROV             varchar(5) not null,
   COD_GASTR            varchar(5) not null,
   primary key (COD_PROV, COD_GASTR)
);

/*==============================================================*/
/* Table: TIENEN                                                */
/*==============================================================*/
create table TIENEN
(
   COD_PROV             varchar(5) not null,
   COD_TRAD             varchar(5) not null,
   primary key (COD_PROV, COD_TRAD)
);

/*==============================================================*/
/* Table: TRADICIONES                                           */
/*==============================================================*/
create table TRADICIONES
(
   COD_TRAD             varchar(5) not null,
   COD_CIUD             varchar(5),
   NOM_TRAD             varchar(35) not null,
   SIMBOLO              varchar(25) not null,
   FECHA                date,
   DESC_TRAD            text,
   TRADICION            varchar(100),
   primary key (COD_TRAD)
);

alter table CUIDADES add constraint FK_RELATIONSHIP_2 foreign key (COD_PROV)
      references PROVINCIAS (COD_PROV) on delete restrict on update restrict;

alter table EXISTEN add constraint FK_EXISTEN foreign key (COD_PAIS)
      references PAISES (COD_PAIS) on delete restrict on update restrict;

alter table EXISTEN add constraint FK_EXISTEN2 foreign key (COD_GRUP)
      references GRUPOS_ETNICOS (COD_GRUP) on delete restrict on update restrict;

alter table FIESTAS_POPULARES add constraint FK_CELEBRAN foreign key (COD_CIUD)
      references CUIDADES (COD_CIUD) on delete restrict on update restrict;

alter table HABLAN add constraint FK_HABLAN foreign key (COD_GRUP)
      references GRUPOS_ETNICOS (COD_GRUP) on delete restrict on update restrict;

alter table HABLAN add constraint FK_HABLAN2 foreign key (COD_LENG)
      references LENGUAS (COD_LENG) on delete restrict on update restrict;

alter table PROVINCIAS add constraint FK_TIENE foreign key (COD_PAIS)
      references PAISES (COD_PAIS) on delete restrict on update restrict;

alter table SE_PREPARAN add constraint FK_SE_PREPARAN foreign key (COD_PROV)
      references PROVINCIAS (COD_PROV) on delete restrict on update restrict;

alter table SE_PREPARAN add constraint FK_SE_PREPARAN2 foreign key (COD_GASTR)
      references GASTRONOMIA (COD_GASTR) on delete restrict on update restrict;

alter table TIENEN add constraint FK_TIENEN foreign key (COD_PROV)
      references PROVINCIAS (COD_PROV) on delete restrict on update restrict;

alter table TIENEN add constraint FK_TIENEN2 foreign key (COD_TRAD)
      references TRADICIONES (COD_TRAD) on delete restrict on update restrict;

alter table TRADICIONES add constraint FK_HAY foreign key (COD_CIUD)
      references CUIDADES (COD_CIUD) on delete restrict on update restrict;

