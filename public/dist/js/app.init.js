"use strict";
// Class Definition
var siteInfo;
//Load Site Info
const _loadSiteInfo = () => {
	$.ajax({
		url: base_url+ "api/site_info",
		headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') },
		type: "GET",
		dataType: "JSON",
		success: function (data) {
			siteInfo = data.row;
			let headerLogo = `<img alt="Logo" src="` +siteInfo.url_headLogoSmall+ `" class="h-35px d-lg-none" alt="small-logo" />
			<img alt="Logo" src="` +siteInfo.url_headLogo+ `" class="h-20px h-lg-30px app-sidebar-logo-default theme-light-show" alt="light-logo" />
			<img alt="Logo" src="` +siteInfo.url_headLogoDark+ `" class="h-20px h-lg-30px app-sidebar-logo-default theme-dark-show" alt="dark-logo" />`;
			$('#headerLogo a').html(headerLogo);
			$('#copyRight').html(siteInfo.copyright);
		}, error: function (jqXHR, textStatus, errorThrown) {
			console.log('Load data is error');
		}
	});
}
// Class Initialization
jQuery(document).ready(function() {
    _loadSiteInfo();
});