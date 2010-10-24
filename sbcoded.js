$(document).ready(function(){
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

    //------ Comment Submission Form --------
    $("#commentwriter").hide();
    $("#commentwriter-show").show();

    function commentwriterClick(){
        $("#commentwriter-show").toggle();
        $("#commentwriter-hide").toggle();
        $("#commentwriter").toggle("slow");
    }

    $("#commentwriter-show").click(commentwriterClick);
    $("#commentwriter-hide").click(commentwriterClick);
});
