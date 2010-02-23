

CREATE TABLE lil_urls (
  id varchar(255) NOT NULL default '',
  url text,
  date timestamp(14) NOT NULL,
  PRIMARY KEY  (id)
) TYPE=MyISAM;