
import serial
import time

arduino = serial.Serial('/dev/ttyUSB0', 9600)
time.sleep(2)
arduino.flush()
comando = ('A') #Input
arduino.write(comando) #Mandar un comando hacia Arduino
print("Comando a ejecutar... ")
print(arduino.read())
arduino.close() #Finalizamos la comunicacion
