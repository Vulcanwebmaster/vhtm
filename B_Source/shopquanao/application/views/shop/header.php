<div class="header">
    <h1 class="logo">
        <strong>Magento Commerce</strong><a href="http://demo.emthemes.com/casualwear/" title="Magento Commerce"
            class="logo"><img src="http://demo.emthemes.com/casualwear/skin/frontend/em0015/default/images/logo.png"
                alt="Magento Commerce"></a></h1>
    <div class="quick-access">
        <form id="search_mini_form" action="http://demo.emthemes.com/casualwear/catalogsearch/result/"
        method="get">
        <div class="form-search">
            <label for="search">
                Search:</label>
            <input id="search" type="text" name="q" value="" class="input-text" autocomplete="off">
            <button type="submit" title="Search" class="button">
                <span><span>Search</span></span></button>
            <div id="search_autocomplete" class="search-autocomplete" style="display: none;">
            </div>
            <script type="text/javascript">
        //<![CDATA[
                var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search entire store here...');
                searchForm.initAutocomplete('http://demo.emthemes.com/casualwear/catalogsearch/ajax/suggest/', 'search_autocomplete');
        //]]>
            </script>
        </div>
        </form>
        <div class="links">
            <ul class="">
                <li class="first"><a href="http://demo.emthemes.com/casualwear/customer/account/"
                    title="My Account">My Account</a></li>
                <li><a href="http://demo.emthemes.com/casualwear/wishlist/" title="My Wishlist">My Wishlist</a></li>
            </ul>
            <ul class="">
                <li><a href="http://demo.emthemes.com/casualwear/checkout/cart/" title="My Cart"
                    class="top-link-cart">My Cart</a></li>
                <li><a href="http://demo.emthemes.com/casualwear/checkout/" title="Checkout" class="top-link-checkout">
                    Checkout</a></li>
            </ul>
            <ul class="last">
                <li class=" last"><a href="http://demo.emthemes.com/casualwear/customer/account/login/"
                    title="Log In">Log In</a></li>
                <li class="welcome">Default welcome msg!</li>
            </ul>
        </div>
        <div class="top-container">
            <ul>
                <li class="default"><a href="?___store=default"><span>Default</span></a></li>
                <li class="black"><a href="?___store=black"><span>Black</span></a></li>
                <li class="orange"><a href="?___store=orange"><span>Orange</span></a></li>
            </ul>
        </div>
    </div>
</div>
