"use strict";
var siteInfo, userInfo;
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
			<img alt="Logo" src="` +siteInfo.url_headLogo+ `" class="h-45px d-none d-lg-inline app-sidebar-logo-default theme-light-show" alt="light-logo" />
			<img alt="Logo" src="` +siteInfo.url_headLogoDark+ `" class="h-45px d-none d-lg-inline app-sidebar-logo-default theme-dark-show" alt="dark-logo" />`;
			$('#headerLogo a').html(headerLogo);
            $('#item-breadCrumb').nextAll().remove();
			$('#copyRight').html(siteInfo.copyright);
		}, error: function (jqXHR, textStatus, errorThrown) {
			console.log('Load data is error');
		}
	});
}
//Load User INFO
const _loadUserInfo = () => {
	$.ajax({
        url: base_url+ "api/user_info",
        type: "GET",
        dataType: "JSON",
        success: function (data) {
            userInfo = data.row;
            let thumbHeader;
            let userThumbHeader = `<img src="` +userInfo.url_thumb+ `" alt="user-thumb" />`;
            let userSymbol = `<div class="symbol-label fs-1 fw-bold ` +userInfo.symbol_color+ `">` +userInfo.text_symbol+ `</div>`;
            if(userInfo.thumb==null || userInfo.thumb=='') {
                thumbHeader = userSymbol;
            } else {
                thumbHeader = userThumbHeader;
            }
            $('#userThumb-accountMenu').html(thumbHeader),
            $('#userInfo-accountMenu').html(`<div class="symbol symbol-50px me-5">
                ` +thumbHeader+ `
            </div>
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-5">
                    ` +userInfo.name+ `
                </div>
                <a href="javascript:void(0);" class="fw-semibold text-muted text-hover-primary fs-7">
                    ` +userInfo.email+ `
                </a>
            </div>`);
        }, error: function (jqXHR, textStatus, errorThrown) {
            console.log('Load data is error');
        }
    });
};
_loadSiteInfo(), _loadUserInfo();