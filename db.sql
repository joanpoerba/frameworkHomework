SHOW DATABASES;
CREATE DATABASE warga;
USE warga;
SHOW TABLES;
DESC warga;
SELECT * FROM warga;
INSERT INTO warga(nama, nik, noKK, jenisKelamin, alamat, created_at, updated_at) VALUE("joan", "1234567890", "123457890", "lakiLaki", "telkom", NOW(), NOW());
