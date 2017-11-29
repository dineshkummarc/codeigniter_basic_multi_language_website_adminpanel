/**
 * Created with JetBrains PhpStorm.
 * User: user
 * Date: 23.09.16
 * Time: 12:16
 * To change this template use File | Settings | File Templates.
 */
$(function () {
    $('.sortable').sortable({
        animation: 150,
        axis: 'y',
        update: function(){
            var table = $(this).attr("data-table");
            var x = new Array();
            var id_num = new Array();
            var obj = {};

            $(".sortable>tr").each(function () {
                var str = $(this).attr('data-id');
                x.push(str);
            });



            for (var i = 0; i < x.length; ++i) {
                obj = {id: x[i], num: i};
                id_num.push(obj);
            }

            $.post("SiteEdit/order/"+table, {id_num:id_num}, function (data) {
                if(data.status != 'success'){
                    alert('chhajoxvec');
                };
            },'json');
        }
    });
});











var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

