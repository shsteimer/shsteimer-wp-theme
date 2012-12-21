@echo off
cd bin
del /s  /Q *.*
mkdir shsteimer
cd ..

cd less
start /b cmd /c lessc styles.less ../css/styles.css 
start /b cmd /c lessc --yui-compress styles.less ../css/styles.min.css

start /b cmd /c lessc responsive-styles.less ../css/responsive-styles.css 
start /b cmd /c lessc --yui-compress responsive-styles.less ../css/responsive-styles.min.css 
cd..

xcopy *.php bin\shsteimer\*
xcopy screenshot.png bin\shsteimer\
xcopy style.css bin\shsteimer\

xcopy css bin\shsteimer\css /s
xcopy js bin\shsteimer\js /s
xcopy img bin\shsteimer\img /s