<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220413163157 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
       // $this->addSql('ALTER TABLE commande ADD num_carte INT DEFAULT NULL');
        //$this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DFD574E8B FOREIGN KEY (num_carte) REFERENCES carte_fidelite (num_carte)');
        //$this->addSql('CREATE INDEX IDX_6EEAA67DFD574E8B ON commande (num_carte)');
        //$this->addSql('ALTER TABLE lignec ADD prix DOUBLE PRECISION NOT NULL, CHANGE idp id_p INT NOT NULL');
        $this->addSql('ALTER TABLE lignec ADD CONSTRAINT FK_725FFD2E2FBB81F FOREIGN KEY (id_panier) REFERENCES panier (id_panier)');
        //$this->addSql('CREATE INDEX IDX_725FFD2E2FBB81F ON lignec (id_panier)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
       /* $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DFD574E8B');
        $this->addSql('DROP INDEX IDX_6EEAA67DFD574E8B ON commande');
        $this->addSql('ALTER TABLE commande DROP num_carte');
        $this->addSql('ALTER TABLE lignec DROP FOREIGN KEY FK_725FFD2E2FBB81F');
        $this->addSql('DROP INDEX IDX_725FFD2E2FBB81F ON lignec');
        $this->addSql('ALTER TABLE lignec DROP prix, CHANGE id_p idp INT NOT NULL');*/
    }
}
