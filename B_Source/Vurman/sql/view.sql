create view isin_currency_view
as
select isin.id,isin.code,isin.name,isin.id_currency,isin.limit1,isin.limit2,isin.limit3,isin.name_fund,isin.nav,isin.date_nav,
isin.unique_id,currency.name currency_name,currency.abbreviation
from isin 
left outer join currency on  isin.id_currency= currency.id