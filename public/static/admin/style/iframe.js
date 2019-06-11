$(window).resize(function(e) {
    $("#bd").height($(window).height() - $("#hd").height() - $("#ft").height()-6);
    $(".wrap").height($("#bd").height()-6);
    $(".nav").css("minHeight", $(".sidebar").height() - $(".sidebar-header").height()-1);
    $("#iframe").height($(window).height() - $("#hd").height() - $("#ft").height()-12);
}).resize();