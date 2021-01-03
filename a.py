import pygame
import time 
import datetime
import play_sound

print("TEST APLIKASI")

#Suara 1
with open('/home/pi/public/schedule/PLAY_1.txt', 'r') as ins:
    Time1 = []
    for line in ins:
        Time1.append(line[:6])
with open('/home/pi/public/schedule/Friday_1.txt', 'r') as ins:
    Friday1 = []
    for line in ins:
        Friday1.append(line[:6])           
#Suara 2 
with open('/home/pi/public/schedule/PLAY_2.txt', 'r') as ins:
    Time2 = []
    for line in ins:
        Time2.append(line[:6])
with open('/home/pi/public/schedule/Friday_2.txt', 'r') as ins:
    Friday2 = []
    for line in ins:
        Friday2.append(line[:6])           
#Suara 3         
with open('/home/pi/public/schedule/PLAY_3.txt', 'r') as ins:
    Time3 = []
    for line in ins:
        Time3.append(line[:6])
with open('/home/pi/public/schedule/Friday_3.txt', 'r') as ins:
    Friday3 = []
    for line in ins:
        Friday3.append(line[:6])           
#Suara 4          
with open('/home/pi/public/schedule/PLAY_4.txt', 'r') as ins:
    Time4 = []
    for line in ins:
        Time4.append(line[:6])
with open('/home/pi/public/schedule/Friday_4.txt', 'r') as ins:
    Friday4 = []
    for line in ins:
        Friday4.append(line[:6])  
#Suara 5        
with open('/home/pi/public/schedule/PLAY_5.txt', 'r') as ins:
    Time5 = []
    for line in ins:
        Time5.append(line[:6])   
with open('/home/pi/public/schedule/Friday_5.txt', 'r') as ins:
    Friday5 = []
    for line in ins:
        Friday5.append(line[:6])   
#Suara 6
with open('/home/pi/public/schedule/PLAY_6.txt', 'r') as ins:
    Time6 = []
    for line in ins:
        Time6.append(line[:6])         
#Suara 7 
with open('/home/pi/public/schedule/PLAY_7.txt', 'r') as ins:
    Time7 = []
    for line in ins:
        Time7.append(line[:6])        
#Suara 8         
with open('/home/pi/public/schedule/PLAY_8.txt', 'r') as ins:
    Time8 = []
    for line in ins:
        Time8.append(line[:6])        
#Suara 9         
with open('/home/pi/public/schedule/PLAY_9.txt', 'r') as ins:
    Time9 = []
    for line in ins:
        Time9.append(line[:6])
#Suara 10        
with open('/home/pi/public/schedule/PLAY_10.txt', 'r') as ins:
    Time10 = []
    for line in ins:
        Time10.append(line[:6])   
#Suara 11
with open('/home/pi/public/schedule/PLAY_11.txt', 'r') as ins:
    Time11 = []
    for line in ins:
        Time11.append(line[:6])    
#Suara 12 
with open('/home/pi/public/schedule/PLAY_12.txt', 'r') as ins:
    Time12 = []
    for line in ins:
        Time12.append(line[:6])       
#Suara 13         
with open('/home/pi/public/schedule/PLAY_13.txt', 'r') as ins:
    Time13 = []
    for line in ins:
        Time13.append(line[:6])        
#Suara 14          
with open('/home/pi/public/schedule/PLAY_14.txt', 'r') as ins:
    Time14 = []
    for line in ins:
        Time14.append(line[:6])
#Suara 15        
with open('/home/pi/public/schedule/PLAY_15.txt', 'r') as ins:
    Time15 = []
    for line in ins:
        Time15.append(line[:6])           
        
Time1 = list(map(str, Time1))
Friday1 = list(map(str, Friday1))
Time2 = list(map(str, Time2))
Friday2 = list(map(str, Friday2))
Time3 = list(map(str, Time3))
Friday3 = list(map(str, Friday3))
Time4 = list(map(str, Time4))
Friday4 = list(map(str, Friday4))
Time5 = list(map(str, Time5))
Friday5 = list(map(str, Friday5))
Time6 = list(map(str, Time6))
Time7 = list(map(str, Time7))
Time8 = list(map(str, Time8))
Time9 = list(map(str, Time9))
Time10 = list(map(str, Time10))
Time11 = list(map(str, Time11))
Time12 = list(map(str, Time12))
Time13 = list(map(str, Time13))
Time14 = list(map(str, Time14))
Time15 = list(map(str, Time15))


exc = open('/home/pi/public/schedule/exclude.txt', 'r')  
isi = exc.read()

date = time.strftime("%d%m%Y")
day  = time.strftime("%A")
    
while True:
    curr_time = str(time.strftime("%H%M%S"))
    # sound the bell when bell time is reached
    if curr_time in Time1 and day != 'Friday' and day != 'Sunday' :
        play_sound.PLAY_1()
    if curr_time in Friday1 and day == 'Friday':
        play_sound.PLAY_1() 
    if curr_time in Time2 and day != 'Friday' and day != 'Sunday' :
        play_sound.PLAY_2()
    if curr_time in Friday2 and day == 'Friday':
        play_sound.PLAY_2()     
    if curr_time in Time3 and day != 'Friday' and day != 'Sunday' :
        play_sound.PLAY_3()
    if curr_time in Friday3 and day == 'Friday':
        play_sound.PLAY_3() 
    if curr_time in Time4 and day != 'Friday' and day != 'Sunday' :
        play_sound.PLAY_4()
    if curr_time in Friday4 and day == 'Friday':
        play_sound.PLAY_4() 
    if curr_time in Time5 and day != 'Friday' and day != 'Sunday' :
        play_sound.PLAY_5()  
    if curr_time in Friday5 and day == 'Friday':
        play_sound.PLAY_5()         
    if curr_time in Time6 and day != 'Sunday' :
        play_sound.PLAY_6()
    if curr_time in Time7 and day != 'Sunday' :
        play_sound.PLAY_7()  
    if curr_time in Time8 and day != 'Sunday' :
        play_sound.PLAY_8()
    if curr_time in Time9 and day != 'Sunday' :
        play_sound.PLAY_9()
    if curr_time in Time10 and day != 'Sunday' :
        play_sound.PLAY_10()  
    if curr_time in Time11 and day != 'Sunday' and date != isi:
        play_sound.PLAY_11()
    if curr_time in Time12 and day != 'Sunday' and date != isi:
        play_sound.PLAY_12()  
    if curr_time in Time13 and day != 'Sunday' and date != isi:
        play_sound.PLAY_13()
    if curr_time in Time14 and day != 'Sunday' and date != isi:
        play_sound.PLAY_14()
    if curr_time in Time15 and day != 'Sunday' and date != isi:
        play_sound.PLAY_15()  