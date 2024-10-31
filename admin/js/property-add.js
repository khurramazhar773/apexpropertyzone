$(document).ready(function () {
    // Initialize the index for additional images
    var imageIndex = 0;

    // Function to add new file input for additional images
    $('#addImageBtn').click(function () {
        imageIndex++;
        $('#additionalImagesContainer').append(
            `<div class="add-files">
                <label>Additional Image ${imageIndex}</label>
                <input type="file" name="additional_imgs[]" class="form-control" onchange="showNextImageInput(this)">
                <div class="popup">
                    <div class="heading">Image Size Should be:</div>
                    <div class="height"><span class="bold">Height</span>: 414px;</div>
                    <div class="width"><span class="bold">Width</span>: 434px;</div>
                    <button class="btn btn-primary">Okay!</button>
                </div>
            </div>`
        );
    });
});

// Function to show next input field
function showNextImageInput(input) {
    // Check if input has a file selected
    if (input.files.length > 0) {
        // Add another image input field
        $('#addImageBtn').click();
    }
}
    