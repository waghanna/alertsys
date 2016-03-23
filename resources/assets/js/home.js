var $fileslist = [];

String.prototype.filename=function(extension){
    var s= this.replace(/\\/g, '/');
    s= s.substring(s.lastIndexOf('/')+ 1);
    return extension? s.replace(/[?#].+$/, ''): s.split('.')[0];
}
function change_display_image(){
    $fileslist = $fileslist_temp.split('\n');
    var cur_file = $('#home-img').attr('src');
    var next_file = 0;
    if (cur_file !== undefined){
        next_file = ($fileslist.indexOf(cur_file.filename(true)) + 1) % $fileslist.length;
    }
    
    $("#home-img").fadeTo(1, 0.1, function() {
            $("#home-img").attr("src","../img/display/" + $fileslist[next_file]);
        }).fadeTo(1000, 1);

    var delay = next_file==0?8000:2000;
    setTimeout(change_display_image, delay);
    if (next_file==0){
        $('#home-img-text').html('Safety and Efficiency<br>Keep us moving forward.');
        $('#home-img-text').css('top', '0px').css('left', '0px').css('right', 'auto');
    }
    else{
        $('#home-img-text').html('Prevent accidents and<br>maximize productivity');
        $('#home-img-text').css('top', '170px').css('left', 'auto').css('right', '0px');
    }
}
$(function() {
    change_display_image();
});
