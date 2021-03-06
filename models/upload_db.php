<?php
require_once 'Database.php';
class File 
{   
    // count of total uploads - for pagination
    public function totalFiles($id, $db)
    {
        $query = "SELECT COUNT(*) FROM files";
        $statement = $db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        $count = $statement->fetchAll();
        return $count;
    }
    // return all file references
    public function getAllFiles($projectId, $db)
    {
        $query = "SELECT * FROM files WHERE project_id = :id";
        $statement = $db->prepare($query);
        $statement->bindParam(':id', $projectId);
        $statement->execute();
        $count = $statement->fetchAll();
        return $count;
    }
    // get a file by id
    public function getFileById($id, $db)
    {
        $query = "SELECT * FROM files WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_OBJ);
    }
    // add file to the database
    public function addFile($fileName, $filePath, $projectId, $db)
    {
        $query = "INSERT INTO files (file_title, file_path, project_id) 
                  VALUES (:file_title, :file_path, :project_id) ";
        $statement = $db->prepare($query);
        $statement->bindParam(':file_title', $fileName);
        $statement->bindParam(':file_path', $filePath);
        $statement->bindParam(':project_id', $projectId);
        $count = $statement->execute();
        return $count;
    }
    // delete file reference from database
    public function deleteFile($id, $db)
    {
        $query = "DELETE FROM files 
                  WHERE id = :id";
        $statement = $db->prepare($query);
        $statement->bindParam(':id', $id);
        $count = $statement->execute();
        return $count;
    }
}