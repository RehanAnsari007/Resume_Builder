<!DOCTYPE html>
<html>
<head>
	<title>Resume Applications</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/jpg" href="../images/gethired.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
			<label for="chk" aria-hidden="true">Resume List</label>
			<input type="text" name="" placeholder="Search..." id="myInput" onkeyup="searchFun()">
				<div class="table100">
					<table class="w3-table-all" id="ResumeTable">
						<thead>
							<tr class="table100-head">
								<th class="column1">ID</th>
								<th class="column2">Name</th>
								<th class="column3">E-mail</th>
								<th class="column4">City</th>
								<th class="column5">occupation</th>
								<th class="column6">Profile</th>
								
								
							</tr>
						</thead>
						<tbody>
								<?php  
								include 'conn.php';
					
			$selectquery = "select * from resumedetail";
			$query = mysqli_query($conn,$selectquery);
			//$result = mysqli_fetch_array($query);

			while($result = mysqli_fetch_array($query)){
			?>
			<tr onclick="window.location='Resume-Design/index.php?id=<?php  echo $result['ID'];   ?>';">
			
				<td> <?php     echo $result['ID'];     ?>  </td>
				<td> <?php     echo $result['name'];     ?>  </td>
				<td> <?php     echo $result['email'];     ?>  </td>
				<td> <?php     echo $result['city'];     ?>  </td>
				<td> <?php     echo $result['studies'];     ?>  </td>
				<td> <img src="../Resume Page/<?php     echo $result['profilepic'];     ?>"  width="100" height="100"  ></td>
			</tr>
			<?php
			}
			?>		
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<script>  
	
	const searchFun = () =>{
    let filter = document.getElementById('myInput').value.toUpperCase();
    let myTable = document.getElementById('ResumeTable');
    let tr = document.getElementsByTagName('tr');
    for (var i=0; i<tr.length;  i++){

        let td = tr[i].getElementsByTagName('td')[3];
        if(td){
            let textvalue = td.textContent || td.innerHTML;
            if(textvalue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            }else{
                tr[i].style.display = "none";
            }
        }


    }
}
	</script>
<script>
        window.onload = () => {
            console.log(document.querySelector("#emp-table > tbody > tr:nth-child(1) > td:nth-child(2) ").innerHTML);
        };

        getUniqueValuesFromColumn()
        
    </script>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>