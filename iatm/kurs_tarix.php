

<option>Kursun tarixi</option>
<?PHP 
include('conf.php');
 $kurs_id= $_POST['kurs_id'];
$xeberler22=mysqli_QUERY($connection,'SELECT * from `kurs_date` where s_id=0 and kurs_cat="'.$kurs_id.'" ORDER BY ordering desc ');
while($xeberler=MYSQLI_FETCH_ARRAY($xeberler22))
{
	
?>
	<option value="<?PHP echo $xeberler['date']; ?>"><?PHP echo $xeberler['date']; ?></option>
<?PHP } ?>

