jQuery(document).ready(function ($) {
    var location = window.location;
    var found = false;
    $("#tab-container a").each(function () {
        var filename = $(this).attr("href");
        var link1, link2, link3, link4, link5, link6, link7, link8;
        var href1, href2, href3, href4, href5, href6, href7, href8;
        link1 = "http://www.bietthudalat.com.vn/vi/";
        link2 = "http://bietthudalat.com.vn/vi/";
        link3 = "http://www.bietthulehoang.com/vi/";
        link4 = "http://bietthulehoang.com/vi/";
        link5 = "http://www.bietthudalat.com.vn/en/";
        link6 = "http://bietthudalat.com.vn/en/";
        link7 = "http://www.bietthulehoang.com/en/";
        link8 = "http://bietthulehoang.com/en/";
        href1 = link1 + filename;
        href2 = link2 + filename;
        href3 = link3 + filename;
        href4 = link4 + filename;
        href5 = link5 + filename;
        href6 = link6 + filename;
        href7 = link7 + filename;
        href8 = link8 + filename;
        if ((href1 == location) || (href2 == location) || (href3 == location) || (href4 == location) ||
            (href5 == location) || (href6 == location) || (href7 == location) || (href8 == location)) {
            $(this).parent().addClass("selected");
            found = true;
        }
    });
    if (!found) {
        $("#tab-container li:first").addClass("selected");
    }
    $('.home-clip').responsiveIframe({ xdomain: '*'});
});

