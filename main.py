import RPi.GPIO as GPIO
from gpiozero import InputDevice
import json
import requests
import time
import sys
import board
import adafruit_dht
import psutil
from time import sleep


dht_device = adafruit_dht.DHT11(board.D4)

no_rain =InputDevice(18)

def getData():
    r = requests.get("http://getData.php")
    return (r.content).decode("utf-8")

def postData(lumen,temperature,rain):
    payload = {"lumen":lumen, "temperature":temperature, "rain":rain}
    r = requests.post("http://postData.php", payload)
    print((r.content).decode("utf-8"))

lumen=1

servoPIN = 21
GPIO.setmode(GPIO.BCM)
GPIO.setup(servoPIN, GPIO.OUT)

pwm=GPIO.PWM(servoPIN, 50)
pwm.start(0)

try:
    while True:
        try:
            temperature_c = dht_device.temperature
            print("Temp:{:.1f} C ".format(temperature_c))
        except RuntimeError as err:
            print(err.args[0])
            dht_device.exit()
        
        if not no_rain.is_active:
            print("Yağmur yağıyor")
            rain = 1    
        else:
            print("Yağmur yağmıyor")
            rain = 0
        sleep(2)
        
        postData(lumen,temperature_c,rain)
        
        jsonObj = getData()
        jsonArr = json.loads(jsonObj)
        sleep(1)
        fan = jsonArr[0]["fan"]
        window = jsonArr[0]["window"]
        light = jsonArr[0]["light"]
        print(fan , window, light)
        sleep(1)
        
        
        
        if(window =='1'):
            pwm.ChangeDutyCycle(11) 
            sleep(1)
        else:
            pwm.ChangeDutyCycle(1) 
            sleep(1)



        time.sleep(2.0)
except KeyboardInterrupt:
    dht_device.exit()


