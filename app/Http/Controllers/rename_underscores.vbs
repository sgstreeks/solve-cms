Set objFso = CreateObject("Scripting.FileSystemObject")
Set Folder = objFSO.GetFolder("C:\laravelprojects\solve\app\Http\Controllers")

For Each File In Folder.Files
    sNewFile = File.Name
    sNewFile = Replace(sNewFile,".createController","Controller")
    if (sNewFile<>File.Name) then 
        File.Move(File.ParentFolder+"\"+sNewFile)
    end if

Next