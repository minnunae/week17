<?php
include("../auth.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Member</title>
</head>
<body>
<div>
<h2>ระบบสมาชิก</h2>
</div>
<div>
<a href="index.php">หน้าหลัก</a>&nbsp;
<a href="edit.php">แก้ไขข้อมูลส่วนตัว</a>&nbsp;
<a href="dashboard.php">กระดานสนทนา</a>&nbsp;
<a href="logout.php">Logout</a>
</div>

<div>
<?php
echo"ชื่อสมาชิก: ";
echo $_SESSION['username']."<br />";
echo "ชื่อ-สกุล ";
echo $_SESSION['name'];
?>
</div>

<div>
<hr />
ระบบสมาชิก &copy; แผนกวิชาเทคโนโลยีสารสนเทศ วท.ตราด
</div>
</body>
</html>