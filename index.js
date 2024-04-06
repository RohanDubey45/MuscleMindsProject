
document.addEventListener("DOMContentLoaded", function () {
  // Function to handle the typewriter effect
  function typewriterEffect(element, text, callback) {
    let index = 0;

    function type() {
      if (index < text.length) {
        element.innerHTML += text.charAt(index);
        index++;
        setTimeout(type, 100); // Adjust the typing speed (milliseconds)
      } else {
        setTimeout(callback, 700); // Adjust the delay before starting the next text (milliseconds)
      }
    }

    type();
  }

  // List of texts to display
  const textList = [
    "Introducing MuscleMinds",
    "Mindful gains, powerful veins.",
    "Energetic minds, explosive muscles."
    // Add more texts as needed
  ];

  // Function to handle the transition between texts
  function transitionText(index) {
    const currentTextElement = document.getElementById("muscle-minds");
    currentTextElement.innerHTML = ""; // Clear the current text

    const newText = textList[index];
    typewriterEffect(currentTextElement, newText, function () {
      // Wait for the current text to finish typing
      setTimeout(function () {
        // Check if there is another text in the list
        if (index < textList.length - 1) {
          transitionText(index + 1);
        } else {
          // If we reach the end, loop back to the beginning
          setTimeout(function () {
            transitionText(0);
          }, 2000); // Adjust the delay before starting from the beginning (milliseconds)
        }
      }, 1000); // Adjust the delay after finishing typing (milliseconds)
    });
  }

  // Initial call to start the transition
  transitionText(0);
});


// function toggleLogoutButton() {
//   var logoutButton = document.getElementById("logout-button");
//   logoutButton.style.display = (logoutButton.style.display === 'none' || logoutButton.style.display === '') ? 'block' : 'none';
// }

// function logout() {
//   // Use jQuery to make an AJAX request
//   $.ajax({
//       url: 'logout.php', // Relative path to logout.php in the same folder
//       method: 'POST',
//       dataType: 'json',
//       success: function(response) {
//           // After logging out, hide the logout button
//           document.getElementById("logout-button").style.display = 'none';
//           console.log(response); // Log the server response if needed
//       },
//       error: function(error) {
//           console.error('Logout failed:', error);
//       }
//   });
// }

