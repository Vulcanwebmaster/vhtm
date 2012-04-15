<div id='pleft'>
    <div id="currencyOut">
        
        <input type="radio" name="currencyOut" value="LR"> Liberty Reserve</input>
        <input type="radio" name="currencyOut" value="WU"> Western Union</input>
        
    </div>
    <div id="rate"> RATE: xxx</div>
    <div id="currencyIn">
        
        <input type="radio" name="currencyIn" value="LR"> Liberty Reserve</input>
        <input type="radio" name="currencyIn" value="WU"> Western Union</input>
    </div>
    
    <form action="https://sci.libertyreserve.com/en" method="GET">
        <input type="hidden" name="lr_acc" value="U8305692">
        <input type="text" name="lr_amnt" value="300.00">
        <input type="hidden" name="lr_currency" value="LRUSD">
        <input type="submit" />
    </form>
</div>
