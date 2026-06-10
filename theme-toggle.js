document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("theme-toggle");
  const lightIcon = document.querySelector(".theme-icon.light-icon");
  const darkIcon = document.querySelector(".theme-icon.dark-icon");
  const linkId = "dark-css";
  const darkHref = "/posts/wp-content/themes/Less/dark.css";

  function updateIcons(theme) {
    document.documentElement.classList.toggle("dark", theme === "dark");
    lightIcon.style.display = theme === "dark" ? "block" : "none";
    darkIcon.style.display = theme === "dark" ? "none" : "block";
    localStorage.setItem("theme", theme);
  }

  function applyDarkStyles() {
    if (!document.getElementById(linkId)) {
      const link = document.createElement("link");
      link.id = linkId;
      link.rel = "stylesheet";
      link.href = darkHref;
      document.head.appendChild(link);
    }
    updateIcons("dark");
  }

  function removeDarkStyles() {
    const link = document.getElementById(linkId);
    if (link) link.remove();
    updateIcons("light");
  }

  function toggleTheme() {
    if (document.documentElement.classList.contains("dark")) {
      removeDarkStyles();
    } else {
      applyDarkStyles();
    }
  }

  if (toggleBtn) {
    toggleBtn.addEventListener("click", toggleTheme);
  }

  if (document.documentElement.classList.contains("dark")) {
    applyDarkStyles();
  }
});
