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

    //------ Comment Submission Form --------
    $("#commentwriter").hide();
    $("#commentwriter-show").show();

    function commentwriterClick(){
        $("#commentwriter-show").toggle();
        $("#commentwriter-hide").toggle();
        $("#commentwriter").toggle("slow", function(){$.scrollTo("#commentwriter");});
    }

    $("#commentwriter-show").click(commentwriterClick);
    $("#commentwriter-hide").click(commentwriterClick);
});
