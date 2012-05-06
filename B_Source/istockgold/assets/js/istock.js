/**
 * 
 */
var buy_code = "WU";
var buy_name = "Western Union";
var sell_code = "LR";
var sell_name = "Liberty Reserve";
//rateData will be loaded in everypage needed

Math.hold = function(x,n)
{
  var N = Math.pow(10,n);
  return Math.round(x * N)/N;
}


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

function update(buy, sell) {
	if (buy == sell) {
		$('#rate').html('N/A');
	} else if (rateData[buy][sell]) {
		$('#rate').html('1:' + rateData[buy][sell]);
		$('#input_rate').val(rateData[buy][sell]);
	}
	update_amount();
}

function update_amount() {
	var pay_amount = $('#pay_amount').val();
	var get_amount = Math.hold(pay_amount * rateData[buy_code][sell_code], 2);
	$('#get_amount').html(get_amount);
	
	$('#pay').html(buy_name);
	$('#get').html(sell_name);
}

$(document).ready(function() {
	var buyCurrencyRadio = $('input[name=buyCurrency]');
	buy_code = buyCurrencyRadio.filter(':checked').val();

	var sellCurrencyRadio = $('input[name=sellCurrency]');
	sell_code = sellCurrencyRadio.filter(':checked').val();
	
	update(buy_code, sell_code);
	update_amount();
});