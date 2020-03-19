$(window).scroll(function(){
    var flag = false;
    var scroll;

    $(window).scroll(function(){
        scroll = $(window).scrollTop();

        if(scroll > 50){
            if(!flag){
                $("#menu").css({ "box-shadow":"6px 6px 6px #5DA2E7", "height": "80px", "padding-top":"-20px"});
                $("#imagen-logo").css({"width":"200px", "margin-left":"30px"});
              
              
                flag = true;
            }
        } else{
            if(flag){
            $("#menu").css({ "box-shadow":"0px 0px 0px #ffffff", "height": "100px" });
            $("#imagen-logo").css({"width":"100%"});
           
            flag = false;
            }
        }


    });
});