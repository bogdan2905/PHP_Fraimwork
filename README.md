# PHP_Fraimwork

## Install
add file ```config.php```

```
<?php
$CONFIG = [
    "host" => "localhost:3306",
    "dbname" => "mydb",
    "user" => "root",
    "password" => "password"
];

$APP_NAME = "app";

$TEMPLATES_NAME = "$APP_NAME/templates/";

$CACHES_PATH = $TEMPLATES_NAME . "cache/";

$SECRET_KEY = "e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855";


$ADMIN_CLASSES = [
    "Exams" => [
        "capture" => "Екзамени",
        "fields" => [
            "exam_id" => [
                "name" => "id",
                "type" => "number"
            ],
            "exam_name" => [
                "name" => "назва",
                "type" => "text"
            ]
        ]
    ],
    "Fp" => [
        "capture" => "Фізра",
        "fields" => [
            "fp_id" => [
                "name" => "id",
                "type" => "number"
            ],
            "fp_name" => [
                "name" => "fp",
                "type" => "text"
            ]
        ]
    ],
    "Students" => [
        "capture" => "Челики",
        "fields" => [
            "student_id" => [
                "name" => "id",
                "type" => "number"
            ],
            "name" => [
                "name" => "zvat",
                "type" => "text"
            ],
            "surname" => [
                "name" => "2name",
                "type" => "text"
            ]
        ]
    ]
];

$TYPES_INPUT =
    [
        "int(11)" => "number",
        "double" => '"number" step="0.01"',
        "decimal(16,2)" => '"number" step="0.01"',
        "decimal(18,2)" => '"number" step="0.01"',
        "float" => '"number" step="0.01"',
        "datetime" => '"datetime"',
        "varchar(255)" => '"text"',
        "varchar(45)" => '"text" maxlength="45"'
    ];


```
