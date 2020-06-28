<!DOCTYPE html>
<html>
<head>
	<title>biodata</title>
	    <style type="text/css" media="screen">
        table {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;}
        input {font-family: Verdana, Arial, Helvetica, sans-serif;font-size: 11px;height: 20px;}
    </style>

</head>
<body>
<div style="border:0; padding:10px; width:760px; height:auto;">
<form action="data.php" method="POST" name="input-data">
    <table width="760" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr height="46">
                <td width="10%"> </td>
                <td width="25%"> </td>
                <td width="65%"><font color="orange" size="2">Form Biodata</font></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Ktp</td>
            <td><input type="text" name="Ktp" size="35" maxlength="12" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Nama</td>
            <td><input type="text" name="Nama" size="50" maxlength="30" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Kelamin</td>
            <td><select name="Kelamin">
                    <option value="-">- Pilih Kelamin -
                    <option value="Laki-Laki">Laki-Laki
                    <option value="Perempuan">Perempuan
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Agama</td>
            <td><select name="Agama">
                    <option value="-">- Pilih Agama -
                    <option value="Islam">Islam
                    <option value="Budha">Budha
                    <option value="Hindu">Hindu
                    <option value="Katolik">Katolik
                    <option value="Kristen">Kristen
                    <option value="Kong Hu Cu">Kong Hu Cu
                </select></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td>Komentar</td>
            <td><input type="text" name="Komentar" size="50" maxlength="50" /></td>
        </tr>
        <tr height="46">
            <td> </td>
            <td> </td>
            <td><input type="submit" name="Submit" value="Submit">   
                <input type="reset" name="reset" value="Cancel"></td>
        </tr>
    </table>
</form>
</div>

</body>
</html>