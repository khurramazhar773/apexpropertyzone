const pages = [
  "service-detail.html",
  "service-detail2.html",
  "service-detail3.html",
  "service-detail4.html",
  "service-detail5.html",
  "service-detail6.html",
];

// Get the full path of the current URL
const fullPath = window.location.pathname;

// Extract the file name from the path
const fileName = fullPath.substring(fullPath.lastIndexOf("/") + 1);

document.getElementById("prevPage").addEventListener("click", () => {
  if (fileName === "service-detail.html") {
    window.location.href = "service-detail6.html";
  } else {
    for (let i = 1; i < pages.length; i++) {
      if (fileName === pages[i]) {
        window.location.href = pages[i - 1];
        break;
      }
    }
  }
});

document.getElementById("nextPage").addEventListener("click", () => {
  if (fileName === "service-detail6.html") {
    window.location.href = "service-detail.html";
  } else {
    for (let i = 0; i < pages.length - 1; i++) {
      if (fileName === pages[i]) {
        window.location.href = pages[i + 1];
        break;
      }
    }
  }
});



