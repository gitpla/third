<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20151221193018 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE connect_facebook DROP FOREIGN KEY FK_connect_facebook');
        $this->addSql('ALTER TABLE connect_facebook ADD CONSTRAINT FK_7C0FAFF4F8371B55 FOREIGN KEY (ID_USER) REFERENCES users (ID)');
        $this->addSql('ALTER TABLE cron_fcb_wall DROP FOREIGN KEY FK_cron_fcb_wall');
        $this->addSql('ALTER TABLE cron_fcb_wall ADD CONSTRAINT FK_B4C10E06F8371B55 FOREIGN KEY (ID_USER) REFERENCES users (ID)');
        $this->addSql('ALTER TABLE facebook_uids CHANGE ID ID INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE lerning CHANGE ID ID INT AUTO_INCREMENT NOT NULL, CHANGE ID_USER ID_USER INT DEFAULT NULL');
        $this->addSql('ALTER TABLE params DROP FOREIGN KEY FK_params');
        $this->addSql('ALTER TABLE params CHANGE ID ID INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE params ADD CONSTRAINT FK_8FCE0EF3F8371B55 FOREIGN KEY (ID_USER) REFERENCES users (ID)');
        $this->addSql('ALTER TABLE param_sys CHANGE ID ID INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE photos DROP FOREIGN KEY FK_photos');
        $this->addSql('ALTER TABLE photos ADD CONSTRAINT FK_876E0D9F8371B55 FOREIGN KEY (ID_USER) REFERENCES users (ID)');
        $this->addSql('ALTER TABLE session CHANGE KEYSS KEYSS VARCHAR(32) NOT NULL');
        $this->addSql('ALTER TABLE shop_order CHANGE ID ID INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE slow_imiona CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE stickers DROP FOREIGN KEY FK_stickers');
        $this->addSql('ALTER TABLE stickers ADD CONSTRAINT FK_D88DAC16F8371B55 FOREIGN KEY (ID_USER) REFERENCES users (ID)');
        $this->addSql('ALTER TABLE users_contact_mail DROP FOREIGN KEY FK_users_contact_mail');
        $this->addSql('ALTER TABLE users_contact_mail ADD CONSTRAINT FK_2A9D08BBF8371B55 FOREIGN KEY (ID_USER) REFERENCES users (ID)');
        $this->addSql('ALTER TABLE users_lection DROP FOREIGN KEY FK_lection1');
        $this->addSql('ALTER TABLE users_lection CHANGE ID_USER ID_USER INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users_lection ADD CONSTRAINT FK_4CE5E202F8371B55 FOREIGN KEY (ID_USER) REFERENCES users (ID)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE connect_facebook DROP FOREIGN KEY FK_7C0FAFF4F8371B55');
        $this->addSql('ALTER TABLE connect_facebook ADD CONSTRAINT FK_connect_facebook FOREIGN KEY (ID_USER) REFERENCES users (ID) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cron_fcb_wall DROP FOREIGN KEY FK_B4C10E06F8371B55');
        $this->addSql('ALTER TABLE cron_fcb_wall ADD CONSTRAINT FK_cron_fcb_wall FOREIGN KEY (ID_USER) REFERENCES users (ID) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE facebook_uids CHANGE ID ID INT UNSIGNED AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE lerning CHANGE ID ID INT UNSIGNED AUTO_INCREMENT NOT NULL, CHANGE ID_USER ID_USER INT NOT NULL');
        $this->addSql('ALTER TABLE param_sys CHANGE ID ID INT NOT NULL');
        $this->addSql('ALTER TABLE params DROP FOREIGN KEY FK_8FCE0EF3F8371B55');
        $this->addSql('ALTER TABLE params CHANGE ID ID INT UNSIGNED AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE params ADD CONSTRAINT FK_params FOREIGN KEY (ID_USER) REFERENCES users (ID) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE photos DROP FOREIGN KEY FK_876E0D9F8371B55');
        $this->addSql('ALTER TABLE photos ADD CONSTRAINT FK_photos FOREIGN KEY (ID_USER) REFERENCES users (ID) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE session CHANGE KEYSS KEYSS VARCHAR(32) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE shop_order CHANGE ID ID INT UNSIGNED AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE slow_imiona CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE stickers DROP FOREIGN KEY FK_D88DAC16F8371B55');
        $this->addSql('ALTER TABLE stickers ADD CONSTRAINT FK_stickers FOREIGN KEY (ID_USER) REFERENCES users (ID) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users_contact_mail DROP FOREIGN KEY FK_2A9D08BBF8371B55');
        $this->addSql('ALTER TABLE users_contact_mail ADD CONSTRAINT FK_users_contact_mail FOREIGN KEY (ID_USER) REFERENCES users (ID) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users_lection DROP FOREIGN KEY FK_4CE5E202F8371B55');
        $this->addSql('ALTER TABLE users_lection CHANGE ID_USER ID_USER INT NOT NULL');
        $this->addSql('ALTER TABLE users_lection ADD CONSTRAINT FK_lection1 FOREIGN KEY (ID_USER) REFERENCES users (ID) ON DELETE CASCADE');
    }
}
