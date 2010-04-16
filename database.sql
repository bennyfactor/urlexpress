

CREATE TABLE  `lil_urls` (
  `id` varchar(255) character set utf8 collate utf8_bin NOT NULL default '',
  `url` text,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `user` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;