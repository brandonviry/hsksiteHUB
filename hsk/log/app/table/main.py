import js
from js import document
from sys import argv



def table(n):
	for i in range(10):
		print(str(i) + "*" + str(n) + "=" + str(i * n) , end=" ")

def tableDeAaB(A,B):
	for x in range(B):
		table(A)
		pyscript.write("ok")

tableDeAaB(1,10)
print("FIN")
