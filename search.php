<?php
if (isset($_GET['query'])) {
    $query = strtolower(trim($_GET['query']));

    $flowers = ["Rose", "Tulip", "Sunflower", "Hibiscus", "Lily", "Daisy", "Orchid", "Marigold", "Lavender", "Jasmine"];
    $suggestions = [];

    foreach ($flowers as $flower) {
        if (stripos($flower, $query) !== false) {
            $suggestions[] = "<p class='suggestion'>{$flower}</p>";
        }
    }

    echo !empty($suggestions) ? implode("", $suggestions) : "<p class='suggestion'>No results</p>";
}
?>
