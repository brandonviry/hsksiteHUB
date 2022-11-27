<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>table</title>

<link rel="stylesheet" href="https://pyscript.net/alpha/pyscript.css" />
<script defer src="https://pyscript.net/alpha/pyscript.js"></script> 
</head>
<body>

<py-script >

def table(n):
	for i in range(10):
		print(str(i) + "*" + str(n) + "=" + str(i * n) , end=" ")

def tableDeAaB(A,B):
	for x in range(B):
		table(A)
		

tableDeAaB(1,10)
print("FIN")

</py-script>
	
</body>
</html>