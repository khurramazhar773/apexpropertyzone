const pages = [
  "property-detail.html",
  "property-detail2.html",
  "property-detail3.html",
  "property-detail4.html",
  "property-detail5.html",
  "property-detail6.html",
];

const fullPath = window.location.pathname;

// Extract the file name from the path
const fileName = fullPath.substring(fullPath.lastIndexOf("/") + 1);

// property fields
document.getElementById("prevPage").addEventListener("click", () => {
    if (fileName === "property-detail.html") {
      window.location.href = "property-detail6.html";
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
    if (fileName === "property-detail6.html") {
      window.location.href = "property-detail.html";
    } else {
      for (let i = 0; i < pages.length - 1; i++) {
        if (fileName === pages[i]) {
          window.location.href = pages[i + 1];
          break;
        }
      }
    }
  });