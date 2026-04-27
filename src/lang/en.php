<?php

declare(strict_types=1);

// English interface translations.
// Templates request these strings through __('translation.key').
return [
    'meta' => [
        'app_name' => 'PHP Library',
    ],
    'nav' => [
        'home' => 'Home',
        'books' => 'Books',
        'available' => 'Available',
        'popular' => 'Popular',
        'stats' => 'Stats',
    ],
    'locale' => [
        'label' => 'Language',
        'ru' => 'Rus',
        'en' => 'Eng',
    ],
    'home' => [
        'eyebrow' => 'Learning Project',
        'title' => 'PHP MVC Learning Project',
        'description' => 'A small learning playground built with PHP, PostgreSQL and Eloquent ORM. It is a good place to practice routes, controllers, database queries and clean view rendering without framework overload.',
        'cards' => [
            'model' => [
                'title' => 'Model',
                'text' => '`Book` talks to the database through ORM, and `Library` keeps the app-level logic readable.',
            ],
            'controller' => [
                'title' => 'Controller',
                'text' => '`LibraryController` coordinates routes, data fetching and view rendering in one clear flow.',
            ],
            'view' => [
                'title' => 'View',
                'text' => 'Each page renders real data into simple templates, so it is easy to trace what arrives from the backend.',
            ],
            'practice' => [
                'title' => 'Practice',
                'text' => 'Try adding search, forms, validation and new stats pages to feel how MVC grows step by step.',
            ],
        ],
    ],
    'java_showcase' => [
        'eyebrow' => 'Java showcase',
        'title' => 'Java project: student grade analyzer',
        'description' => 'This landing-page tab explains a separate Java repository: what it does, how the data flows through the program, and which code fragments matter most.',
        'badge' => [
            'language' => 'Java / Console app',
            'topic' => 'Files, validation, statistics',
        ],
        'repo_link' => 'Open GitHub repository',
        'tabs' => [
            'overview' => 'Overview',
            'structure' => 'Structure',
            'functions' => 'Functions',
            'data' => 'Loops & data',
            'flow' => 'How it works',
            'code' => 'Code',
        ],
        'overview' => [
            'problem' => [
                'title' => 'What it solves',
                'text' => 'The program analyzes a folder with student txt files, collects grades by subject and builds a final report.',
            ],
            'input' => [
                'title' => 'What it takes as input',
                'text' => 'A folder path where each file is named after a student and contains lines in the form "subject - grade".',
            ],
            'output' => [
                'title' => 'What it outputs',
                'text' => 'The report is printed to the console and written to report.txt: average grades, best and worst student, and number of valid files.',
            ],
            'validation' => [
                'title' => 'What it validates',
                'text' => 'The file name should look like a full name, there should be at least five subjects, and every line must match the "subject - grade" format.',
            ],
        ],
        'flow' => [
            'step1' => [
                'title' => 'Read the folder path',
                'text' => 'The program starts by asking for a folder path and checking that it really exists and is a directory.',
            ],
            'step2' => [
                'title' => 'Prepare the report file',
                'text' => 'Then it creates or clears report.txt so the final output can be written into a fresh file.',
            ],
            'step3' => [
                'title' => 'Walk through the files',
                'text' => 'Next it iterates only over txt files, skips the report file itself, and validates every student file one by one.',
            ],
            'step4' => [
                'title' => 'Parse grades',
                'text' => 'Each line is checked with a regular expression, subjects are collected into a Map, and the student average is calculated.',
            ],
            'step5' => [
                'title' => 'Build the final report',
                'text' => 'After all files are processed, the program computes summary statistics, prints the report and saves it to disk.',
            ],
        ],
        'structure' => [
            'src' => [
                'title' => 'src folder',
                'text' => 'This folder contains the source code. In this repository the main logic is concentrated in one App.java file.',
            ],
            'bin' => [
                'title' => 'bin folder',
                'text' => 'This folder contains compiled .class files: the main class and the nested helper classes.',
            ],
            'jar' => [
                'title' => 'JAR file',
                'text' => 'HomeWork1.jar is the already built version of the program that can be run as a ready-made Java application.',
            ],
            'idea' => [
                'title' => 'Service folders',
                'text' => 'The .idea and .vscode folders store IDE settings and do not belong to the business logic of the program.',
            ],
        ],
        'functions' => [
            'main' => 'The main entry point. It controls the whole scenario: get the folder path, prepare the report, run the analysis and save the result.',
            'readFolderPath' => 'Reads the path from the console and checks that the user really entered an existing directory.',
            'analyzeFolder' => 'Walks through all txt files, collects valid students, subject statistics and invalid file messages.',
            'processFile' => 'Validates the file name as a full name, parses one student and merges the student grades into the global statistics.',
            'parseStudentFile' => 'Reads one file, validates each line, builds a subject Map and calculates the student average grade.',
            'readLines' => 'Reads all lines from the file. It first tries UTF-8 and then falls back to CP1251 if needed.',
            'buildReport' => 'Builds the final report text: averages by subject, best and worst students, and the list of invalid files.',
            'studentsWithAverage' => 'Selects all students with the requested average grade so ties are handled correctly.',
            'appendHelpers' => 'appendStudents and appendInvalidFiles add finished report blocks into the StringBuilder.',
            'ioHelpers' => 'rewriteFile writes the report to disk, while format2 formats floating-point values to two decimals.',
        ],
        'data' => [
            'collections' => [
                'title' => 'Which data structures are used',
                'text' => 'The project uses List and Map. List stores students and invalid files, while Map stores "subject -> grade" pairs and subject statistics.',
            ],
            'array_note' => [
                'title' => 'Why there are no arrays here',
                'text' => 'There are no classic arrays in this project. Instead, it uses Java collections such as ArrayList and LinkedHashMap.',
            ],
            'loop_files' => [
                'title' => 'Loop over files',
                'text' => 'This loop iterates over every txt file in the folder. If the file is the report itself, it gets skipped.',
            ],
            'loop_grades' => [
                'title' => 'Loop over one student grades',
                'text' => 'This loop takes every "subject -> grade" pair from one student and updates the global subject statistics.',
            ],
            'map_store' => [
                'title' => 'How values are stored in a Map',
                'text' => 'After line validation, the subject becomes the key and the grade becomes the value. This builds the student subject dictionary.',
            ],
            'streams' => [
                'title' => 'Where stream operations are used',
                'text' => 'Streams are used to calculate student averages and later to find the best and worst students.',
            ],
        ],
        'code' => [
            'legend' => [
                'comment' => 'Comments',
                'keyword' => 'Keywords',
                'string' => 'Strings',
                'type' => 'Types and classes',
            ],
            'card1' => [
                'title' => 'Main scenario',
                'text' => 'The main method shows a good linear workflow: get the path, prepare the report, run analysis, print and save the result.',
            ],
            'card2' => [
                'title' => 'Parsing one student',
                'text' => 'The parseStudentFile method validates lines, collects subjects and calculates the average grade for one student.',
            ],
            'card3' => [
                'title' => 'Why this code is useful to study',
                'text' => 'The project is compact, but it already contains regular expressions, file handling, collections, statistics aggregation and invalid-data protection.',
            ],
            'card4' => [
                'title' => 'Full code on the landing page',
                'text' => 'The full App.java file is shown below so the program can be studied as one complete example rather than only isolated fragments.',
            ],
        ],
    ],
    'books' => [
        'eyebrow' => 'Catalog',
        'title' => 'Books',
        'description' => 'All books currently stored in the project database.',
        'empty' => 'No books found yet.',
    ],
    'available' => [
        'eyebrow' => 'Filtered View',
        'title' => 'Available Books',
        'description' => 'Only books that are available right now are shown here.',
        'empty' => 'Every book is borrowed at the moment.',
    ],
    'popular' => [
        'eyebrow' => 'Ranking',
        'title' => 'Popular Books',
        'description' => 'Books ordered by borrow count from most popular to least popular.',
        'empty' => 'No popular books to show yet.',
    ],
    'stats' => [
        'eyebrow' => 'Analytics',
        'title' => 'Library Stats',
        'description' => 'A quick overview of what is happening inside the library right now.',
        'cards' => [
            'total_books' => [
                'title' => 'Total books',
                'text' => 'All catalog entries currently stored in the database.',
            ],
            'available_books' => [
                'title' => 'Available now',
                'text' => 'Books readers can borrow immediately.',
            ],
            'borrowed_books' => [
                'title' => 'Borrowed',
                'text' => 'Titles currently checked out from the library.',
            ],
            'total_borrows' => [
                'title' => 'Total borrows',
                'text' => 'The cumulative popularity score across all books.',
            ],
        ],
    ],
    'book' => [
        'published' => 'Published in',
        'borrows' => 'Borrows',
        'available_now' => 'Available now',
        'currently_borrowed' => 'Currently borrowed',
    ],
];
