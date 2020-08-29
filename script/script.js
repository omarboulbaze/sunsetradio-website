
 function goBack(){
    $('.container').load('classement.php .container');

   }

$(document).ready(function(){

    $(".radio-toggle").hide();
    

    $(".music-toggle").click(()=>{
        $(".music-toggle").toggle("fold");
        $(".radio-toggle").toggle("fold");
    });

    $(".radio-toggle").click(()=>{
        $(".radio-toggle").toggle("fold");
        $(".music-toggle").toggle("fold");
        
    });

    


    // Ajax load functions

    $("#page-classement a").click(()=>{

        $('.container').load('classement.php .container');
        $("a").removeClass("active-ajax");
        $("#page-classement a").addClass("active-ajax");

    });

  

  
    



    $("#page-home a").click(()=>{

        $('.container').load('city.php .container');
        $("a").removeClass("active-ajax");
        $("#page-home a").addClass("active-ajax");

    });

    $("#page-flux a").click(()=>{

        $('.container').load('flux.php .container');
        $("a").removeClass("active-ajax");
        $("#page-flux a").addClass("active-ajax");

    });

    $("#page-news a").click(()=>{

        $('.container').load('city.php .container');
        $("a").removeClass("active-ajax");
        $("#page-news a").addClass("active-ajax");

    });


    //Index
   
    $("#page-index a").click(()=>{

        $('.container').load('index.php .container');
        $('body').addClass("bgRadio");
        $("a").removeClass("active-ajax");
        $("#page-index a").addClass("active-ajax");

    });

    $("#page-show a").click(()=>{

        $('.container').load('shows.php .container');
        $('body').removeClass("bgRadio");
        $("a").removeClass("active-ajax");
        $("#page-show a").addClass("active-ajax");

    });

    $("#page-top20 a").click(()=>{

        $('.container').load('top20.php .container');
        $.getScript("https://widget.radioking.io/top-tracks/build/script.min.js", function(){
          });
        $('body').removeClass("bgRadio");
        $("a").removeClass("active-ajax");
        $("#page-top20 a").addClass("active-ajax");
        
    });

    
    $("#page-team a").click(()=>{

        $('.container').load('team.php .container');
        $('body').removeClass("bgRadio");
        $("a").removeClass("active-ajax");
        $("#page-team a").addClass("active-ajax");

    });

    $("#page-partenaires a").click(()=>{

        
        $('.container').load('partenaires.php .container-fluid');
        $('body').removeClass("bgRadio");
        $("a").removeClass("active-ajax");
        $("#page-partenaires a").addClass("active-ajax");

    });
   
    $("#page-bot a").click(()=>{

        $('.container').load('bot.php .container');
        $('body').removeClass("bgRadio");
        $("a").removeClass("active-ajax");
        $("#page-bot a").addClass("active-ajax");

    });



  });