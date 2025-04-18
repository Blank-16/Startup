// <!-- JS for Modal Toggle [join now button nav bar ]-->
function toggleModal() {
  const modal = document.getElementById("joinModal");
  modal.classList.toggle("hidden");
}

// Script for changing text
const words = ["Founder", "Investor", "Contributor"];
let index = 0;
const wordElement = document.getElementById("changing-word");
function typeEffect(word) {
  wordElement.textContent = "";
  let i = 0;

  function type() {
    if (i < word.length) {
      wordElement.textContent += word[i];
      i++;
      setTimeout(type, 100); // Typing speed
    } else {
      setTimeout(eraseEffect, 1000); // Pause before erasing
    }
  }
  type();
}
function eraseEffect() {
  let text = wordElement.textContent;

  function erase() {
    if (text.length > 0) {
      text = text.slice(0, -1);
      wordElement.textContent = text;
      setTimeout(erase, 50); // Erasing speed
    } else {
      index = (index + 1) % words.length;
      setTimeout(() => typeEffect(words[index]), 500); // Start next word
    }
  }
  erase();
}
typeEffect(words[index]); // Start animation

//Js for nav bar hover stroke colour change
document.addEventListener("DOMContentLoaded", function () {
  const flexContainers = document.querySelectorAll("#main-div");
  flexContainers.forEach((container) => {
    const svgDiv = container.querySelector("#svg-div");
    const svg = container.querySelector("svg");

    container.addEventListener("mouseenter", function () {
      if (svgDiv) {
        svgDiv.style.backgroundColor = "white";
        svgDiv.style.borderColor = "#e5e5e5";
      }

      if (svg) {
        svg.style.stroke = "black";
      }
    });

    container.addEventListener("mouseleave", function () {
      if (svgDiv) {
        svgDiv.style.backgroundColor = "black";
        svgDiv.style.borderColor = "#4a4a4a";
      }

      if (svg) {
        svg.style.stroke = "white";
      }
    });

    // Add transition for smooth color change
    if (svgDiv) {
      svgDiv.style.transition =
        "background-color 0.3s ease, border-color 0.3s ease";
    }

    if (svg) {
      svg.style.transition = "stroke 0.3s ease";
    }
  });
});

// JavaScript for the accordion functionality
function toggleAccordion(id) {
  const content = document.getElementById(id);
  const icon = document.getElementById(id + "-icon");

  if (content.classList.contains("hidden")) {
    content.classList.remove("hidden");
    icon.classList.add("rotate-180");
  } else {
    content.classList.add("hidden");
    icon.classList.remove("rotate-180");
  }
}

// JavaScript for Tab Functionality with Smooth Transitions {how it works}
document.addEventListener("DOMContentLoaded", function () {
  const tabButtons = document.querySelectorAll(".user-tab-btn");
  const tabContents = document.querySelectorAll(".user-tab-content");

  tabButtons.forEach((button) => {
    button.addEventListener("click", () => {
      tabButtons.forEach((btn) => {
        btn.classList.remove(
          "active",
          "bg-gradient-to-r",
          "from-[#E94560]",
          "to-purple-600",
          "text-white"
        );
        btn.classList.add("bg-transparent");
      });

      button.classList.add(
        "active",
        "bg-gradient-to-r",
        "from-[#E94560]",
        "to-purple-600",
        "text-white"
      );
      button.classList.remove("bg-transparent");

      // Hide all content with fade effect
      tabContents.forEach((content) => {
        content.style.opacity = "0";
        setTimeout(() => {
          content.classList.add("hidden");
        }, 300);
      });

      // Show selected content with fade effect
      const targetId = button.getAttribute("data-target") + "-content";
      setTimeout(() => {
        const selectedContent = document.getElementById(targetId);
        selectedContent.classList.remove("hidden");
        setTimeout(() => {
          selectedContent.style.opacity = "1";
        }, 50);
      }, 300);
    });
  });

  // Initialize with fade in effect
  tabContents.forEach((content) => {
    content.style.transition = "opacity 0.3s ease-in-out";
    content.style.opacity = content.classList.contains("hidden") ? "0" : "1";
  });
});