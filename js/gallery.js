// Image Gallery JavaScript
// This code adapted from the book, DOM Scripting by Jeremy Keith (http://domscripting.com/book/), as found in chapter 4.

// console.log("gallery.js is attached");

document.addEventListener("DOMContentLoaded",
  function() {
    // console.log("DOM is loaded");
    // Grab the UL for the image gallery and assign it to the variable 'gallery'
    var gallery = document.querySelector('#imagegallery');
    // console.log(gallery);

    // Create an array composed of all the A (anchor) elements inside that UL, now referred to as 'gallery'
    var links = gallery.getElementsByTagName('a');
    console.log(links);
    // console.log(links[0]);

    // Create a loop that iterates through each item in the links array that we just created
    for (var i = 0; i < links.length; i++) {
      console.log(links[i]);

      // For each one of those A elements, attach an onclick attribute that calls an anonymous function
      links[i].onclick = function() {

        // For the link that was clicked, capture the value of the href attribute as a variable called 'source'
        var source = this.getAttribute("href");
        console.log(source);

        // Grab the IMG element with the id 'placeholder' and assign it to the variable of the same name
        var placeholder = document.getElementById("placeholder");

        // Change the image file that the IMG element points to in the src attribute based on the link clicked
        placeholder.setAttribute("src", source);

        // Cancel the default behaviour of each hyperlink (which is to follow the href)
        return false;

        // End the 'onclick' event anonymous function
      };
      // End the loop through the links array
    };
    // End the DOM ready function
  });
