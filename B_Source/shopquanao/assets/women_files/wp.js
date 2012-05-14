var referrer = window.top.location.href;

if ( typeof( window[ 'clr' ] ) == "undefined" ) 
{
   var clr = "none";
}
/*
if ( typeof( window[ 'n' ] ) == "undefined" ) {  var n = 0; }
if(n == 1)
{
//	document.write('<iframe src="http://kontactr.com/w.php?id='+id+'&referrer='+referrer+'&color='+clr+'&n=1" width="368px" height="545px" frameborder="0"></iframe>');
	document.write('<iframe src="http://kontactr.com/w.php?id='+id+'&referrer='+referrer+'&color='+clr+'&n=1" width="368px" height="545px" frameborder="0"></iframe>');
}
else
{
	document.write('<iframe src="http://kontactr.com/w.php?id='+id+'&referrer='+referrer+'&color='+clr+'" width="475px" height="475px" frameborder="0"></iframe>');
}
*/

document.write('<iframe src="http://kontactr.com/xuser/'+id+'/'+clr+'" width="368px" height="600px" frameborder="0"></iframe>');