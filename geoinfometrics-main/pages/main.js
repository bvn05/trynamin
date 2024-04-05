document.getElementById("navbtn").addEventListener("click", function() {
    document.getElementById("fp").scrollIntoView({ behavior: 'smooth' });
  });
  
  document.getElementById("navbtn1").addEventListener("click", function() {
    document.getElementById("sp").scrollIntoView({ behavior: 'smooth' });
  });
  
  
  document.getElementById("navbtn2").addEventListener("click", function() {
    document.getElementById("lup").scrollIntoView({ behavior: 'smooth' });
  });
  
  document.getElementById("navbtn3").addEventListener("click", function() {
    document.getElementById("fthp").scrollIntoView({ behavior: 'smooth' });
  });
  

// JavaScript code
function changeEmbed(embedId, containerId, frameId) {
  var iframe = document.getElementById(frameId);
  iframe.src = embedId;
  
  // Remove 'active' class from all buttons
  var buttons = document.querySelectorAll('.button');
  buttons.forEach(function(button) {
    button.classList.remove('active');
  });
  
  // Add 'active' class to the clicked button
  var button = document.querySelector('#' + containerId + ' .button[href="' + embedId + '"]');
  button.classList.add('active');
}

function enlargeColumn(column) {
    column.classList.add("enlarged");
  }
  
  function resetColumn(column) {
    column.classList.remove("enlarged");
  }