<?php
$data = [
    "products" => [
        "IT" => [
        "MacBook",
        "USB hub",
        "Keyboard"
    ],
        "other" =>[
            "Samsung Galaxy",
            "Apple watch"
            ]
        ],
    "service" => [
        "iT" => [
            "Web development",
            "Web design"
        ],
        "business" => [
            "Company registration",
            "SEO optimization"
        ]
    ]];
$value=[];
?>

<ul>
    <?php foreach ($data as $key => $category):?>
    <li><strong><?=ucfirst($key);?></strong>: <!-- ucfirst pasako kad pirma raide didzioji turi buti , nes masyvo duomenis turi mazoiosmis raidemis parasytas -->
        <ul>
            <?php foreach ($category as $type => $subcategory):?>
            <li><?=ucfirst($type);?>:
                <ul>
                    <?php foreach($subcategory as $value):?>
                    <li><?=$value;?></li>
                    <?php endforeach;?>
                </ul>
                <?php endforeach;?>
        </ul>
    </li>
    <?php endforeach;?>
</ul>
