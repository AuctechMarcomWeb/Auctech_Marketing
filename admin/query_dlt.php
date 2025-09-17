<?php
if(isset($_POST['delete']))
{
   include '../db_con.php';
   $user_id =$_POST['user_id'];

   $del_que ="delete from query_form where id =$user_id";
   mysqli_query($con,$del_que);

?>

<script>
    alert('Data deleted successfully!');
    window.location='querylist';
</script>

<?php
}
else
{
    header('location:querylist');
}
?>