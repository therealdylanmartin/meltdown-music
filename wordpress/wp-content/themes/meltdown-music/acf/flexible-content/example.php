<?php if (get_row_layout() == 'example'): ?>

<?php
$backgroundColor = get_sub_field('background_color');
$hasTitle = get_sub_field('has_title');
$title = get_sub_field('title');
$image = get_sub_field('image');
$repeater = get_sub_field('repeater');
?>

<section style="background-color:<?php echo $backgroundColor; ?>;">

    <?php if ($hasTitle): ?>
        <div>
            <h1><?php echo $title; ?></h1>
        </div>
    <?php endif; ?>

    <img src="<?php echo $image; ?>" alt="" />

    <ul>
        <?php
        $i = 0;

        while ($i < count($repeater)) { ?>
            <li><?php echo $repeater[$i]['text']; ?></li>
            <?php
            $i++;
        }
        ?>
    </ul>

</section>

<?php endif;