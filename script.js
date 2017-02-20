var tabLinks = new Array();
var contentDivs = new Array();

function init() {
    // Grab the tab links and content divs from the page
    var tabListItems = document.getElementById('tabs').childNodes;
    for ( var i = 0; i < tabListItems.length; i++ ) {
        if ( tabListItems[i].nodeName == "LI" ) {
            var tabLink = getFirstChildWithTagName( tabListItems[i], 'A' );
            var id = getHash( tabLink.getAttribute('href') );
            tabLinks[id] = tabLink;
            contentDivs[id] = document.getElementById( id );
        }
    }

    // Assign onclick events to the tab links, and
    // highlight the first tab
    var i = 0;

    for ( var id in tabLinks ) {
        tabLinks[id].onclick = showTab;
        tabLinks[id].onfocus = function() { this.blur() };
        if ( i == 0 ) tabLinks[id].className = 'selected';
        i++;
    }

    // Hide all content divs except the first
    var i = 0;

    for ( var id in contentDivs ) {
        if ( i != 0 ) contentDivs[id].className = 'tabcontent hide';
        i++;
    }

    var hash = document.location.hash;
    if( hash ) {
        //console.log( tabLinks );
        //$('.nav-tabs a[href='+hash+']').tab('show');
        for( var a in tabLinks ) {
            //console.log( tabLinks[a] );
            if( tabLinks[a].hash == hash ) {
                tabLinks[a].click();
            }
        }
    }

    $('#baseid').fadeIn();
}

function showTab() {
    var selectedId = getHash( this.getAttribute('href') );

    // Highlight the selected tab, and dim all others.
    // Also show the selected content div, and hide all others.
    for ( var id in contentDivs ) {
        if ( id == selectedId ) {
            tabLinks[id].className = 'selected';
            contentDivs[id].className = 'tabcontent';
        }
        else {
            tabLinks[id].className = '';
            contentDivs[id].className = 'tabcontent hide';
        }
    }
    sleep(50).then(() => {
        $("html, body").animate({ scrollTop: 0 }, 500);
    });

    // Stop the browser following the link
    //return false;
}

function sleep (time) {
  return new Promise((resolve) => setTimeout(resolve, time));
}

function getFirstChildWithTagName( element, tagName ) {
    for ( var i = 0; i < element.childNodes.length; i++ ) {
        if ( element.childNodes[i].nodeName == tagName ) return element.childNodes[i];
    }
}

function getHash( url ) {
    var hashPos = url.lastIndexOf ( '#' );
    return url.substring( hashPos + 1 );
}
