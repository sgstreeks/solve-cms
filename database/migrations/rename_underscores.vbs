Set objFso = CreateObject("Scripting.FileSystemObject")
Set Folder = objFSO.GetFolder("C:\laravelprojects\solve\database\migrations")

For Each File In Folder.Files
    sNewFile = File.Name
    sNewFile = Replace(sNewFile,".creates","s")
    if (sNewFile<>File.Name) then 
        File.Move(File.ParentFolder+"\"+sNewFile)
    end if

Next