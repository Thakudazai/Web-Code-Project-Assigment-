<?php
// create index array
$it_subjects = [
    "C++",
    "Mathematics",
    "ITE",
    "CCNA1",
    "HTML",
    "JavaScript",
    "Database"
];

$it_subjects[] = "Web App Framework";
$it_subjects[] = "Java";
$it_subjects[] = "Mobile";
?>

<form action="" method="post">
    <select name="subject">
        <?php 
        foreach ($it_subjects as $subject) { 
            ?>
        <option value="<?php echo $subject; ?>">
            <?php echo $subject; ?>
        </option>
        <?php } ?>
    </select>

    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['subject'])) {
    echo "<p>Now u are learning: ". $_POST['subject'] . "</p>";
}
?>