
CREATE TABLE IF NOT EXISTS transfers_new (
  id int(11) NOT NULL auto_increment,
  id_client int(11) NOT NULL,
  client_reference varchar(256),
  id_isin int(11) NOT NULL,
  fund_name varchar(256) character set latin1 NOT NULL,
  isin_reference varchar(256),
  currency	int,
  amount int(11) NOT NULL,
  custody_ac int,
  trade_date date NOT NULL,
  settlement_date date NOT NULL,
  seller		varchar(256),
  bic_seller	varchar(256),
  custodian		varchar(256),
  bic_custodian	varchar(256),
  seller_ac_cust	varchar(256),
  transfer_agent varchar(256) character set latin1 NOT NULL,
  bic_ta		varchar(256),
  cust_ac_ta	varchar(256),
  comment varchar(10000) character set latin1 NOT NULL,
  created_at datetime NOT NULL,
  types enum('purchase','sell') character set latin1 NOT NULL,
  status enum('pending','completed','cancelled') character set latin1 NOT NULL,
  transaction_type enum('receive','deliver'),
  settled_by	int,
  settled_date	datetime,
  PRIMARY KEY  (id),
  CONSTRAINT FK_Client FOREIGN KEY FK_Client (id_client) REFERENCES user(id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT FK_Currency FOREIGN KEY FK_Currency (currency) REFERENCES currency(id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT FK_ISIN FOREIGN KEY FK_ISIN (id_isin) REFERENCES isin(id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT FK_CustodyAC FOREIGN KEY FK_CustodyAC (custody_ac) REFERENCES custody_ac(id) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 AUTO_INCREMENT=3 ;

alter table transfers_new modify column status enum('pending','completed','cancelled','settled');
alter table transfers_new modify column types enum('incoming','outgoing');

/*User table modifications*/

alter table user add column role enum('admin','user');
alter table user add column active enum('0','1');


CREATE TABLE IF NOT EXISTS trading (
  id int(11) NOT NULL,
  id_client int(11) NOT NULL,
  client_reference varchar(256),
  id_isin int(11) NOT NULL,
  fund_name varchar(256) character set latin1 NOT NULL,
  isin_reference varchar(256),
  currency	int,
  amount int(11) NOT NULL,
  custody_ac int,
  remarks_vfs varchar(256),
  trade_remarks varchar(256),
  created_at datetime NOT NULL,
  types enum('purchase','sell') character set latin1 NOT NULL,
  status enum('pending','completed','cancelled') character set latin1 NOT NULL,
  settled_by	int,
  settled_date	datetime,
  PRIMARY KEY  (id),
  CONSTRAINT FK_Client FOREIGN KEY FK_Client (id_client) REFERENCES user(id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT FK_Currency FOREIGN KEY FK_Currency (currency) REFERENCES currency(id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT FK_ISIN FOREIGN KEY FK_ISIN (id_isin) REFERENCES isin(id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT FK_CustodyAC FOREIGN KEY FK_CustodyAC (custody_ac) REFERENCES custody_ac(id) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 ;

alter table trading modify column status enum('pending','completed','cancelled','settled');