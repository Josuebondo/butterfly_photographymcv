<?php
require_once __DIR__ . '/../../config/config.php';
require_once __DIR__ . '/../../core/model.php';

class galleryModel
{
    protected $pdo;

    public function __construct()
    {
        // Assuming $pdo is defined in config.php or you need to create a new PDO instance here
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAllphotos()
    {
        $stmt = $this->pdo->query('SELECT * FROM photos');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getClientPhotos($clientId)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM photos WHERE client_id = :client_id');
        $stmt->bindParam(':client_id', $clientId);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPhotoById($id)
    {
        $stmt = $this->pdo->prepare('SELECT * FROM photos WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createPhoto($data)
    {
        $this->query('INSERT INTO photos (name, description) VALUES (:name, :description)');
        $this->bind(':name', $data['name']);
        $this->bind(':description', $data['description']);
        return $this->execute();
    }
}