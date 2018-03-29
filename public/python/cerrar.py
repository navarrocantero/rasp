
import serial

arduino = serial.Serial('/dev/ttyUSB0', 9600,timeout=1)
arduino.write('1')
print(arduino.read())

arduino.close() #Finalizamos la comunicacion