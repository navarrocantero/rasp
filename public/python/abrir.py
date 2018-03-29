
import serial

arduino = serial.Serial('/dev/ttyUSB0', 9600,timeout=1)
arduino.write('A')
print(arduino.read())

arduino.close()