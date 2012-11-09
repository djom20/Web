<div id="google-search-form" style="width: 74%; display: block;">Waiting...</div>
<script src="https://www.google.es/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'es', style : google.loader.themes.SHINY});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};
    var imageSearchOptions = {};
    imageSearchOptions['layout'] = google.search.ImageSearch.LAYOUT_POPUP;
    customSearchOptions['enableImageSearch'] = true;
    customSearchOptions['imageSearchOptions'] = imageSearchOptions;
    var customSearchControl = new google.search.CustomSearchControl('016608616163628457120:gvwi3f9hti0', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    var options = new google.search.DrawOptions();
    options.enableSearchboxOnly("http://www.google.es/cse?cx=016608616163628457120:gvwi3f9hti0", null, true);
    customSearchControl.draw('google-search-form', options);
  }, true);
</script>