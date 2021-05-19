<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210422201937 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
       /* // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE User2 DROP CONSTRAINT FK_User_Perfiles');
        $this->addSql('DROP TABLE Perfiles');
        $this->addSql('DROP TABLE [user]');
        $this->addSql('DROP TABLE User2');
        $this->addSql('ALTER TABLE Assets_serv ALTER COLUMN id_servicio INT IDENTITY NOT NULL');
        $this->addSql('ALTER TABLE IdM_Edificios DROP COLUMN last_update');
        $this->addSql('ALTER TABLE IdM_Empresas DROP COLUMN last_update');*/
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
      /*  $this->addSql('CREATE SCHEMA db_accessadmin');
        $this->addSql('CREATE SCHEMA db_backupoperator');
        $this->addSql('CREATE SCHEMA db_datareader');
        $this->addSql('CREATE SCHEMA db_datawriter');
        $this->addSql('CREATE SCHEMA db_ddladmin');
        $this->addSql('CREATE SCHEMA db_denydatareader');
        $this->addSql('CREATE SCHEMA db_denydatawriter');
        $this->addSql('CREATE SCHEMA db_owner');
        $this->addSql('CREATE SCHEMA db_securityadmin');
        $this->addSql('CREATE SCHEMA dbo');
        $this->addSql('CREATE TABLE Perfiles (Id INT IDENTITY NOT NULL, Nombre NVARCHAR(250) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL, Descripcion NVARCHAR(512) COLLATE SQL_Latin1_General_CP1_CI_AS, Desde DATETIME2(6), Hasta DATETIME2(6), PRIMARY KEY (Id))');
        $this->addSql('CREATE TABLE [user] (id INT IDENTITY NOT NULL, username NVARCHAR(180) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL, roles VARCHAR(MAX) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL, password NVARCHAR(255) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL, PRIMARY KEY (id))');
        $this->addSql('CREATE UNIQUE NONCLUSTERED INDEX UNIQ_8D93D649F85E0677 ON [user] (username) WHERE username IS NOT NULL');
        $this->addSql('CREATE TABLE User2 (Id INT IDENTITY NOT NULL, Name NVARCHAR(128) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL, LastName NVARCHAR(128) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL, Username NVARCHAR(128) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL, Domain NVARCHAR(128) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL, password NVARCHAR(512) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL, Description NVARCHAR(256) COLLATE SQL_Latin1_General_CP1_CI_AS, Email NVARCHAR(256) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL, DateCreate DATETIME2(6) NOT NULL, LastUpdate DATETIME2(6) NOT NULL, LastLogin DATETIME2(6), PerfilesId INT NOT NULL, NotRestrictByEntity BIT NOT NULL, PRIMARY KEY (Id))');
        $this->addSql('CREATE INDEX IDX_D499FBEB86B810C ON User2 (PerfilesId)');
        $this->addSql('ALTER TABLE User2 ADD CONSTRAINT FK_User_Perfiles FOREIGN KEY (PerfilesId) REFERENCES Perfiles (Id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE Assets_serv ALTER COLUMN id_servicio INT NOT NULL');
        $this->addSql('ALTER TABLE IdM_Edificios ADD last_update NVARCHAR(8) NOT NULL');
        $this->addSql('ALTER TABLE IdM_Empresas ADD last_update NVARCHAR(8) NOT NULL');*/
    }
}
