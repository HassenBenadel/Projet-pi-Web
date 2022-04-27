<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220427020201 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE depot (id_depot INT AUTO_INCREMENT NOT NULL, adresse VARCHAR(1000) NOT NULL, quantite INT NOT NULL, disponibilite VARCHAR(1000) NOT NULL, id_produit INT NOT NULL, Id_livraison INT NOT NULL, INDEX IDX_47948BBC3E08F8C0 (Id_livraison), PRIMARY KEY(id_depot)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livraison (Id_livraison INT AUTO_INCREMENT NOT NULL, date_livraison DATE NOT NULL, prix_total VARCHAR(1000) NOT NULL, mode_paiement VARCHAR(1000) NOT NULL, id_commande INT NOT NULL, id_client INT NOT NULL, Id_livreur INT NOT NULL, INDEX IDX_A60C9F1F7ABAE4CD (Id_livreur), PRIMARY KEY(Id_livraison)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livreur (id_livreur INT AUTO_INCREMENT NOT NULL, secteuractivite VARCHAR(20) NOT NULL, PRIMARY KEY(id_livreur)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE depot ADD CONSTRAINT FK_47948BBC3E08F8C0 FOREIGN KEY (Id_livraison) REFERENCES livraison (Id_livraison)');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F7ABAE4CD FOREIGN KEY (Id_livreur) REFERENCES livreur (idLivreur)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE depot DROP FOREIGN KEY FK_47948BBC3E08F8C0');
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F7ABAE4CD');
        $this->addSql('DROP TABLE depot');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP TABLE livreur');
    }
}
