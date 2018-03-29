
import serial

arduino = serial.Serial('/dev/ttyUSB0', 9600,timeout=1)

print("Starting!")
comando = 'C'
arduino.write(comando) 

print(arduino.read())

arduino.close() #Finalizamos la comunicacion