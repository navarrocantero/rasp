
import serial
import time

arduino = serial.Serial('/dev/ttyUSB0', 9600)
time.sleep(2)
arduino.flush()
comando = ('C') #Input
arduino.write(comando) #Mandar un comando hacia Arduino
arduino.close() #Finalizamos la comunicacion