# Belajar Linux Server - LEMP Stack

Dokumentasi setup LEMP Stack di Ubuntu Server 22.04

## Yang Dipelajari
- Securing & hardening Ubuntu Server
- Setup UFW Firewall
- Install dan konfigurasi Nginx
- Install dan konfigurasi MySQL
- Install PHP 8.1-FPM

## Spesifikasi
- OS: Ubuntu Server 22.04.5 LTS
- Web Server: Nginx
- Database: MySQL 8.0
- PHP: 8.1-FPM

## Langkah-langkah

### 1. Update System
```bash
sudo apt update && sudo apt upgrade -y
```

### 2. Setup Firewall
```bash
sudo ufw allow ssh
sudo ufw allow 80/tcp
sudo ufw enable
```

### 3. Install Nginx
```bash
sudo apt install nginx -y
```

### 4. Install MySQL
```bash
sudo apt install mysql-server -y
sudo mysql_secure_installation
```

### 5. Install PHP
```bash
sudo apt install php8.1-fpm php8.1-mysql -y
```
