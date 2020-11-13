import requests
import time
import serial

ser= serial.Serial('COM3', 9600);
time.sleep(2)

while(1):
	x = ser.readline()
	string_n = x.decode()
	Waarde = string_n.rstrip()
	print(Waarde)
	y = ser.readline()
	string_n = y.decode()
	ID = string_n.rstrip()
	print(ID)
	userdata = {"Waarde": Waarde, "ID": ID}
	resp = requests.post('https://11902804.pxl-ea-ict.be/Sensoren2.php', params=userdata)
ser.close()