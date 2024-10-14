<?php

//       =======================    Header   =========================


// Dynamic contact info
$contactInfo = [
    'phone' => '+01 123455678990',
    'email' => 'demo@gmail.com',
    'location' => '123 Street, City, Country'
];

// Dynamic navigation links
$navLinks = [
    ['label' => 'Home', 'url' => 'index.php?page=home', 'active' => true],
    ['label' => 'About', 'url' => 'index.php?page=about'],
    ['label' => 'Treatment', 'url' => 'index.php?page=treatments'],
    ['label' => 'Doctors', 'url' => 'index.php?page=ourdoctors'],
    ['label' => 'Testimonial', 'url' => 'index.php?page=testimonials'],
    ['label' => 'Contact Us', 'url' => 'index.php?page=contact'],
];



//      ========================      slider  ================================




$sliderItems = [
    [
        'title' => 'Mico',
        'subtitle' => 'Hospital',
        'description' => 'When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'image' => 'images/slider-img.jpg',
        'url' => 'index.php?page=contact', // Link for "Contact Us"
    ],
    [
        'title' => 'Mico',
        'subtitle' => 'Hospital',
        'description' => 'When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'image' => 'images/slider-img.jpg',
        'url' => 'index.php?page=contact',
    ],
    [
        'title' => 'Mico',
        'subtitle' => 'Hospital',
        'description' => 'When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'image' => 'images/slider-img.jpg',
        'url' => 'index.php?page=contact',
    ],
];


//   ===================           treatments   =============


$treatments = [
    [
        "image" => "images/t1.png",
        "title" => "Nephrologist Care",
        "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        "link" => "#"
    ],
    [
        "image" => "images/t2.png",
        "title" => "Eye Care",
        "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        "link" => "#"
    ],
    [
        "image" => "images/t3.png",
        "title" => "Pediatrician Clinic",
        "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        "link" => "#"
    ],
    [
        "image" => "images/t4.png",
        "title" => "Parental Care",
        "description" => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        "link" => "#"
    ]
];








//             ==================   our doctors   =================



$doctors = [
    [
        "name" => "Hennry",
        "degree" => "MBBS",
        "image" => "images/team1.jpg",
        "social" => [
            "facebook" => "#",
            "twitter" => "#",
            "linkedin" => "#",
            "instagram" => "#"
        ]
    ],
    [
        "name" => "Jenni",
        "degree" => "MBBS",
        "image" => "images/team2.jpg",
        "social" => [
            "facebook" => "#",
            "twitter" => "#",
            "linkedin" => "#",
            "instagram" => "#"
        ]
    ],
    [
        "name" => "Morco",
        "degree" => "MBBS",
        "image" => "images/team3.jpg",
        "social" => [
            "facebook" => "#",
            "twitter" => "#",
            "linkedin" => "#",
            "instagram" => "#"
        ]
    ]
];



//        ===========================       testimonials    =====================




$testimonials = [
    [
        "name" => "Morijorch",
        "title" => "Default model text",
        "quote" => "Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy."
    ],
    [
        "name" => "Rochak",
        "title" => "Default model text",
        "quote" => "Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy."
    ],
    [
        "name" => "Brad Johns",
        "title" => "Default model text",
        "quote" => "Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy."
    ]
];


//================================       book appointment   ==================






?>