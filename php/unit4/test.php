<?php
//create index array automatic
$it_subjects = ["C++", "Mathematics", "ITE", "CCNA1", "HTML", "JavaScript", "Database"];
//create index array manual
$it_subjects[7] = "Web App Framework";
$it_subjects[8] = "Java";
$it_subjects[9] = "Mobile";
//call array
// echo $it_subjects[2];
//កូដខាងក្រោមចាប់តម្លៃចេញពី Form
if(isset($_POST["subject"])){
    //ប្រកាសអថេរមួយឈ្មោះ subject ដើម្បីទទួលតម្លៃពី select option របស់ form
    $subject = $_POST["subject"];
    //ហៅអថេរ subject យកមកបង្ហាញ
    echo "You choose to learn " . $subject;
}
?>
<form action="" method="post">
    <select name="subject">
        <?php
        foreach ($it_subjects as $subject) {
        ?>
            <option value="<?php echo $subject; ?>"><?php echo $subject; ?></option>
        <?php
        }
        ?>
    </select>
    <input type="submit">
</form>