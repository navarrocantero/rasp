
import serial

arduino = serial.Serial('/dev/cu.ttyUSB0', 9600,timeout=1)

print("Starting!")
comando = 'A'
arduino.write(comando)
print('LED APAGADO')

print(arduino.read())

arduino.close() #Finalizamos la comunicacion