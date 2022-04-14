<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220406231822 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
       // $this->addSql('CREATE TABLE carte_fidelite (id INT AUTO_INCREMENT NOT NULL, id_client INT NOT NULL, numpoint INT NOT NULL, datecreation DATE NOT NULL, datefinvalidite DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       // $this->addSql('CREATE TABLE code_reduction (id INT AUTO_INCREMENT NOT NULL, pourcentage INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
       // $this->addSql('DROP TABLE cartefidelite');
        //$this->addSql('DROP TABLE categorie');
       // $this->addSql('DROP TABLE codereduction');
        //$this->addSql('DROP TABLE lignec');
        //$this->addSql('ALTER TABLE commande MODIFY id_commande INT NOT NULL');
        /*$this->addSql('DROP INDEX NumCarte ON commande');
        $this->addSql('ALTER TABLE commande DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE commande DROP NumCarte, CHANGE id_commande id INT AUTO_INCREMENT NOT NULL, CHANGE DateCommande date_commande DATE NOT NULL');
        $this->addSql('ALTER TABLE commande ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE panier ADD id INT AUTO_INCREMENT NOT NULL, DROP id_panier, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');*/
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        //$this->addSql('CREATE TABLE cartefidelite (NumCarte INT AUTO_INCREMENT NOT NULL, id_client INT NOT NULL, Datefinvalidite DATE NOT NULL, Datecreation DATE NOT NULL, Numpoint INT NOT NULL, PRIMARY KEY(NumCarte)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        //$this->addSql('CREATE TABLE categorie (idC INT AUTO_INCREMENT NOT NULL, type VARCHAR(254) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, imageC VARCHAR(250) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, UNIQUE INDEX type (type), PRIMARY KEY(idC)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        //$this->addSql('CREATE TABLE codereduction (code VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, pourcentage INT NOT NULL, PRIMARY KEY(code)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        //$this->addSql('CREATE TABLE favorie (idP INT NOT NULL, idUser INT NOT NULL, INDEX fk_produit (idP)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        //$this->addSql('CREATE TABLE lignec (id_panier VARCHAR(11) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, idP INT NOT NULL, quantite INT NOT NULL, INDEX codeArticle (idP), INDEX id_panier (id_panier)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        //$this->addSql('DROP TABLE carte_fidelite');
        //$this->addSql('DROP TABLE code_reduction');
        //$this->addSql('ALTER TABLE commande MODIFY id INT NOT NULL');
       // $this->addSql('ALTER TABLE commande DROP PRIMARY KEY');
        /*$this->addSql('ALTER TABLE commande ADD NumCarte INT NOT NULL, CHANGE id id_commande INT AUTO_INCREMENT NOT NULL, CHANGE date_commande DateCommande DATE NOT NULL');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT commande_ibfk_3 FOREIGN KEY (NumCarte) REFERENCES cartefidelite (NumCarte)');
        $this->addSql('CREATE INDEX NumCarte ON commande (NumCarte)');
        $this->addSql('ALTER TABLE commande ADD PRIMARY KEY (id_commande)');
        $this->addSql('ALTER TABLE panier MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE panier DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE panier ADD id_panier VARCHAR(11) NOT NULL, DROP id');
        $this->addSql('ALTER TABLE panier ADD PRIMARY KEY (id_panier)');*/
    }
}
