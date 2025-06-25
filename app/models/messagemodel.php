<?php
require_once __DIR__ . '/../../config/config.php';

class messagemodel
{
    public function enregistrerMessage($nom, $email, $subject, $message)
    {
        global $pdo;
        $sql = "INSERT INTO contacts (name, email, subject, message, sent_at) VALUES (:name, :email, :subject, :message, NOW())";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':name' => $nom,
            ':email' => $email,
            ':subject' => $subject,
            ':message' => $message
        ]);
    }

    public function getAllMessages()
    {
        global $pdo;
        $sql = "SELECT * FROM contacts ORDER BY sent_at DESC";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteMessage($id)
    {
        global $pdo;
        $sql = "DELETE FROM contacts WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
    public function getMessageById($id)
    {
        global $pdo;
        $sql = "SELECT * FROM contacts WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function updateMessage($id, $nom, $email, $subject, $message)
    {
        global $pdo;
        $sql = "UPDATE contacts SET name = :name, email = :email, subject = :subject, message = :message WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':name' => $nom,
            ':email' => $email,
            ':subject' => $subject,
            ':message' => $message
        ]);
    }
    public function searchMessages($keyword)
    {
        global $pdo;
        $sql = "SELECT * FROM contacts WHERE name LIKE :keyword OR email LIKE :keyword OR subject LIKE :keyword OR message LIKE :keyword ORDER BY sent_at DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':keyword' => '%' . $keyword . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function countMessages()
    {
        global $pdo;
        $sql = "SELECT COUNT(*) FROM contacts";
        $stmt = $pdo->query($sql);
        return $stmt->fetchColumn();
    }
    public function countUnreadMessages()
    {
        global $pdo;
        $sql = "SELECT COUNT(*) FROM contacts WHERE is_read = 0";
        $stmt = $pdo->query($sql);
        return $stmt->fetchColumn();
    }
    public function markAsRead($id)
    {
        global $pdo;
        $sql = "UPDATE contacts SET is_read = 1 WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}
function getAllRows($pdo, $table)
{
    $sql = "SELECT * FROM `$table`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
