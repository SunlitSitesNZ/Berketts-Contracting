$(document).ready(function() {
    // Function to activate a tab by ID using Bootstrap's method
    function activateTab(tabId) {
      $('.nav-tabs a[href="' + tabId + '"]').tab('show'); // Use Bootstrap's method to show the tab
    }
  
    // On page load, check for a hash and activate the corresponding tab
    var initialTab = window.location.hash;
    if (initialTab) {
      activateTab(initialTab);
    }
  
    // Handle clicks on nav links
    $('.nav-tabs a').on('click', function(e) {
      e.preventDefault(); // Prevent default action
      var targetTabId = $(this).attr('href');
      activateTab(targetTabId); // Activate using Bootstrap's method
  
      // Update URL hash without page reload
      history.pushState(null, null, targetTabId);
    });
  });
  
// get the data from each service on navbar 

// add the class active to the correlating service on the navbar

// do this for the rest of the services