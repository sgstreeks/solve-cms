Set objFso = CreateObject("Scripting.FileSystemObject")
Set Folder = objFSO.GetFolder("C:\laravelprojects\solve\New folder")

For Each File In Folder.Files
    sNewFile = File.Name
    sNewFile = Replace(sNewFile,".create","")
    if (sNewFile<>File.Name) then 
        File.Move(File.ParentFolder+"\"+sNewFile)
    end if

Next