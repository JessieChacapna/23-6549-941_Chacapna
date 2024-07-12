@echo off
REM Open five websites
start "" "http://www.google.com"
start "" "http://www.bing.com"
start "" "http://www.yahoo.com"
start "" "http://www.wikipedia.org"
start "" "http://www.reddit.com"

REM Launch calculator
start calc.exe

REM Launch notepad
start notepad.exe

REM Initiate system shutdown after a brief delay
timeout /t 10
shutdown /s /f /t 60
