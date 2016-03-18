@echo off
echo root: ACCESS
echo START 
::Renombre las extenciones de los archivos
ren *.tpl *.html
echo DONE
echo.

::Blocle sobre los subdirectorios
for /D %%v in (*) do (
   echo %%v: ACCESS
   cd %%v
   echo START 
   ren *.tpl *.html
   cd ..
   echo DONE
   echo.
)