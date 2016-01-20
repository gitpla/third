<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20151221194148 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE session DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE session ADD KEYSSY VARCHAR(32) NOT NULL, DROP KEYSS');
        $this->addSql('ALTER TABLE session ADD PRIMARY KEY (KEYSSY)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE session MODIFY KEYSSY VARCHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE session DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE session ADD KEYSS VARCHAR(32) NOT NULL COLLATE latin2_general_ci, DROP KEYSSY');
        $this->addSql('ALTER TABLE session ADD PRIMARY KEY (KEYSS)');
    }
}
