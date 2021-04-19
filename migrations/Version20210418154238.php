<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210418154238 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
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
        $this->addSql('ALTER TABLE utilisateur CHANGE verifie is_verified TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B36D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE invitation DROP FOREIGN KEY FK_F11D61A21D1C63B3');
        $this->addSql('ALTER TABLE matche DROP FOREIGN KEY FK_9FCAD510EE2542E6');
        $this->addSql('ALTER TABLE matche DROP FOREIGN KEY FK_9FCAD510772C135C');
        $this->addSql('ALTER TABLE matche DROP FOREIGN KEY FK_9FCAD510C87653B1');
        $this->addSql('ALTER TABLE matche DROP FOREIGN KEY FK_9FCAD510508B1E3A');
        $this->addSql('ALTER TABLE niveau_competition DROP FOREIGN KEY FK_508B1E3AB50A2CB1');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24FB50A2CB1');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F2449BA15');
        $this->addSql('ALTER TABLE penalite DROP FOREIGN KEY FK_C62D8C5DEED29F2F');
        $this->addSql('ALTER TABLE penalite_joueur DROP FOREIGN KEY FK_454548FD20B2E66E');
        $this->addSql('ALTER TABLE penalite_joueur DROP FOREIGN KEY FK_454548FDFD71A9C5');
        $this->addSql('ALTER TABLE penalite_joueur DROP FOREIGN KEY FK_454548FD9FCAD510');
        $this->addSql('ALTER TABLE penalite_joueur DROP FOREIGN KEY FK_454548FDC62D8C5D');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C7440455');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C87653B1');
        $this->addSql('ALTER TABLE terrain DROP FOREIGN KEY FK_C87653B1EED29F2F');
        $this->addSql('ALTER TABLE terrain DROP FOREIGN KEY FK_C87653B1497DD634');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3BCF5E72D');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B36D861B89');
        $this->addSql('ALTER TABLE utilisateur CHANGE is_verified verifie TINYINT(1) NOT NULL');
    }
}
