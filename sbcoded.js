$(document).ready(function(){
    //Make sure that we only have valid entires for the comment fields.
    $("#commentForm").validate();

    //------ Allows for quick and easy toggling of a section --------
    function createSectionToggler(section){
        var showhide = $(section+"-show").add(section+"-hide");
        var target = $(section);
        showhide.hover( function(){ $(this).addClass("hoverlink"); }, function(){ $(this).removeClass("hoverlink"); } );

        target.hide();
        $(section + "-show").show();

        var toggler = function(){
            showhide.toggle();
            target.toggle("slow", function(){ $.scrollTo($(this));});
        }

        showhide.click(toggler);
    }

    createSectionToggler("#commentlist");
    createSectionToggler("#commentwriter");

    //If the user was linked directly to the comments, show them!
    if (window.location.hash.match("^#comment")){ $("#commentlist-show").click(); }
});
