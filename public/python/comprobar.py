
import serial
import time

arduino = serial.Serial('/dev/ttyUSB0', 9600)
time.sleep(2)
arduino.flush()
comando = ('C') #Input
print("Comando mandado a arduino: ")
arduino.write(comando) #Mandar un comando hacia Arduino
print(arduino.read())
arduino.close() #Finalizamos la comunicacion