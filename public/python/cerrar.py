
import serial

arduino = serial.Serial('/dev/cu.ttyUSB0', 9600,timeout=1)

print("Starting!")
comando = 'C'
arduino.write(comando)
print('CERRADo')

print(arduino.read())

arduino.close() #Finalizamos la comunicacion