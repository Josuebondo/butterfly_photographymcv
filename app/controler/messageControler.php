<?php
// /c:/xampp/htdocs/butterfly/controleur/contactCotroleur.php

require_once __DIR__ . '/../models/messagemodel.php';
require_once __DIR__ . '/../../core/controler.php';

class messageControler extends Controler
{
    public function index()
    {
        $this->view('admin/message');
    }

    public function envoyerMessage()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $subject = $_POST['subject'] ?? '';
            $message = $_POST['message'] ?? '';
        }
        // Validation simple
        if (empty($name) || empty($email) || empty($message)) {
            return ['success' => false, 'error' => 'Tous les champs sont obligatoires.'];
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['success' => false, 'error' => 'Adresse e-mail invalide.'];
        }
        if (strlen($message) < 10) {
            return ['success' => false, 'error' => 'Le message doit contenir au moins 10 caractères.'];
        }
        // Échapper les entrées pour éviter les injections SQL
        $name = htmlspecialchars(strip_tags($name));
        $email = htmlspecialchars(strip_tags($email));
        $subject = htmlspecialchars(strip_tags($subject));
        $message = htmlspecialchars(strip_tags($message));
        // Vérification de la longueur du sujet
        if (strlen($subject) > 255) {
            return ['success' => false, 'error' => 'Le sujet ne doit pas dépasser 255 caractères.'];
        }

        // Enregistrement dans la base de données
        $messagemodel = new messagemodel();
        $result = $messagemodel->enregistrerMessage($name, $email, $subject, $message);

        if ($result) {
            return ['success' => true, 'message' => 'Message envoyé avec succès.'];
        } else {
            return ['success' => false, 'error' => 'Erreur lors de l\'envoi du message.'];
        }
    }
}
