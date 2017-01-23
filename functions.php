// Registering a custom JS file

function customWordPressScripts() {
  // Function arguments - name of the file, path to the file, dependency, version, load script at the bottom or in the header
  wp_enqueue_scrpit('custom_js', get_template_directory_uri() . '/js/custom.js', NULL, 1.0, true);
}

add_action('wp_enqueue_scripts', 'customWordPressScripts');
