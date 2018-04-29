// When someone clicks a filter, automatically submit and send them to
// the filtered taxonomy
jQuery('.beautiful-taxonomy-filters-select').change(function(){
	jQuery('#beautiful-taxonomy-filters-form').submit();
});