// Create a condition that targets viewports at least 768px wide
const smallQuery = window.matchMedia("(max-width : 50em)");

function active()
{
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
}

function smallMedia(m) {
  // Check if the media query is true
  if (m.matches) {
     // Then make the footer looks good
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
      acc[i].nextElementSibling.style.display = "none";
      acc[i].addEventListener("click",active);
    }
  }
  else
  {
    var acc = document.getElementsByClassName("accordion");
    var i;
    for (i = 0; i < acc.length; i++) {
      acc[i].nextElementSibling.style.display = "block";
      acc[i].removeEventListener("click",active);
    }
  }
}
// Register event listener
smallQuery.addListener(smallMedia);

// Initial check
smallMedia(smallQuery);
