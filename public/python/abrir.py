
import serial

arduino = serial.Serial('/dev/ttyUSB0', 9600,timeout=1)
arduino.write('0')
print(arduino.read())
arduino.close()