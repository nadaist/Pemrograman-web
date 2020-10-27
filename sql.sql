CREATE DATABASE pemweb;

CREATE TABLE 'FORMAL-EDUCATION'(
  'SD' VARCHAR(50) DEFAULT NULL,
  'SMP' VARCHAR(50) DEFAULT NULL,
  'SMA' VARCHAR(50) DEFAULT NULL,
  'S1' VARCHAR(50) DEFAULT NULL
);

INSERT INTO 'FORMAL-EDUCATION' ('SD', 'SMP', 'SMA', 'S1') VALUES
('SD Negeri Karang Anyar 1 Bangkalan Madura', 'MTsN 2 Rejoso Peterongan Jombang', 'SMA DU 1 BPP-Teknologi Jombang', 
'UPN Veteran Jawa Timur');

CREATE TABLE 'sosial-media'(
'ig' VARCHAR(20) DEFAULT NULL,
'fb' VARCHAR(20) DEFAULT NULL,
'gm' VARCHAR(20) DEFAULT NULL,
'yt' VARCHAR(20) DEFAULT NULL,
);

INSERT INTO 'sosial-media' ('ig','fb','gm','yt') VALUES 
('Instagram','facebook','gmail','youtube');
