<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210418154742 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE acceptation_reservation (id INT AUTO_INCREMENT NOT NULL, client INT DEFAULT NULL, reservation INT DEFAULT NULL, acceptee TINYINT(1) DEFAULT NULL, INDEX client (client), INDEX reservation (reservation), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, designation VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competition (id INT AUTO_INCREMENT NOT NULL, categorie INT DEFAULT NULL, complexe INT DEFAULT NULL, designation VARCHAR(100) NOT NULL, date_creation DATETIME NOT NULL, date_debut DATETIME NOT NULL, nbre_equipes INT NOT NULL, prix_participation NUMERIC(10, 0) NOT NULL, INDEX categorie (categorie), INDEX competition_ibfk_2 (complexe), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipe (id INT AUTO_INCREMENT NOT NULL, capitain INT DEFAULT NULL, nom VARCHAR(100) DEFAULT NULL, nbre_joueur INT NOT NULL, logo VARCHAR(100) NOT NULL, INDEX capitain (capitain), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE invitation (id INT AUTO_INCREMENT NOT NULL, utilisateur INT DEFAULT NULL, type VARCHAR(200) NOT NULL, equipe INT NOT NULL, valide INT NOT NULL, INDEX equipe (equipe), INDEX utilisateur (utilisateur), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matche (id INT AUTO_INCREMENT NOT NULL, equipe1 INT DEFAULT NULL, equipe2 INT DEFAULT NULL, terrain INT DEFAULT NULL, niveau_competition INT DEFAULT NULL, date_creation DATETIME NOT NULL, date_match DATETIME NOT NULL, resultat_eq1 INT DEFAULT NULL, resultat_eq2 INT DEFAULT NULL, valide TINYINT(1) DEFAULT NULL, arbitre INT DEFAULT NULL, INDEX arbitre (arbitre), INDEX terrain (terrain), INDEX equipe1 (equipe1), INDEX equipe2 (equipe2), INDEX niveau_competition (niveau_competition), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau_competition (id INT AUTO_INCREMENT NOT NULL, competition INT DEFAULT NULL, designation VARCHAR(100) NOT NULL, date_debut DATETIME NOT NULL, INDEX competition (competition), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE participation (id INT AUTO_INCREMENT NOT NULL, competition INT DEFAULT NULL, equipe INT DEFAULT NULL, date DATETIME NOT NULL, INDEX competition (competition), INDEX equipe (equipe), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE penalite (id INT AUTO_INCREMENT NOT NULL, complexe INT DEFAULT NULL, designation VARCHAR(30) NOT NULL, nbre_points_retires INT NOT NULL, INDEX penalite_ibfk_1 (complexe), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE penalite_joueur (id INT AUTO_INCREMENT NOT NULL, arbitre INT DEFAULT NULL, joueur INT DEFAULT NULL, matche INT DEFAULT NULL, penalite INT DEFAULT NULL, heure TIME NOT NULL, INDEX arbitre (arbitre), INDEX joueur (joueur), INDEX matche (matche), INDEX penalite (penalite), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, reference INT NOT NULL, name VARCHAR(50) NOT NULL, image VARCHAR(500) NOT NULL, price DOUBLE PRECISION NOT NULL, quantite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, client INT DEFAULT NULL, terrain INT DEFAULT NULL, date_creation DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, date_reservation DATE NOT NULL, heure TIME NOT NULL, validee TINYINT(1) NOT NULL, montant DOUBLE PRECISION NOT NULL, acceptee TINYINT(1) NOT NULL, INDEX client (client), INDEX terrain (terrain), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student (id INT AUTO_INCREMENT NOT NULL, nsc VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE terrain (id INT AUTO_INCREMENT NOT NULL, complexe INT DEFAULT NULL, categorie INT DEFAULT NULL, designation VARCHAR(50) NOT NULL, description TEXT DEFAULT NULL, ville VARCHAR(50) NOT NULL, adresse VARCHAR(100) NOT NULL, image VARCHAR(100) DEFAULT NULL, disponible TINYINT(1) DEFAULT \'1\' NOT NULL, prix_location DOUBLE PRECISION NOT NULL, heure_ouverture TIME NOT NULL, heure_fermeture TIME NOT NULL, created_at DATETIME DEFAULT CURRENT_TIMESTAMP, INDEX categorie (categorie), INDEX complexe (complexe), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, equipe_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, raison_sociale VARCHAR(255) NOT NULL, matricule_fiscale VARCHAR(255) NOT NULL, solde_point INT NOT NULL, position VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, position_equipe INT NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_1D1C63B3E7927C74 (email), INDEX IDX_1D1C63B3BCF5E72D (categorie_id), INDEX IDX_1D1C63B36D861B89 (equipe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE acceptation_reservation ADD CONSTRAINT FK_B1460E66C7440455 FOREIGN KEY (client) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE acceptation_reservation ADD CONSTRAINT FK_B1460E6642C84955 FOREIGN KEY (reservation) REFERENCES reservation (id)');
        $this->addSql('ALTER TABLE competition ADD CONSTRAINT FK_B50A2CB1497DD634 FOREIGN KEY (categorie) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE competition ADD CONSTRAINT FK_B50A2CB1EED29F2F FOREIGN KEY (complexe) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA153AFA2DF0 FOREIGN KEY (capitain) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE invitation ADD CONSTRAINT FK_F11D61A21D1C63B3 FOREIGN KEY (utilisateur) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE matche ADD CONSTRAINT FK_9FCAD510EE2542E6 FOREIGN KEY (equipe1) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE matche ADD CONSTRAINT FK_9FCAD510772C135C FOREIGN KEY (equipe2) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE matche ADD CONSTRAINT FK_9FCAD510C87653B1 FOREIGN KEY (terrain) REFERENCES terrain (id)');
        $this->addSql('ALTER TABLE matche ADD CONSTRAINT FK_9FCAD510508B1E3A FOREIGN KEY (niveau_competition) REFERENCES niveau_competition (id)');
        $this->addSql('ALTER TABLE niveau_competition ADD CONSTRAINT FK_508B1E3AB50A2CB1 FOREIGN KEY (competition) REFERENCES competition (id)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24FB50A2CB1 FOREIGN KEY (competition) REFERENCES competition (id)');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F2449BA15 FOREIGN KEY (equipe) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE penalite ADD CONSTRAINT FK_C62D8C5DEED29F2F FOREIGN KEY (complexe) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE penalite_joueur ADD CONSTRAINT FK_454548FD20B2E66E FOREIGN KEY (arbitre) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE penalite_joueur ADD CONSTRAINT FK_454548FDFD71A9C5 FOREIGN KEY (joueur) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE penalite_joueur ADD CONSTRAINT FK_454548FD9FCAD510 FOREIGN KEY (matche) REFERENCES matche (id)');
        $this->addSql('ALTER TABLE penalite_joueur ADD CONSTRAINT FK_454548FDC62D8C5D FOREIGN KEY (penalite) REFERENCES penalite (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C7440455 FOREIGN KEY (client) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C87653B1 FOREIGN KEY (terrain) REFERENCES terrain (id)');
        $this->addSql('ALTER TABLE terrain ADD CONSTRAINT FK_C87653B1EED29F2F FOREIGN KEY (complexe) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE terrain ADD CONSTRAINT FK_C87653B1497DD634 FOREIGN KEY (categorie) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B36D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competition DROP FOREIGN KEY FK_B50A2CB1497DD634');
        $this->addSql('ALTER TABLE terrain DROP FOREIGN KEY FK_C87653B1497DD634');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3BCF5E72D');
        $this->addSql('ALTER TABLE niveau_competition DROP FOREIGN KEY FK_508B1E3AB50A2CB1');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24FB50A2CB1');
        $this->addSql('ALTER TABLE matche DROP FOREIGN KEY FK_9FCAD510EE2542E6');
        $this->addSql('ALTER TABLE matche DROP FOREIGN KEY FK_9FCAD510772C135C');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F2449BA15');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B36D861B89');
        $this->addSql('ALTER TABLE penalite_joueur DROP FOREIGN KEY FK_454548FD9FCAD510');
        $this->addSql('ALTER TABLE matche DROP FOREIGN KEY FK_9FCAD510508B1E3A');
        $this->addSql('ALTER TABLE penalite_joueur DROP FOREIGN KEY FK_454548FDC62D8C5D');
        $this->addSql('ALTER TABLE acceptation_reservation DROP FOREIGN KEY FK_B1460E6642C84955');
        $this->addSql('ALTER TABLE matche DROP FOREIGN KEY FK_9FCAD510C87653B1');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C87653B1');
        $this->addSql('ALTER TABLE acceptation_reservation DROP FOREIGN KEY FK_B1460E66C7440455');
        $this->addSql('ALTER TABLE competition DROP FOREIGN KEY FK_B50A2CB1EED29F2F');
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA153AFA2DF0');
        $this->addSql('ALTER TABLE invitation DROP FOREIGN KEY FK_F11D61A21D1C63B3');
        $this->addSql('ALTER TABLE penalite DROP FOREIGN KEY FK_C62D8C5DEED29F2F');
        $this->addSql('ALTER TABLE penalite_joueur DROP FOREIGN KEY FK_454548FD20B2E66E');
        $this->addSql('ALTER TABLE penalite_joueur DROP FOREIGN KEY FK_454548FDFD71A9C5');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C7440455');
        $this->addSql('ALTER TABLE terrain DROP FOREIGN KEY FK_C87653B1EED29F2F');
        $this->addSql('DROP TABLE acceptation_reservation');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE competition');
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE invitation');
        $this->addSql('DROP TABLE matche');
        $this->addSql('DROP TABLE niveau_competition');
        $this->addSql('DROP TABLE participation');
        $this->addSql('DROP TABLE penalite');
        $this->addSql('DROP TABLE penalite_joueur');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE student');
        $this->addSql('DROP TABLE terrain');
        $this->addSql('DROP TABLE utilisateur');
    }
}
