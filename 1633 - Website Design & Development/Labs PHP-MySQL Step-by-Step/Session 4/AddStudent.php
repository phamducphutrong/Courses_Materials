<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>
    <?php
   
    ?>
    <form method="post" id="AddStudent">
    <table align="center" border="0px" cellpadding="1" cellspacing="1">
        <caption align="center"><b>Adding Student</b></caption>
        <tr>
            <td>Rollno</th>
            <td><input type="text" name="Rollno"/>(*)</td>
        </tr>
        <tr>
            <td>Student name</th>
            <td><input type="text" name="Stname"/>(*)</td>
        </tr>
        <tr>
            <td>Student Address</th>
            <td><input type="text" name="Address"/>(*)</td>
        </tr>
        <tr>
            <td>Student Email</th>
            <td><input type="text" name="Email"/>*</td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Add" name="btnAdd"/>
                <input type="reset" value="Cancel" name="btnCancel"/>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>