<?php

// See also https://canvas.instructure.com/doc/api/external_tools.html

$REGISTER_LTI2 = array(
    "name" => "Random Pictures",
    "FontAwesome" => "fa-paw",
    // "icon_url" => "store/icon.png",  // Use CDN fontawesome PNG
    "short_name" => "Pictures",
    "description" => "This tool shows random photos of cats and other things from lorempixel.com.
You can view analytics within this tool.  To be frank, what is a better use of the Internet than
cat pictures combined with analytics?",
    "privacy_level" => "anonymous",  // anonymous, name_only, public
    "license" => "Apache",
    "languages" => array(
        "English"
    ),
    "analytics" => array(
        "internal"
    ),
    "source_url" => "https://github.com/tsugitools/cats",
    "placements" => array(
        "course_navigation"
        /*
        "course_navigation", "homework_submission",
        "course_home_submission", "editor_button",
        "link_selection", "migration_selection", "resource_selection",
        "tool_configuration", "user_navigation"
        */
    ),
    "screen_shots" => array(
        "store/screen-01.png",
        "store/screen-02.png",
        "store/screen-03.png",
        "store/screen-analytics.png"
    )
);

