<div id="page-search">
	<div class="container">
		<div class="mt-5 mb-5">
			<div class="d-inline">
				<h3 data-i18n="pages.search.resultFor" data-i18n-options='{"query": "<?=$_GET['q']?>"}'>pages.search.resultFor</h3>
			</div>
			<div id="search-result" class="mt-4" data-query="<?=urlencode($_GET['q'])?>">
				<p id="search-result-count" data-i18n="pages.search.resultCount" data-i18n-options='{"count": 0}'></p>
				<li class="list-group">
				</li>
			</div>
		</div>
	</div>
</div>