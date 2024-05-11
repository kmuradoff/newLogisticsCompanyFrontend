<?php
// Array of image file paths
$images = array(
    "gallery/Port-Handling-1.png",
    "gallery/Project-Cargo-11.png",
    "gallery/Project-Cargo-12.png",
    "gallery/Project-Cargo-13.png",
    "gallery/Project-Cargo-14.png",
    "gallery/Project-Cargo-15.png",
    "gallery/Project-Cargo-16.png",
    "gallery/Project-Cargo-17.png",
    "gallery/Project-Cargo-18.png"
);

// Number of images per page
$imagesPerPage = 6;

// Get page number from URL parameter, default to 1 if not set
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Calculate start index of images for current page
$startIndex = ($page - 1) * $imagesPerPage;

// Slice the images array to get images for the current page
$imagesForPage = array_slice($images, $startIndex, $imagesPerPage);

// Output images as JSON
echo json_encode($imagesForPage);
?>