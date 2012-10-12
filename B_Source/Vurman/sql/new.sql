alter table subscription_fee add column performance_fee double;

CREATE TABLE IF NOT EXISTS fund_portfolio (
  id int(11) NOT NULL,
  id_client int(11) NOT NULL,
  id_isin int(11) NOT NULL,
  fund_name varchar(256) character set latin1 NOT NULL,
  currency	int,
  custody_ac int,
  credit		int,
  credit_date	datetime,
  credit_ref	varchar(256),
  debit		int,
  debit_date	datetime,
  debit_ref	varchar(256),
  created_by	int,
  created_date	datetime,
  PRIMARY KEY  (id),
  CONSTRAINT FK_Client FOREIGN KEY FK_Client (id_client) REFERENCES user(id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT FK_Currency FOREIGN KEY FK_Currency (currency) REFERENCES currency(id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT FK_ISIN FOREIGN KEY FK_ISIN (id_isin) REFERENCES isin(id) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT FK_CustodyAC FOREIGN KEY FK_CustodyAC (custody_ac) REFERENCES custody_ac(id) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=MyISAM  DEFAULT CHARSET=cp1251 ;

alter table fund_portfolio modify column id_isin varchar(256);

alter table trading add column trade_date date;
alter table trading add column settlement_date date;