// How TO - Dropdown Navbar https://www.w3schools.com/howto/howto_css_dropdown_navbar.asp

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function DropdownFunction() {
  document.getElementById("lessonsDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("lessonsDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
