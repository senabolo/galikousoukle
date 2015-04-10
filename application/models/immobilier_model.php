<?php

if (!defined('BASEPATH'))
    exit('No direct script access
allowed');

/**
 * News_model
 *
 * ajouter_news($auteur, $titre, $contenu)
 * editer_news($id, $titre = null, $contenu = null)
 * supprimer_news($id)
 * count($where = array())
 * liste_news($nb = 10, $debut = 0)
 */
class Immobilier_model extends CI_Model {

    protected $table = 'personne';
    protected $table1 = 'immobilier';
    protected $tableQ = 'quartier';
    protected $tableV = 'ville';
    protected $tableP = 'pays';
    protected $tableTI = 'type_immobilier';

    /**
     * Ajoute une news.
     *
     * @param string $auteur L'auteur de la news
     * @param string $titre Le titre de la news
     * @param string $contenu Le contenu de la news
     * @return bool Le résultat de la requête
     */
    public function ajouter_agent($auteur, $titre, $contenu) {
        return $this->db->set('nom', $auteur)
                        ->set('prenom', $titre)
                        ->set('id_type_personne', 2)
                        ->set('login', $contenu)
                        ->set('mot_de_passe', 2)
                        ->set('nom_agence', $contenu)
                        ->set('email_1', $contenu)
                        ->set('email_2', $contenu)
                        ->set('numero_telephone1', false)
                        ->set('numero_telephone2', false)
                        ->insert($this->table);
    }

    public function ajouter_immobilier($nom, $prenom, $login, $passe, $nom_agence, $email_1, $email_2, $tel1, $tel2) {
        return $this->db->set('nom', $nom)
                        ->set('prenom', $prenom)
                        ->set('id_type_personne', 2)
                        ->set('login', $login)
                        ->set('mot_de_passe', $passe)
                        ->set('nom_agence', $nom_agence)
                        ->set('email_1', $email_1)
                        ->set('email_2', $email_2)
                        ->set('numero_telephone1', false)
                        ->set('numero_telephone2', false)
                        ->insert($this->table1);
    }

    /**
     * Retourne une liste de $nb dernière news.
     *
     * @param integer $nb Le nombre de news
     * @param integer $debut Nombre de news à sauter
     * @return objet La liste de news
     */
    public function liste_user($login, $passe) {
        return $this->db->select('*')
                        ->from($this->table)
                        ->where('login', $login)
                        ->where('mot_de_passe', $passe)
                        ->order_by('id', 'desc')
                        ->get()
                        ->result();
    }
    
    public function liste_type_immobilier() {
        return $this->db->select('*')
                        ->from($this->tableTI)
                        ->order_by('id', 'desc')
                        ->get()
                        ->result();
    }

    public function liste_marker() {
//        $sql = "SELECT latitude,longitude,description,photo,avance FROM immobilier WHERE id = 2";
        return $this->db->select('latitude,longitude,description,photo,avance')
                        ->from($this->table1)
                        ->order_by('id', 'desc')
                        ->get()
                        ->result();
    }
    
    public function liste_ville_pays() {
//        $sql = "SELECT latitude,longitude,description,photo,avance FROM immobilier WHERE id = 2";
        return $this->db->select('latitude,longitude,description,photo,avance')
                        ->from($this->table1)
                        ->order_by('id', 'desc')
                        ->get()
                        ->result();
    }
    
    public function liste_quartier() {
//        $sql = "SELECT latitude,longitude,description,photo,avance FROM immobilier WHERE id = 2";
        return $this->db->select('*')
                        ->from($this->tableQ)
                        ->order_by('id', 'desc')
                        ->get()
                        ->result();
    }

    public function recherche($login, $passe) {
        return $this->db->select('latitude, longitude')
                        ->from($this->table1)
                        ->where('login', $login)
                        ->where('mot_de_passe', $passe)
                        ->order_by('id', 'desc')
                        ->get()
                        ->result();
    }

}

/* End of file news_model.php */
/* Location: ./application/models/news_model.php */
