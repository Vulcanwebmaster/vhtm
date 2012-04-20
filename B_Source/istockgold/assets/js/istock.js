/**
 * 
 */
var b = -1;
var s = -1;
var eb_b = -1;
var eb_s = -1;

Math.hold = function(x,n)
{
  var N = Math.pow(10,n);
  return Math.round(x * N)/N;
}

function fromtochange(eb_id,eb_name,rate_buy,rate_sell)
{
  if (rate_buy != -1)
  {
    eb_b = eb_id;
    b = rate_buy;
    document.all('pay').innerHTML = eb_name;
  }
  
  if (rate_sell != -1)
  {
    eb_s = eb_id;
    s = rate_sell;
    document.all('get').innerHTML = eb_name;
  }
  
  if (eb_b == eb_s)
  {
    document.all('rate').innerHTML = 'N/A';
  }
  else if (b != -1 && s != -1)
  {
  	if (b == 1)
  	{
  	  var r = s;
  	  document.all('rate').innerHTML = r+':1';
  	}
  	else
  	{
  	  r = Math.hold(b/s,4);
      document.all('rate').innerHTML = '1:'+r;
    }
  }

  update_amount();
}