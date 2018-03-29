
import serial

arduino = serial.Serial('/dev/ttyUSB0', 9600,timeout=1)
time.sleep(5)
arduino.write('C')
print(arduino.read())

arduino.close() #Finalizamos la comunicacion