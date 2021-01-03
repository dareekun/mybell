#!/bin/sh
# launcher.sh
# navigate to home directory, then this, execute python script and back to home dir

cd /
cd /home/pi/newbell
sudo php artisan serve --port=80
sudo python3 a.py
cd /
