// Function to hide blog entries starting from a certain index
function hideEntriesStartingIndex(index) {
    var blogEntries = document.querySelectorAll('.blog-entry');
    for (var i = index; i < blogEntries.length; i++) {
        blogEntries[i].style.display = 'none';
    }
}

// Function to show only filtered blog entries
function filterBlogEntries() {
    var selectedCategory = document.getElementById("categoryFilter").value;
    var blogEntries = document.querySelectorAll(".blog-entry");

    blogEntries.forEach(function(entry) {
        var category = entry.dataset.category;
        if (selectedCategory === "" || selectedCategory === category) {
            entry.style.display = "block";
        } else {
            entry.style.display = "none";
        }
    });
}

// Add event listener to category filter
document.getElementById("categoryFilter").addEventListener("change", function() {
    filterBlogEntries();
    // After filtering, reapply the infinite scrolling logic
    showHiddenEntries();
});

// Function to show hidden blog entries as the user scrolls down
function showHiddenEntries() {
    var blogEntries = document.querySelectorAll('.blog-entry');
    var windowHeight = window.innerHeight;
    var scrollY = window.scrollY || window.pageYOffset;

    for (var i = 0; i < blogEntries.length; i++) {
        var entryOffsetTop = blogEntries[i].offsetTop;
        if (entryOffsetTop < windowHeight + scrollY && blogEntries[i].style.display !== 'none') {
            blogEntries[i].style.display = 'block';
        }
    }
}

// Event listener to show more entries as the user scrolls down
window.addEventListener('scroll', function () {
    showHiddenEntries();
});

// Initial setup: hide entries starting from a certain index
hideEntriesStartingIndex(1); // Hide entries starting from index 2

// Call filterBlogEntries to initially filter entries based on the category filter
filterBlogEntries();
