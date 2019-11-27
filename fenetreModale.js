$(document).ready(function(e){

    $("#ouvrir_f").click(function(e) {
        $(".arr_plan, .f_modale").css("display","block");
        $(".arr_plan").animate({'opacity':'.5'},350);
        $(".f_modale").animate({'opacity':'1'},350);

    });

    $(".fermer, .arr_plan").click(function(e) {
        $(".arr_plan, .f_modale").animate({'opacity':'0'}, 350,

        function(){
            $(".arr_plan, .f_modale").css("display", "none");
        }
        );
    });
});