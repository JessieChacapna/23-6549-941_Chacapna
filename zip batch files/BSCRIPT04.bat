@echo off
setlocal enabledelayedexpansion

REM Create temporary folders for sorting
mkdir C:\TempSort
mkdir Z:\ArchivedFiles

REM Sort files by date and move older files to Z:\ArchivedFiles
forfiles /p C:\ /s /m . /D -30 /C "cmd /c move @file Z:\ArchivedFiles"

REM Sort archived files by size
for %%f in (Z:\ArchivedFiles\*) do (
    set size=%%~zf
    echo %%f %%size%
) | sort /+14 > Z:\ArchivedFiles\sorted_files.txt

REM Prompt user for permission to delete large files
echo The following are large files that are older than 30 days:
type Z:\ArchivedFiles\sorted_files.txt
set /p del_confirm=Do you want to delete these files? (Y/N): 

if /i "%del_confirm%"=="Y" (
    for /f "delims=" %%f in (Z:\ArchivedFiles\sorted_files.txt) do del "%%f"
    echo Files deleted.
) else (
    echo Files not deleted.
)

REM Clean up temporary folders
rmdir /s /q C:\TempSort
rmdir /s /q Z:\ArchivedFiles

echo Script completed.
pause