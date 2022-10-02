<h2>Cities</h2>

<h3>Hello <?= $first_name ?></h3>

<ul>
    <?php
    foreach ($cities as $city) {
        echo '<li>' . $city . '</li>';
    }
    ?>
</ul>