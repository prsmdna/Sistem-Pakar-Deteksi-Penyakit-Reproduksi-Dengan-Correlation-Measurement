<!DOCTYPE html>
<html>
<head>

</head>
<body>
<td>

<form action="" method="GET">
<input type="checkbox" name="G1"  ></td>
        <?php if(isset($_GET['G1'])) {
          echo "<script>
        alert('okee');
        </script>"; 
          } else{
            echo "gak bisa";
          }?>
<button type="submit">submit</button>
</form>
</body>
</html>