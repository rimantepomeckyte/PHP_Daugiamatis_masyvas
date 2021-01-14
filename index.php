<?php
$data = [
    "Products" => [
        "IT" => [
        "MacBook",
        "USB hub",
        "Keyboard"
    ],
        "Other" =>[
            "Samsung Galaxy",
            "Apple watch"
            ]
        ],
    "Service" => [
        "IT" => [
            "Web development",
            "Web design"
        ],
        "Business" => [
            "Company registration",
            "SEO optimization"
        ]
    ]];
?>

<ul>
    <?php foreach ($data as $key => $value):?>
    <li><span><?=$key;?></span><?=value;?>
        <ul>
            <li></li>
        </ul>
    </li>
    <?php endforeach;?>
</ul>
