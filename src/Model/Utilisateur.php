<?php


namespace src\Model;


class Utilisateur implements \JsonSerializable
{
    private $UID;
    private $MotDePasse;
    private $Nom;
    private $Prenom;
    private $DateInscription;
    private $Email;
    private $Titre;
    private $Description;
    private $Sexe;
    private $Ville;
    private $Telephone;

    private $Campus;
    private $Situation;
    private $Age;
    private $Attirance;
    private $ProfilImgName;
    private $ProfilImgRepo;
    private $Latitude;
    private $Longitude;


    /**
     * @return mixed
     */
    public function getUID()
    {
        return $this->UID;
    }

    /**
     * @param mixed $UID
     * @return Utilisateur
     */
    public function setUID($UID)
    {
        $this->UID = $UID;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     * @return Utilisateur
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->Prenom;
    }

    /**
     * @param mixed $Prenom
     * @return Utilisateur
     */
    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateInscription()
    {
        return $this->DateInscription;
    }

    /**
     * @param mixed $DateInscription
     * @return Utilisateur
     */
    public function setDateInscription($DateInscription)
    {
        $this->DateInscription = $DateInscription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param mixed $Email
     * @return Utilisateur
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     * @return Utilisateur
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->Sexe;
    }

    /**
     * @param mixed $Sexe
     * @return Utilisateur
     */
    public function setSexe($Sexe)
    {
        $this->Sexe = $Sexe;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->Telephone;
    }

    /**
     * @param mixed $Telephone
     * @return Utilisateur
     */
    public function setTelephone($Telephone)
    {
        $this->Telephone = $Telephone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * @param mixed $Titre
     * @return Utilisateur
     */
    public function setTitre($Titre)
    {
        $this->Titre = $Titre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param mixed $Latitude
     * @return Utilisateur
     */
    public function setLatitude($Latitude)
    {
        $this->Latitude = $Latitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param mixed $Longitude
     * @return Utilisateur
     */
    public function setLongitude($Longitude)
    {
        $this->Longitude = $Longitude;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->MotDePasse;
    }

    /**
     * @param mixed $MotDePasse
     * @return Utilisateur
     */
    public function setMotDePasse($MotDePasse)
    {
        $this->MotDePasse = $MotDePasse;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->Ville;
    }

    /**
     * @param mixed $Ville
     * @return Utilisateur
     */
    public function setVille($Ville)
    {
        $this->Ville = $Ville;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCampus()
    {
        return $this->Campus;
    }

    /**
     * @param mixed $Campus
     * @return Utilisateur
     */
    public function setCampus($Campus)
    {
        $this->Campus = $Campus;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSituation()
    {
        return $this->Situation;
    }

    /**
     * @param mixed $Situation
     * @return Utilisateur
     */
    public function setSituation($Situation)
    {
        $this->Situation = $Situation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->Age;
    }

    /**
     * @param mixed $Age
     * @return Utilisateur
     */
    public function setAge($Age)
    {
        $this->Age = $Age;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProfilImgName()
    {
        return $this->ProfilImgName;
    }

    /**
     * @param mixed $ProfilImgName
     * @return Utilisateur
     */
    public function setProfilImgName($ProfilImgName)
    {
        $this->ProfilImgName = $ProfilImgName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getProfilImgRepo()
    {
        return $this->ProfilImgRepo;
    }

    /**
     * @param mixed $ProfilImgRepo
     * @return Utilisateur
     */
    public function setProfilImgRepo($ProfilImgRepo)
    {
        $this->ProfilImgRepo = $ProfilImgRepo;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getAttirance()
    {
        return $this->Attirance;
    }

    /**
     * @param mixed $Attirance
     * @return Utilisateur
     */
    public function setAttirance($Attirance)
    {
        $this->Attirance = $Attirance;
        return $this;
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'UID' => $this->getUID(),
            'Password' => $this->getMotDePasse(),
            'Nom' => $this->getNom(),
            'Prenom' => $this->getPrenom(),
            'DateInscription' => $this->getDateInscription(),
            'Email' => $this->getEmail(),
            'Titre' => $this->getTitre(),
            'Description' => $this->getDescription(),
            'Sexe' => $this->getSexe(),
            'Ville' => $this->getVille(),
            'Telephone' => $this->getTelephone(),
            'Campus' => $this->getCampus(),
            'Situation' => $this->getSituation(),
            'Age' => $this->getAge(),
            'Attirance' => $this->getAttirance(),
            'ProfilImgName' => $this->getProfilImgName(),
            'ProfilImgRepo' => $this->getProfilImgRepo(),
            'Latitude' => $this->getLatitude(),
            'Longitude' => $this->getLatitude()
        ];
    }


    public function SqlAdd(\PDO $bdd)
    {
        try {
            $requete = $bdd->prepare('INSERT INTO T_UTILISATEUR 
                (UTI_NOM, UTI_PRENOM, UTI_DATE_INSCRIPTION, UTI_EMAIL, UTI_TITRE, UTI_DESCRIPTION, UTI_SEXE, UTI_VILLE, UTI_TEL, UTI_MDP, UTI_CAMPUS, UTI_SITUATION, UTI_ATTIRANCE, UTI_IMAGE_NOM, UTI_IMAGE_LIEN, UTI_POS_LAT, UTI_POS_LONG)
                VALUES(:Nom, :Prenom, :DateInscription, :Email, :Titre, :Description, :Sexe, :Ville, :Telephone, :Mdp, :Campus, :Situation, :Attirance, :ProfilImgName, :ProfilImgRepo, :Latitude, :Longitude)');
            $requete->execute([
                'Nom' => $this->getNom(),
                'Prenom' => $this->getPrenom(),
                'DateInscription' => $this->getDateInscription(),
                'Email' => $this->getEmail(),
                'Titre' => $this->getTitre(),
                'Description' => $this->getDescription(),
                'Sexe' => $this->getSexe(),
                'Ville' => $this->getVille(),
                'Telephone' => $this->getTelephone(),
                'Mdp' => $this->getMotDePasse(),
                'Campus' => $this->getCampus(),
                'Situation' => $this->getSituation(),
                'Attirance' => $this->getAttirance(),
                'ProfilImgName' => $this->getCampus(),
                'ProfilImgRepo' => $this->getCampus(),
                'Latitude' => $this->getLatitude(),
                'Longitude' => $this->getLongitude(),

            ]);
            return array("result" => true, "message" => $bdd->lastInsertId());
        } catch (\Exception $e) {
            return array("result" => false, "message" => $e->getMessage());
        }

    }

    public function SqlGetAll(\PDO $bdd)
    {
        $query = $bdd->prepare('SELECT * FROM T_UTILISATEUR');
        $query->execute();
        $arrayUser = $query->fetchAll();

        $listUser = [];
        foreach ($arrayUser as $userSQL) {
            $user = new Utilisateur();
            $user->setUID($userSQL['ID_UTILISATEUR'])
                ->setMotDePasse($userSQL['UTI_MDP'])
                ->setNom($userSQL['UTI_NOM'])
                ->setPrenom($userSQL['UTI_PRENOM'])
                ->setDateInscription($userSQL['UTI_DATE_INSCRIPTION'])
                ->setEmail($userSQL['UTI_EMAIL'])
                ->setTitre($userSQL['UTI_TITRE'])
                ->setDescription($userSQL['UTI_DESCRIPTION'])
                ->setSexe($userSQL['UTI_SEXE'])
                ->setVille($userSQL['UTI_VILLE'])
                ->setTelephone($userSQL['UTI_TEL'])
                ->setCampus($userSQL['UTI_CAMPUS'])
                ->setSituation($userSQL['UTI_SITUATION'])
                ->setAge($userSQL['UTI_AGE'])
                ->setAttirance($userSQL['UTI_ATTIRANCE'])
                ->setProfilImgName($userSQL['UTI_IMAGE_NOM'])
                ->setProfilImgRepo($userSQL['UTI_IMAGE_LIEN'])
                ->setLatitude($userSQL['UTI_POS_LAT'])
                ->setLongitude($userSQL['UTI_POS_LONG']);

            $listUser[] = $user;
        }
        return $listUser;
    }

    public function SqlGet(\PDO $bdd, $id)
    {
        $query = $bdd->prepare('SELECT * FROM T_UTILISATEUR WHERE ID_UTILISATEUR =:ID');
        $query->execute(['ID' => $id]);
        $userSQL = $query->fetch();

        $user = new Utilisateur();
        $user->setUID($userSQL['ID_UTILISATEUR'])
            ->setMotDePasse($userSQL['UTI_MDP'])
            ->setNom($userSQL['UTI_NOM'])
            ->setPrenom($userSQL['UTI_PRENOM'])
            ->setDateInscription($userSQL['UTI_DATE_INSCRIPTION'])
            ->setEmail($userSQL['UTI_EMAIL'])
            ->setTitre($userSQL['UTI_TITRE'])
            ->setDescription($userSQL['UTI_DESCRIPTION'])
            ->setSexe($userSQL['UTI_SEXE'])
            ->setVille($userSQL['UTI_VILLE'])
            ->setTelephone($userSQL['UTI_TEL'])
            ->setCampus($userSQL['UTI_CAMPUS'])
            ->setSituation($userSQL['UTI_SITUATION'])
            ->setAge($userSQL['UTI_AGE'])
            ->setAttirance($userSQL['UTI_ATTIRANCE'])
            ->setProfilImgName($userSQL['UTI_IMAGE_NOM'])
            ->setProfilImgRepo($userSQL['UTI_IMAGE_LIEN'])
            ->setLatitude($userSQL['UTI_POS_LAT'])
            ->setLongitude($userSQL['UTI_POS_LONG']);

        return $user;
    }

    public function SqlGetBy(\PDO $bdd, $SQL, $id)
    {
        $query = $bdd->prepare($SQL);
        $query->execute([
            'Search' => $id
        ]);
        $arrayUser = $query->fetchAll();

        $listUser = [];
        foreach ($arrayUser as $userSQL) {
            $user = new Utilisateur();
            $user->setUID($userSQL['ID_UTILISATEUR'])
                ->setMotDePasse($userSQL['UTI_MDP'])
                ->setNom($userSQL['UTI_NOM'])
                ->setPrenom($userSQL['UTI_PRENOM'])
                ->setDateInscription($userSQL['UTI_DATE_INSCRIPTION'])
                ->setEmail($userSQL['UTI_EMAIL'])
                ->setTitre($userSQL['UTI_TITRE'])
                ->setDescription($userSQL['UTI_DESCRIPTION'])
                ->setSexe($userSQL['UTI_SEXE'])
                ->setVille($userSQL['UTI_VILLE'])
                ->setTelephone($userSQL['UTI_TEL'])
                ->setCampus($userSQL['UTI_CAMPUS'])
                ->setSituation($userSQL['UTI_SITUATION'])
                ->setAge($userSQL['UTI_AGE'])
                ->setAttirance($userSQL['UTI_ATTIRANCE'])
                ->setProfilImgName($userSQL['UTI_IMAGE_NOM'])
                ->setProfilImgRepo($userSQL['UTI_IMAGE_LIEN'])
                ->setLatitude($userSQL['UTI_POS_LAT'])
                ->setLongitude($userSQL['UTI_POS_LONG']);

            $listUser[] = $user;
        }
        $listUser == null ? $isEmpty = true : $isEmpty = false;
        return $listUser = array("list" => $listUser, "isEmpty" => $isEmpty);
    }
}