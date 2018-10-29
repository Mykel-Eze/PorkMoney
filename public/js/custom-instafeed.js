
var limitWidth;
var width = $(window).width();

if (width <= 600) {
    limitWidth = 6;
}
else if (width <= 993) {
    limitWidth = 4;
}
 else {
    limitWidth = 6;
}

var userFeed = new Instafeed({
    get: 'user',
    userId: '7366584882',
    accessToken: '7366584882.1677ed0.e6fc291d9c6f4606a1dd7110b82f9b29',
    resolution: 'standard_resolution',
    sortBy: 'most-recent',
    template: '<div class="col s4 m3 l2 pad0 in-wrap"><div class="photo-box"><div class="image-wrap"><a href="{{link}}" target="_blank" style="background:url({{image}})"></a></div></div></div>',
    limit: limitWidth,
    links: false
});
userFeed.run();