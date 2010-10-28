$(document).ready(function(){
    //Handle mouseover functionality
    $("#comments").add("#commentwriter-hide").add("#commentwriter-show").hover(
        function(){ $(this).addClass("hoverlink"); },
        function(){ $(this).removeClass("hoverlink"); }
    );


    //Make sure that we only have valid entires for the comment fields.
    $("#commentForm").validate();

    //------ Comments list --------
    $("#commentlist-show").show();
    $("#commentlist").hide();

    $("#comments").click(function(){
        $("#commentlist-show").toggle();
        $("#commentlist-hide").toggle();
        $("#commentlist").toggle("slow");
    });

    //If the user was linked directly to the comments, show them!
    if (window.location.hash.match("^#comment")){
        $("#comments").click();
    }

    //------ --------
    function sectionToggler(section){
        $(section).hide();
        $(section + "-show").show();

        var toggler = function(){
            $(section + "-show").toggle();
            $(section + "-hide").toggle();
            $(section).toggle("slow", function(){$.scrollTo(section);});
        }

        $(section + "-show").click(toggler);
        $(section + "-hide").click(toggler);
    }

    sectionToggler("#commentwriter");

});
