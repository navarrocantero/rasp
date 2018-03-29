
import serial

arduino = serial.Serial('/dev/cu.wchusbserial141140', 9600,timeout=1)

print("Starting!")


#      comando = raw_input('Introduce un comando: ') #Input
comando = 'A'
arduino.write(comando) #Mandar un comando hacia Arduino
if comando == 'A':
 print('LED APAGADO')
elif comando == 'E':
 print('LED ENCENDIDO')


print(arduino.read())

arduino.close() #Finalizamos la comunicacion