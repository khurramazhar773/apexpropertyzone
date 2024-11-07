document.addEventListener("DOMContentLoaded", function () {
    // Function to handle image preview
    const imageUpload = document.getElementById("imageUpload");
    const imageContainer = document.getElementById("imageContainer");
  
    // Function to preview images and add bin icon for removal
    function previewImages() {
      imageContainer.innerHTML = ""; // Clear any existing images
  
      const files = imageUpload.files;
      if (files && files.length > 0) {
        Array.from(files).forEach((file, index) => {
          if (file.type.startsWith("image/")) {
            const reader = new FileReader();
  
            reader.onload = function (e) {
              // Create a wrapper div for image and bin icon
              const imgWrapper = document.createElement("div");
              imgWrapper.classList.add("image-wrapper");
              imgWrapper.style.position = "relative";
              imgWrapper.style.display = "inline-block";
              imgWrapper.style.margin = "10px";
  
              // Create image element
              const img = document.createElement("img");
              img.src = e.target.result;
              img.classList.add("preview-image");
              img.style.maxWidth = "150px";
              img.style.border = "1px solid #ddd";
  
              // Create bin icon element
              const binIcon = document.createElement("span");
              binIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>`;
              binIcon.style.position = "absolute";
              binIcon.style.top = "0px";
              binIcon.style.right = "0px";
              binIcon.style.cursor = "pointer";
              binIcon.style.color = "red";
              binIcon.style.width = "24px";
              binIcon.style.height = "24px";
  
              // Add event listener to remove image on bin icon click
              binIcon.addEventListener("click", function () {
                imgWrapper.remove(); // Remove the image wrapper
                $("#imageUpload").val("");
              });
  
              // Append image and bin icon to the wrapper
              imgWrapper.appendChild(img);
              imgWrapper.appendChild(binIcon);
  
              // Append the wrapper to the image container
              imageContainer.appendChild(imgWrapper);
            };
  
            reader.readAsDataURL(file);
          }
        });
      }
    }
  
    // Listen for file selection and trigger previewImages
    if (imageUpload) {
      imageUpload.addEventListener("change", previewImages);
    }
  
    // Function to toggle sections based on radio selection
    function updateSubtypes() {
      const propertyType = document.getElementById("propertyType").value;
      const subtypeDropdown = document.getElementById("propertySubtype");
      subtypeDropdown.innerHTML = ""; // Clear the existing options
    
      if (propertyType === "residential") {
        const residentialSubtypes = [
          { name: "Home", value: "home" },
          { name: "Apartment", value: "apartment" },
          { name: "Villa", value: "villa" },
          { name: "Duplex", value: "duplex" },
          { name: "Townhouse", value: "townhouse" }
        ];
        residentialSubtypes.forEach((subtype) => {
          const option = document.createElement("option");
          option.value = subtype.value;
          option.text = subtype.name;
          subtypeDropdown.appendChild(option);
        });
        document.getElementById("residentialSection").style.display = "block";
        document.getElementById("commercialSection").style.display = "none";
      } else if (propertyType === "commercial") {
        const commercialSubtypes = [
          { name: "Shop", value: "shop" },
          { name: "Office", value: "office" },
          { name: "Warehouse", value: "warehouse" },
          { name: "Restaurant", value: "restaurant" },
          { name: "Showroom", value: "showroom" }
        ];
        commercialSubtypes.forEach((subtype) => {
          const option = document.createElement("option");
          option.value = subtype.value;
          option.text = subtype.name;
          subtypeDropdown.appendChild(option);
        });
        document.getElementById("commercialSection").style.display = "block";
        document.getElementById("residentialSection").style.display = "none";
      } else {
        // Hide both sections if no valid property type is selected
        document.getElementById("residentialSection").style.display = "none";
        document.getElementById("commercialSection").style.display = "none";
      }
    }
    
  
  
    // Event listener to toggle sections based on property type
    document
      .getElementById("propertyType")
      .addEventListener("change", updateSubtypes);
  
    // Initial check on DOM load to set up the correct section visibility
    updateSubtypes();
  
    // Store selected files in an array
    let selectedFiles = [];
  
    // Function to preview images and add bin icon for removal
    function previewImages() {
      imageContainer.innerHTML = ""; // Clear any existing images
  
      const files = imageUpload.files;
      if (files && files.length > 0) {
        // Update the selected files array
        selectedFiles = Array.from(files);
  
        selectedFiles.forEach((file, index) => {
          if (file.type.startsWith("image/")) {
            const reader = new FileReader();
  
            reader.onload = function (e) {
              // Create a wrapper div for image and bin icon
              const imgWrapper = document.createElement("div");
              imgWrapper.classList.add("image-wrapper");
              imgWrapper.style.position = "relative";
              imgWrapper.style.display = "inline-block";
              imgWrapper.style.margin = "10px";
  
              // Create image element
              const img = document.createElement("img");
              img.src = e.target.result;
              img.classList.add("preview-image");
              img.style.maxWidth = "150px";
              img.style.border = "1px solid #ddd";
  
              // Create bin icon element
              const binIcon = document.createElement("span");
              binIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z"></path></svg>`;
              binIcon.style.position = "absolute";
              binIcon.style.top = "0px";
              binIcon.style.right = "0px";
              binIcon.style.cursor = "pointer";
              binIcon.style.color = "red";
              binIcon.style.width = "24px";
              binIcon.style.height = "24px";
  
              // Add event listener to remove image on bin icon click
              binIcon.addEventListener("click", function () {
                // Remove the selected image from the array
                selectedFiles.splice(index, 1);
  
                // Update the file input with the new list of files
                updateFileInput();
  
                // Remove the image wrapper from the DOM
                imgWrapper.remove();
              });
  
              // Append image and bin icon to the wrapper
              imgWrapper.appendChild(img);
              imgWrapper.appendChild(binIcon);
  
              // Append the wrapper to the image container
              imageContainer.appendChild(imgWrapper);
            };
  
            reader.readAsDataURL(file);
          }
        });
      }
    }
  
    // Update the file input with the new list of files after an image is removed
    function updateFileInput() {
      // Create a new DataTransfer object (modern browsers)
      const dataTransfer = new DataTransfer();
  
      selectedFiles.forEach((file) => {
        dataTransfer.items.add(file);
      });
  
      // Assign the updated file list to the input
      imageUpload.files = dataTransfer.files;
    }
  
    // Listen for file selection and trigger previewImages
    if (imageUpload) {
      imageUpload.addEventListener("change", previewImages);
    }
  
    // Function to toggle sections based on radio buttons (residential/commercial)
    function toggleSections() {
      const residentialRadio = document.getElementById("residentialRadio");
      const commercialRadio = document.getElementById("commercialRadio");
      const residentialSection = document.getElementById("residentialSection");
      const commercialSection = document.getElementById("commercialSection");
  
      if (residentialRadio && residentialRadio.checked) {
        residentialSection.style.display = "block";
        commercialSection.style.display = "none";
      } else if (commercialRadio && commercialRadio.checked) {
        commercialSection.style.display = "block";
        residentialSection.style.display = "none";
      }
    }
  
    // Attach event listeners for the radio buttons to toggle sections
    const residentialRadio = document.getElementById("residentialRadio");
    const commercialRadio = document.getElementById("commercialRadio");
    if (residentialRadio && commercialRadio) {
      residentialRadio.addEventListener("change", toggleSections);
      commercialRadio.addEventListener("change", toggleSections);
    }
  
    // Initial call to set the correct section visibility
    toggleSections();
  });
  