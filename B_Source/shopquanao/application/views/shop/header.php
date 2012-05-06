<div class="header">
	<a href="http://demo.emthemes.com/casualwear/" title="Magento Commerce"
		class="logo"><strong>Magento Commerce</strong><img
		src="<?php echo base_url();?>assets/women_files/logo.png" alt="Magento Commerce">
	</a>
	<div class="quick-access">
		<form id="search_mini_form"
			action="http://demo.emthemes.com/casualwear/catalogsearch/result/"
			method="get">
			<div class="form-search">
				<label for="search">Search:</label> <input autocomplete="off"
					id="search" name="q" value="Search entire store here..."
					class="input-text" type="text">
				<button type="submit" title="Search" class="button">
					<span><span>Search</span>
					</span>
				</button>
				<div style="display: none;" id="search_autocomplete"
					class="search-autocomplete"></div>
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
				<li><a href="http://demo.emthemes.com/casualwear/checkout/cart/"
					title="My Cart" class="top-link-cart">My Cart</a>
				</li>
				<li><a href="http://demo.emthemes.com/casualwear/checkout/"
					title="Checkout" class="top-link-checkout">Checkout</a>
				</li>
			</ul>
		</div>
		<div class="top-container">
			<ul>
				<li class="default"><a
					href="http://demo.emthemes.com/casualwear/women.html?___store=default"><span>Default</span>
				</a>
				</li>
				<li class="black"><a
					href="http://demo.emthemes.com/casualwear/women.html?___store=black"><span>Black</span>
				</a>
				</li>
				<li class="orange"><a
					href="http://demo.emthemes.com/casualwear/women.html?___store=orange"><span>Orange</span>
				</a>
				</li>
			</ul>
		</div>
	</div>
</div>
