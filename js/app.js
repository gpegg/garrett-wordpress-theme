jQuery(document).ready( function($) {
    // This is code to create those small circles right before the tag text.
    
    $('<svg height="10" width="10"><circle cx="4" cy="5.5" r="3" stroke="#138496" stroke-width="1" fill="white" /></svg><span> </span><span> </span>').prependTo('.tag-cloud-link a');
    
    const circle = '<svg height="10" width="10"><circle cx="4" cy="5.5" r="3" stroke="#138496" stroke-width="1" fill="white" /></svg><span> </span><span> </span>';

    const $tags = $('a.tag-cloud-link');

    for (let i = 0; i < $tags.length; i++) {          
        $tags[i].innerHTML = circle + $tags[i].text;
    }
    
    // Adds class to Category links I cannot edit
    $category = $('#side-cat a');
    
    $category.each(function() {
        console.log($category);
        $category.addClass('cat-item');
    });
    
    // Makes sure people cannot submit an empty search
    $searchInput = $('.search-field');
    $searchSubmit = $('.search-submit');
    $searchSubmit.on('click', function(event) {
        if (!$searchInput.val()) {
            event.preventDefault();
            $('<p style="color:red">Search Term Required</p>').appendTo('.search-form')
        }
    });
    
});