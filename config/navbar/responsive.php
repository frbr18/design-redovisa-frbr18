<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "id" => "rm-menu",
    "wrapper" => null,
    "class" => "rm-default rm-mobile",
 
    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "kmom06",
                        "url" => "redovisning/Kmom06",
                        "title" => "Redovisning för Kmom06.",
                    ],
                    [
                        "text" => "kmom10",
                        "url" => "redovisning/kmom10",
                        "title" => "Redovisning för Kmom10.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Test",
            "url" => "test",
            "title" => "Testa lite olika markdown saker",
        ],
        [
            "text" => "Rapporter",
            "url" => "rapport",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Färgchhema",
                        "url" => "rapport/rapport",
                        "title" => "Färgschema.",
                    ],
                    [
                        "text" => "Bilder",
                        "url" => "rapport/rapport_bild",
                        "title" => "Bild analys.",
                    ],
                    [
                        "text" => "Design principer",
                        "url" => "rapport/designprincip_06",
                        "title" => "Bild analys.",
                    ],
                    [
                        "text" => "Design Elements",
                        "url" => "rapport/designelements_07",
                        "title" => "elementsTest.",
                    ],
                    [
                        "text" => "Design Principer",
                        "url" => "rapport/designprinciper_08",
                        "title" => "principer.",
                    ],
                    [
                        "text" => "Webbplatsdesign",
                        "url" => "rapport/webbplatsdesign_09",
                        "title" => "principer.",
                    ],
                ],
            ],
        ],
    ],
];
