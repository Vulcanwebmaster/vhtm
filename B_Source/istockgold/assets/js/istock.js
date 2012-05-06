/**
 * 
 */
//rateData will be loaded in everypage needed
Math.hold = function(x,n)
{
  var N = Math.pow(10,n);
  return Math.round(x * N)/N;
};


function changeBuy(buy, name) {
	buy_code = buy;
	buy_name = name;
	update(buy_code, sell_code, buy_name, sell_name);
}

function changeSell(sell, name) {
	sell_code = sell;
	sell_name = name;
	update(buy_code, sell_code, buy_name, sell_name);
}


